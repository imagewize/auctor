# Changelog

All notable changes to the Auctor theme will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

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