# Changelog

All notable changes to the Auctor theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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