=== Auctor WordPress Block Theme ===
Contributors: mmcalister, patrickposner, rhand
Tags: business, agency, portfolio, professional, corporate, creative, multipurpose, blog, publishing, editorial, grid-layout, one-column, two-columns, three-columns, four-columns, block-patterns, block-styles, custom-logo, custom-menu, editor-style, featured-images, full-site-editing, full-width-template, rtl-language-support, style-variations, template-editing, theme-options, translation-ready, wide-blocks
Requires at least: 6.0
Tested up to: 6.7.1
Requires PHP: 7.3
Stable tag: 1.4.4
License: GNU General Public License v3.0 (or later)
License URI: https://www.gnu.org/licenses/gpl-3.0.html

== Description ==

Auctor is a modern WordPress block theme designed for designers, developers, and agencies to rapidly build professional websites. With beautiful typography, elegant spacing, and 70+ versatile patterns, Auctor provides everything you need to create stunning websites using WordPress's built-in block editor.

Auctor features carefully crafted typefaces, optimized design systems, and specialized patterns for business, agency, and portfolio layouts, making it the perfect choice for client projects, creative studios, and professional websites across all industries. The theme includes 70+ block patterns, 5 style variations, and comprehensive full site editing support.

== Changelog ==

= 1.4.4 - 09/18/25 =
* Fixed marketing pattern header/footer conflict by removing template parts from page-marketing.php
* Pattern now works properly when inserted into existing pages without layout conflicts
* Removed header and footer dependencies that were causing insertion failures
* Pattern maintains all original content sections while eliminating template part conflicts
* Improved pattern usability for standalone insertion into any page

= 1.4.3 - 09/18/25 =
* Added comprehensive template pattern library with 15+ new template patterns for enhanced layout flexibility
* Added template-page-* patterns: centered, full, wide, left-sidebar, right-sidebar layouts for page customization
* Added template-post-* patterns: centered, wide, left-sidebar, right-sidebar layouts for post customization
* Added template-index-* patterns: grid and list layouts for homepage and archive pages
* Added template-page-404.php pattern for custom 404 error page styling
* Added template-page-archive.php and template-page-search.php for specialized archive and search layouts
* Added page-marketing.php pattern: complete marketing homepage with hero, features, testimonials sections
* Simplified index.html template to use new template-index-grid pattern for cleaner architecture
* Enhanced template organization with consistent naming conventions and proper template type assignments
* All new template patterns include proper metadata, categories, and keywords for better editor experience
* Template patterns follow FSE best practices with proper layout constraints and responsive design

= 1.4.2 - 09/18/25 =
* Fixed pattern registration cleanup by removing unnecessary manual registration system
* Confirmed WordPress 6.0+ auto-registration works correctly with PHP functions in patterns
* Removed entire register_block_patterns() function from functions.php (70+ lines of code)
* Fixed hardcoded local URLs in services-feature-cards.php by converting to relative paths
* Updated CLAUDE.md and docs/PATTERNS-CLEANUP.md with confirmed auto-registration behavior
* Simplified theme architecture by relying on WordPress core functionality instead of custom registration
* All patterns now auto-register like OllieWP approach without manual intervention

= 1.4.1 - 09/18/25 =
* Added new Publishing style variation with editorial-focused Bitter/Lato typography and earth-tone colors
* Enhanced font library with Bitter serif for body text and Lato sans-serif for headings
* Improved pattern compatibility by removing hardcoded fontFamily attributes from blog patterns
* Enhanced style variation compatibility across all 6 theme styles (agency, consulting, creator, startup, studio, publishing)
* Added comprehensive style variation development guidance to CLAUDE.md documentation
* Simplified attribution references in theme documentation for clearer presentation
* All patterns now inherit typography from active style variation for better design consistency

= 1.4.0 - 09/18/25 =
* Major transformation: Repositioned Auctor from publishing-focused to multi-purpose design tool
* Updated all hero patterns from "Publishing Reimagined" to "Design Reimagined" with designer/developer focus
* Comprehensive pattern content updates across 14+ patterns targeting agencies, freelancers, and developers
* Updated team member roles to Creative Director, Frontend Developer, and UX Designer
* Enhanced call-to-action buttons with "Get Started", "View Our Work", "Start Your Project"
* Updated testimonials to focus on client work, design workflows, and pattern library benefits
* Complete documentation overhaul: README.md, style.css, and CLAUDE.md updated for multi-purpose positioning
* Added business, agency, portfolio, professional, corporate, creative, multipurpose tags
* Created comprehensive transformation strategy documentation in docs/MULTIPURPOSE.md
* Enhanced feature descriptions to emphasize rapid website development for client projects

= 1.3.0 - 09/18/25 =
* Added comprehensive benefits and services patterns for enhanced content creation
* Added benefits-list-dark.php and benefits-list-light.php with professional styling
* Added services-feature-cards.php for service displays and enhanced SVG icon library
* Extended color palette with dark-teal and ocean-blue for professional design flexibility
* Enhanced pattern registration system and documentation for WordPress block development
* Improved automatic pattern handling for dynamic content with proper metadata names

