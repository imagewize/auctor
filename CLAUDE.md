# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Theme Architecture

Auctor is a WordPress Full Site Editing (FSE) block theme designed for designers, developers, and agencies to rapidly build professional websites. It combines features from the Moiraine and Thaiconomics themes to create a versatile multi-purpose design tool.

### Core Components

- **Block patterns** (`/patterns/`) - 70+ pre-designed content layouts for business, agency, portfolio, and general website needs
- **Block styles** (`/styles/`) - Visual variations for core blocks organized by type (buttons, colors, etc.)
- **Template parts** (`/parts/`) - Reusable template components (headers, footers, etc.)
- **Templates** (`/templates/`) - Full page templates including specialized layouts like single-with-sidebar
- **theme.json** - Global styles, typography, colors, and block settings configuration
- **functions.php** - Theme setup, custom image sizes, and block style registration

### Directory Structure

```
/
├── assets/              # Theme assets
├── css/                 # Compiled CSS files
├── demo-content/        # Demo content for theme setup
├── docs/               # Theme documentation
├── inc/                # PHP includes and extensions
├── parts/              # Template parts (header, footer, etc.)
├── patterns/           # Block patterns (70+ files)
├── styles/             # Style variations
│   ├── blocks/         # Block-specific styles
│   └── colors/         # Color scheme variations
├── templates/          # Page templates
├── functions.php       # Main theme functions
├── style.css          # Main stylesheet
└── theme.json         # FSE configuration
```

## Development Commands

### Theme Development

Run all commands from this theme directory:

```bash
# Install theme dependencies
composer install

# Lint PHP files
composer run lint

# WordPress Coding Standards scan
composer run wpcs:scan

# Fix WPCS violations
composer run wpcs:fix
```

### Custom Image Sizes

The theme registers custom image sizes in functions.php:

- `featured-landscape`: 740x400px (cropped)
- `featured-large`: 485x650px (cropped)
- `featured-vertical`: 388x525px (cropped)

### Color Scheme

The theme uses the following color palette defined in theme.json:

**Main Palette:**
- `primary` (Brand): #5344F4
- `primary-accent` (Brand Accent): #DDDAFB
- `primary-alt` (Brand Alt): #DEC9FF
- `primary-alt-accent` (Brand Alt Accent): #575094
- `main` (Contrast): #1E1E26
- `main-accent` (Contrast Accent): #d4d4ec
- `base` (Base): #fff
- `secondary` (Base Accent): #5F5F82
- `tertiary` (Tint): #f8f7fc
- `border-light` (Border Base): #E3E3F0
- `border-dark` (Border Contrast): #4E4E60

## Block Theme Features

### Block Patterns

Auctor includes extensive block patterns organized by category:
- Business and agency layouts
- Hero sections and call-to-actions
- Testimonials and team profiles
- Pricing tables and service cards
- Portfolio and project showcases
- Blog and content layouts

### Block Styles

Custom block styles are registered for:
- **Lists**: Check, Check Circle, Boxed variations
- **Buttons**: Brand colors, Light, Dark, Tint variations
- **Post Titles**: No underline variation

### Global Styles

The theme includes multiple style variations:
- Color schemes (blue, green, pink, orange, etc.)
- Layout styles (agency, consulting, creator, startup, studio)

## Theme Configuration

### Core Features

- Full Site Editing (FSE) support
- Editor styles automatically enqueued
- Core block patterns removed (uses custom patterns)
- WordPress 6.0+ required

### Code Standards

- PHP: WordPress Coding Standards via PHPCS
- Namespace: `Auctor\`
- Pattern files excluded from linting
- Follows WordPress theme development best practices

## Working with Patterns

Patterns are PHP files that return block markup. Each pattern includes:
- Pattern metadata (title, description, categories)
- Block markup using WordPress block syntax
- Support for theme-specific styling and layouts

To create new patterns, follow the existing pattern structure in `/patterns/` directory.

### Pattern Registration

While WordPress 6.0+ auto-registers patterns in `/patterns/` directory, patterns containing PHP code (like `get_template_directory_uri()` for dynamic image paths) require manual registration in `functions.php` to ensure proper PHP execution. The theme includes a `register_block_patterns()` function for this purpose.

### Pattern Layout Structure

For consistent layout behavior, all patterns should be wrapped in a group block with `"layout":{"type":"constrained"}`. This prevents full-width overflow issues and provides:
- Consistent spacing and padding control
- Proper containment for `alignwide` query blocks
- Background color and border support
- Predictable layout behavior when patterns are inserted

**Important**: When wrapping patterns in group blocks, remove `"align":"wide"` from inner query, post-template, and other blocks to prevent them from breaking out of the group's constraints. The group wrapper should control the overall layout containment, not the inner blocks.

Without group wrappers, query blocks with `alignwide` will expand to full content width rather than staying boxed.

### Block Metadata Names

To improve editor usability, all group blocks should include descriptive metadata names using `"metadata":{"name":"Block Name"}`. This makes blocks show with meaningful names in the WordPress editor sidebar instead of generic "Group" labels:

```php
<!-- wp:group {"metadata":{"name":"Blog Posts Grid"},"align":"wide"} -->
```

This helps content editors identify and work with specific blocks more easily in the editor interface.

### Image Usage Best Practices

**Always use WordPress image blocks instead of HTML blocks for images:**

❌ **Avoid HTML blocks for images:**
```php
<!-- wp:html -->
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/path/image.svg" alt="Description" width="20" height="20" />
<!-- /wp:html -->
```

✅ **Use proper WordPress image blocks:**
```php
<!-- wp:image {"width":"20px","height":"20px","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/path/image.svg" alt="<?php esc_attr_e( 'Description', 'auctor' ); ?>" style="width:20px;height:20px"/></figure>
<!-- /wp:image -->
```

**Benefits of using image blocks:**
- Better accessibility with proper alt text handling
- Consistent with WordPress block editor expectations
- Easier for content editors to modify
- Better SEO and semantic markup
- Proper translation support with `esc_attr_e()`
- Enhanced editor experience and block controls

For decorative containers around images, use group blocks with proper styling instead of HTML divs.