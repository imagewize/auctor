# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Theme Architecture

Auctor is a WordPress Full Site Editing (FSE) block theme designed for publishers, editors, and writers. It combines features from the Moiraine and Thaiconomics themes to create a modern publishing-focused WordPress theme.

### Core Components

- **Block patterns** (`/patterns/`) - 70+ pre-designed content layouts for articles, heroes, CTAs, testimonials, etc.
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

## Block Theme Features

### Block Patterns

Auctor includes extensive block patterns organized by category:
- Article layouts with photography
- Hero sections and call-to-actions
- Testimonials and author boxes
- Pricing tables and cards
- Blog post layouts and grids

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