= 1.1.2 - 09/17/25 =
* Fixed branding consistency by removing remaining Thaiconomics and Moiraine references from JavaScript files
* Updated assets/js/block-extensions/post-excerpt.js to use 'auctor' text domain and filter names
* Updated assets/js/custom-blocks.js to use 'auctor' filter namespace instead of 'thaiconomics'
* Updated inc/block-extensions.php to use 'auctor' filter namespace
* All JavaScript filter hooks now use consistent 'auctor' namespace
* Completes the rebranding effort for all theme components

= 1.1.1 - 09/17/25 =
* Enhanced index template with comprehensive block patterns showcase
* Added hero section, testimonials, feature boxes, and statistics sections
* Created comprehensive theme showcase documentation in docs/BLOCKS-DISPLAY.md
* Updated duotone color schemes across multiple patterns for better brand consistency
* Transformed index template from simple blog listing to full theme demonstration
* All pattern additions maintain responsive design principles

= 1.1.0 - 09/17/25 =
* Added comprehensive theme documentation for users and developers
* Created publishing-focused static content to solve empty post grid issues
* Enhanced block styles with improved CSS loading and editor integration
* Updated header template to use hamburger menu pattern for better mobile experience
* Updated pattern content to focus on publishing industry use cases
* Added proper Unsplash photo credits to README.md
* Block styles now properly enqueue in both frontend and editor contexts
* Static patterns ensure no empty content sections on fresh installations

= 1.0.3 - 09/17/25 =
* Updated README.md to reflect Auctor's identity as a publisher-focused theme
* Changed theme name and description to emphasize editorial and publishing features
* Revised attribution to reference both Moiraine and Thaiconomics as base themes
* Simplified installation instructions for standalone theme usage

= 1.0.2 - 09/17/25 =
* Fixed template part reference by removing hardcoded theme attribute from post-sidebar
* Added missing CSS import statement to properly load block styles
* Template part references now use the theme's own slug
* Block styles CSS import ensures proper styling for custom blocks and patterns

= 1.0.1 - 09/17/25 =
* Fixed remaining pattern namespace references from moiraine/ to auctor/
* Resolved white screen issue caused by block validation errors
* Updated all template and pattern references to use correct auctor/ namespace
* Theme now loads properly without missing pattern errors

= 1.0.0 - 09/17/25 =
* Initial release: Merged Moiraine parent theme and Thaiconomics child theme
* Added 70+ block patterns complete pattern library
* Added 5 style variations: Startup, consulting, studio, creator, and agency styles
* Added custom patterns for post grids and featured posts
* Added custom fonts: Bodoni Moda and Open Sans font families
* Added enhanced templates with custom index, single post, and sidebar templates
* Added block extensions with JavaScript enhancements for post excerpts
* Added custom image sizes: Featured landscape, large, and vertical image sizes
* Removed parent theme dependency, making Auctor a standalone theme
* Updated all theme references from "moiraine" and "thaiconomics" to "auctor"
* Merged theme.json configurations for colors, typography, and spacing


== Copyright ==

Auctor Theme, (C) 2025 Imagewize
Auctor is distributed under the terms of the GNU GPL.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.


All media licensed under Creative Commons Zero (CC0) https://creativecommons.org/publicdomain/zero/1.0/

Photo Credits:
- Favicon: ladybug icon from Blade UI Kit
- Photo by Ben Wicks on Unsplash (https://unsplash.com/@profwicks)
- Photo by 91 Magazine on Unsplash (https://unsplash.com/@91magazine)
- Photo by Arif Riyanto on Unsplash (https://unsplash.com/@arifriyanto)
- Photo by Kevin Woblick on Unsplash (https://unsplash.com/@kovah)

skateboarding.webp  - https://stocksnap.io/photo/skateboarder-sidewalk-NH8J97NEVN
computer-hands.webp - https://stocksnap.io/photo/computer-laptop-FBXB2DA8O7
avatar-1.webp       - https://stocksnap.io/photo/people-man-A3WDGDTBI6
avatar-2.webp       - https://stocksnap.io/photo/urban-fashion-TQAKNY0XO2
avatar-3.webp       - https://stocksnap.io/photo/woman-glasses-7RKWHUXLMQ
avatar-4.webp       - https://stocksnap.io/photo/smiling-woman-KS92MVGSXY
avatar-5.webp       - https://stocksnap.io/photo/male-professional-6QXAIH13O6
avatar-7.webp       - https://stocksnap.io/photo/woman-business-LERRJPTMHP
desktop.webp        - https://startupstockphotos.com/photos/workspace-desk-office/
guy-laptop.webp     - https://startupstockphotos.com/photos/office-worker-computer/

logo-1.webp, logo-2.webp, logo-3.webp, logo-4.webp, logo-5.webp - created by Mike McAlister and available via CC0.

Other assets:

- The Bodoni Moda font is available via the SIL Open Font License 1.1
- The Open Sans font is available via the Apache License 2.0
- Icons available from Iconnoir via the MIT License: https://github.com/iconoir-icons/iconoir/blob/main/LICENSE
