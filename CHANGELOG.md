# Changelog

All notable changes to the Auctor theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.4.1] - 2025-09-18

### Added
- **Publishing Style Variation**: New editorial-focused style variation with Bitter/Lato typography
  - Added `styles/publishing.json` with earth-tone color palette and publishing-optimized fonts
  - Bitter serif font for body text with enhanced readability for long-form content
  - Lato sans-serif font for headings with clean, modern styling
  - Earth-tone color scheme: forest green primary (#2C5F2D) with supporting accent colors

- **Font Library Expansion**: Enhanced typography options for style variations
  - Added `assets/fonts/bitter-regular.woff2` for editorial and publishing layouts
  - Added `assets/fonts/lato-regular.woff2` for clean, readable heading typography
  - Updated `theme.json` with new font family definitions available across all style variations

### Enhanced
- **Pattern Font Compatibility**: Improved style variation compatibility across all patterns
  - Removed hardcoded `fontFamily` attributes from `blog-posts-static.php`, `featured-post-static.php`, `post-loop-grid-tc.php`, and `post-single-featured.php`
  - Patterns now inherit typography from active style variation instead of forcing specific fonts
  - Better pattern flexibility across all 6 style variations (agency, consulting, creator, startup, studio, publishing)

- **Documentation Enhancement**: Comprehensive style variation development guidance
  - Added detailed style variation best practices to `CLAUDE.md`
  - Font management guidelines for multi-style theme development
  - Pattern compatibility requirements for hardcoded font removal
  - Implementation guidance for typography inheritance across style variations

### Changed
- **Attribution Simplification**: Cleaned up theme documentation for clearer presentation
  - Simplified attribution references in `README.md` and `readme.txt`
  - Streamlined theme description to focus on current features rather than heritage

### Technical Details
- All font additions maintain WordPress font loading standards with proper font-display optimization
- Pattern updates ensure consistent typography behavior across all style variations
- New publishing style follows established theme architecture and maintains backward compatibility
- Enhanced developer documentation for creating style-variation-compatible patterns

## [1.4.0] - 2025-09-18

### Added
- **Multi-Purpose Transformation**: Transformed Auctor from publishing-focused to versatile design tool
  - Added comprehensive multi-purpose positioning strategy in `docs/MULTIPURPOSE.md`
  - Documented complete transformation plan with implementation phases
  - Added detailed content strategy guidelines for broad appeal

- **Enhanced Documentation**: Complete documentation overhaul for multi-purpose positioning
  - Updated README.md with designer/developer/agency focus
  - Updated readme.txt with business, agency, portfolio, professional tags
  - Updated style.css theme description for multi-purpose appeal
  - Updated CLAUDE.md development instructions for new theme focus

### Changed
- **Pattern Content Updates**: Comprehensive content transformation across 14+ patterns
  - **Hero Patterns**: Updated 4 hero patterns from "Publishing Reimagined" to "Design Reimagined"
    - Changed headlines to focus on website building and digital experiences
    - Updated descriptions to target designers, developers, and agencies
    - Updated button text to "Get Started", "View Our Work", "Start Building"

  - **Team Sections**: Diversified professional roles and descriptions
    - Updated team member roles: Creative Director, Frontend Developer, UX Designer
    - Changed team description to focus on client work and digital experiences

  - **Call-to-Action Updates**: Modernized CTA language for broader appeal
    - Updated buttons: "Start Your Project", "Get Started", "View Our Work"
    - Changed focus from publishing actions to design/development actions
    - Updated footer CTAs to target broader audience

  - **Feature Content**: Enhanced feature descriptions for multi-purpose use
    - Updated features to emphasize 70+ patterns and professional templates
    - Changed focus from publishing to business/agency/portfolio sites
    - Updated large text sections to target digital experiences

  - **Testimonials**: Updated testimonials for client/agency focus
    - Updated testimonials to focus on client work and design workflow
    - Changed content from publishing to website building and pattern library
    - Updated quotes to emphasize professional design and client satisfaction

- **Theme Positioning**: Complete repositioning from publisher-specific to multi-purpose
  - Changed target audience from "writers, editors, publishers" to "designers, developers, agencies"
  - Updated theme description to emphasize rapid website development
  - Enhanced feature messaging for professional client work

### Enhanced
- **Pattern Categories**: Improved pattern organization for diverse use cases
  - Updated pattern descriptions to include business and agency layouts
  - Enhanced pattern categories for better multi-purpose discovery
  - Maintained publishing heritage while expanding scope

### Technical Details
- All pattern content updates maintain existing design structure
- Documentation updates ensure consistent multi-purpose messaging
- Theme transformation preserves backward compatibility
- Enhanced developer guidance for multi-purpose theme usage

## [1.3.0] - 2025-09-18

### Added
- **New Block Patterns**: Added comprehensive benefits and services patterns for enhanced content creation
  - Added `patterns/benefits-list-dark.php` with dark theme styling for benefit showcases
  - Added `patterns/benefits-list-light.php` with light theme styling for benefit showcases
  - Added `patterns/services-feature-cards.php` for professional service displays
  - New pattern category: "Services" for service-related patterns

- **Enhanced SVG Icon Library**: Expanded icon collection for improved visual communication
  - Added `patterns/images/arrow-circle-filled-dark.svg` for dark theme arrow buttons
  - Added `patterns/images/arrow-circle-filled.svg` for standard arrow buttons
  - Added `patterns/images/arrow-circle.svg` for outline arrow buttons
  - Added `patterns/images/arrow-right-small.svg` for compact navigation elements
  - Added `patterns/images/checkmark.svg` for benefit lists and confirmations
  - Added `patterns/images/chevron-right.svg` for directional navigation

- **Extended Color Palette**: Added professional color options for enhanced design flexibility
  - Added `dark-teal` (#1A3A47) for sophisticated dark accents
  - Added `ocean-blue` (#0295DA) for vibrant call-to-action elements

### Enhanced
- **Pattern Registration System**: Improved automatic pattern handling for dynamic content
  - Updated `functions.php` to register new patterns requiring PHP execution
  - Enhanced pattern category organization for better content editor experience

- **Documentation Enhancement**: Comprehensive development guidance updates
  - Added complete color scheme documentation with all palette values
  - Added image usage best practices for WordPress block development
  - Enhanced guidelines for proper image block implementation vs HTML blocks
  - Improved accessibility and SEO guidance for theme development

### Technical Details
- Pattern files now include proper metadata names for enhanced editor experience
- All new patterns follow consistent layout structure with group wrappers
- SVG icons optimized for web delivery and accessibility
- Color additions maintain theme consistency and brand identity
- Documentation follows WordPress.org block theme development standards

## [1.2.0] - 2025-09-17

### Added
- **Enhanced Pattern Registration**: Added automatic registration for patterns containing dynamic PHP code
  - New `register_block_patterns()` function in `functions.php` ensures patterns with `get_template_directory_uri()` execute properly
  - Supports patterns that require PHP execution for dynamic image paths and content
  - Maintains compatibility with WordPress 6.0+ auto-registration for static patterns

- **Foundational CSS System**: Introduced modular CSS architecture for better maintainability
  - Added `css/base.css` for foundational styles that other stylesheets can build upon
  - Updated CSS enqueuing hierarchy to load base styles before block-specific styles
  - Improved separation of concerns between foundational and component-specific styling

- **Enhanced Block Editor Experience**: Improved editor usability and pattern organization
  - Added descriptive metadata names to all pattern group blocks for better editor sidebar navigation
  - Patterns now show meaningful names like "Blog Posts Grid" instead of generic "Group" labels
  - Improved content editor workflow with clearer block identification

### Changed
- **Pattern Layout Architecture**: Implemented consistent layout structure across all patterns
  - All patterns now use group wrapper with `"layout":{"type":"constrained"}` for consistent containment
  - Removed `"align":"wide"` from inner blocks to prevent layout overflow issues
  - Improved responsive behavior and predictable pattern insertion experience

- **Blog Pattern Enhancements**: Updated blog and post patterns for better responsive design
  - Changed grid layout from fixed `30rem` to flexible `20rem` minimum column width
  - Updated `blog-posts-static.php` with improved responsive grid behavior
  - Enhanced `post-loop-grid-tc.php` with better containment and spacing
  - Improved `post-single-featured.php` with consistent layout structure

- **Pattern Visibility**: Made dynamic patterns available in editor inserter
  - Changed `post-loop-grid-tc` and `post-single-featured` from `Inserter: false` to `Inserter: true`
  - Patterns are now accessible to content editors for manual insertion
  - Provides more flexibility for custom page layouts and content organization

### Enhanced
- **Documentation Expansion**: Comprehensive developer guidance in CLAUDE.md
  - Added detailed pattern registration workflow documentation
  - Included layout structure best practices and implementation guidelines
  - Enhanced block metadata naming conventions for improved editor experience
  - Added technical notes on WordPress 6.0+ pattern registration behavior

### Technical Details
- Block editor assets now properly handled through dedicated enqueue functions
- Pattern registration system supports full range of WordPress pattern properties
- CSS dependency chain ensures proper loading order for foundational and component styles
- All changes maintain backward compatibility with existing theme installations

## [1.1.2] - 2025-09-17

### Fixed
- **Branding consistency**: Removed remaining Thaiconomics and Moiraine references from JavaScript files
  - Updated `assets/js/block-extensions/post-excerpt.js`: Changed text domain and filter names from 'moiraine' to 'auctor'
  - Updated `assets/js/custom-blocks.js`: Changed filter namespace from 'thaiconomics' to 'auctor'
  - Updated `inc/block-extensions.php`: Changed filter namespace from 'thaiconomics' to 'auctor'

### Technical Details
- All JavaScript filter hooks now use consistent 'auctor' namespace
- Block extension translations properly reference 'auctor' text domain
- Completes the rebranding effort for all theme components

## [1.1.1] - 2025-09-17

### Added
- **Enhanced Index Template**: Expanded `templates/index.html` with comprehensive block patterns showcase
  - Added hero section with call-to-action buttons for immediate visual impact
  - Added testimonial and image columns section for social proof and content balance
  - Added feature boxes section to highlight key theme capabilities
  - Added statistics section with numbered achievements for credibility
  - Added testimonials section with big text for trust building

- **Documentation Enhancement**: Created comprehensive theme showcase documentation
  - Added `docs/BLOCKS-DISPLAY.md` with detailed content block recommendations
  - Provides implementation guidance for transforming simple blog template into full theme showcase
  - Includes design considerations, content strategy, and technical implementation notes

### Changed
- **Pattern Color Updates**: Updated duotone color schemes across multiple patterns
  - Changed from `#462CFF, #ECE8FF` to `#5344F4, #DDDAFB` for better brand consistency
  - Updated colors in: hero patterns, image/text layouts, lead magnets, and feature sections
  - Maintains visual harmony across all pattern implementations

- **Index Template Structure**: Transformed from simple blog listing to comprehensive theme demonstration
  - Now showcases multiple content types and layouts
  - Demonstrates theme's versatility for publishers and content creators
  - Maintains existing blog functionality while adding promotional content

### Technical Details
- All pattern additions maintain responsive design principles
- Color scheme updates ensure consistent brand identity across patterns
- Documentation follows WordPress.org block theme best practices
- Enhanced user experience for theme evaluation and demonstration

## [1.1.0] - 2025-09-17

### Added
- **Documentation Suite**: Created comprehensive theme documentation for users and developers
  - Added `docs/QUICK-START.md` with detailed block theme demo content strategy
  - Added `docs/SETUP-GUIDE.md` with step-by-step setup instructions for new installations
  - Documentation covers WordPress.org compliant approaches and user workflows

- **Static Content Patterns**: Created publishing-focused static content to solve empty post grid issues
  - Added `patterns/blog-posts-static.php` with editorial industry sample content
  - Features publishing-focused article titles and professional imagery
  - Ensures immediate professional demo on fresh WordPress installations

- **Enhanced Block Styles**: Improved CSS loading and block editor integration
  - Added block-specific CSS enqueuing in both frontend and editor
  - Enhanced functions.php with proper block styles loading
  - Improved editor experience with consistent styling

### Changed
- **Header Template**: Updated to use hamburger menu pattern for better mobile experience
  - Changed from `header-light-action-button` to `header-light-with-hamburger-menu`
  - Improves navigation accessibility and mobile usability

- **Pattern Content Updates**: Publishing industry focus across multiple patterns
  - Updated call-to-action patterns to reflect editorial use cases
  - Changed "Explore Moiraine" to "Explore Auctor" in CTA patterns
  - Replaced generic business messaging with publishing-specific content

- **Image Attribution**: Added proper Unsplash photo credits to README.md
  - Ben Wicks bookshelf photography credit
  - 91 Magazine workspace photography credit
  - Arif Riyanto bookstore photography credit

### Technical Details
- Block styles now properly enqueue in both frontend and editor contexts
- Static patterns ensure no empty content sections on fresh installations
- Documentation follows WordPress.org block theme best practices
- All changes maintain translation readiness and accessibility standards

## [1.0.3] - 2025-09-17

### Changed
- **Theme documentation**: Updated README.md to reflect Auctor's identity as a publisher-focused theme
  - Changed theme name from "Moiraine" to "Auctor — A WordPress Block Theme for Publishers"
  - Updated description to emphasize editorial and publishing features
  - Revised attribution to reference both Moiraine and Thaiconomics as base themes
  - Removed installation links and simplified getting started section
  - Updated all theme references throughout the documentation

### Technical Details
- Documentation now accurately reflects the theme's publishing and editorial focus
- Removed references to external download links and child theme dependencies
- Simplified installation instructions for standalone theme usage

## [1.0.2] - 2025-09-17

### Fixed
- **Template part reference**: Removed hardcoded `theme="thaiconomics"` attribute from post-sidebar template part in `single-with-sidebar.html`
- **CSS import**: Added missing `@import url('./css/blocks.css');` statement to properly load block styles

### Technical Details
- Template part references now use the theme's own slug without explicit theme specification
- Block styles CSS import ensures proper styling for custom blocks and patterns

## [1.0.1] - 2025-09-17

### Fixed
- **Pattern namespace references**: Fixed remaining `moiraine/` pattern references that weren't updated during initial merge
  - Updated `templates/index.html`: Changed `moiraine/post-loop-grid-tc` and `moiraine/post-single-featured` to `auctor/` namespace
  - Updated `templates/archive.html`: Changed `moiraine/post-loop-grid-default` to `auctor/post-loop-grid-default`
  - Updated `parts/header.html`: Changed `moiraine/header-light-wth-action-button` to `auctor/header-light-action-button`
  - Updated `parts/footer.html`: Changed `moiraine/footer-light` to `auctor/footer-light`
- **White screen issue**: Resolved block validation errors that caused blank pages on frontend and backend
- **Theme activation**: Theme now loads properly without missing pattern errors

### Technical Details
- Block validation was failing due to missing patterns with `moiraine/` namespace
- WordPress was unable to find referenced patterns, causing fatal errors in block rendering
- All pattern references now correctly use the `auctor/` namespace as intended

## [1.0.0] - 2025-09-17

### Added
- **Initial release**: Merged Moiraine parent theme and Thaiconomics child theme into standalone Auctor theme
- **70+ block patterns**: Complete pattern library from Moiraine theme
- **5 style variations**: Startup, consulting, studio, creator, and agency styles
- **Custom patterns**: Thaiconomics-specific patterns for post grids and featured posts
- **Custom fonts**: Bodoni Moda and Open Sans font families
- **Enhanced templates**: Custom index, single post, and sidebar templates
- **Block extensions**: JavaScript enhancements for post excerpts and custom blocks
- **Custom image sizes**: Featured landscape, large, and vertical image sizes
- **Full site editing**: Complete FSE block theme functionality

### Changed
- **Independence**: Removed parent theme dependency, making Auctor a standalone theme
- **Namespace**: Updated all theme references from "moiraine" and "thaiconomics" to "auctor"
- **Configuration**: Merged theme.json configurations for colors, typography, and spacing
- **Asset integration**: Combined CSS, JavaScript, and font assets from both themes

### Migrated
- **From Moiraine**: Base theme structure, patterns, templates, and styling framework
- **From Thaiconomics**: Custom patterns, fonts, block extensions, and enhanced templates
- **Template parts**: Header, footer, sidebar, and post sidebar components
- **Block styles**: Post title variations and custom styling options