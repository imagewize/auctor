# BLOCKS-DISPLAY.md

## Enhancing templates/index.html with Content Blocks

This document outlines content block ideas to showcase the Auctor theme's capabilities on the index.html template. The current template only displays blog posts and a featured post, but we can add many more content blocks to demonstrate the theme's versatility.

## Current Index Template Structure

```html
<!-- Header -->
<header class="site-header">...</header>

<!-- Main Content Area -->
<main class="wp-block-group alignwide">
  <div class="wp-block-spacer" style="height:50px"></div>
  <!-- wp:pattern {"slug":"auctor/blog-posts-static"} /-->
</main>

<!-- Featured Post Section -->
<!-- wp:pattern {"slug":"auctor/featured-post-static"} /-->

<!-- Footer -->
<footer class="site-footer">...</footer>
```

## Recommended Content Block Additions

### 1. Hero Section
**Pattern to use:** `auctor/hero-call-to-action-buttons`
**Description:** Eye-catching hero section with compelling headline, description, and action buttons
**Benefits:** Immediately showcases the theme's visual appeal and calls-to-action capabilities

### 2. Image and Text Layouts

#### 2.1 Text Left, Image Right
**Pattern to use:** `auctor/text-and-image-columns-with-testimonial`
**Description:** Two-column layout with text content on the left and an image on the right, includes testimonial element
**Benefits:** Demonstrates content/image balance and testimonial integration

#### 2.2 Image Left, Text Right
**Pattern to use:** `auctor/card-image-and-text`
**Description:** Image on the left with text content and call-to-action buttons on the right
**Benefits:** Shows reverse layout capability and card-style presentation

### 3. Call-to-Action Blocks

#### 3.1 Primary CTA Card
**Pattern to use:** `auctor/card-call-to-action`
**Description:** Prominent call-to-action box with title, description, and download/action button
**Benefits:** Showcases conversion-focused design elements

#### 3.2 Big Text CTA
**Pattern to use:** `auctor/card-big-text-call-to-action`
**Description:** Large text-based call-to-action with prominent messaging
**Benefits:** Demonstrates typography and attention-grabbing capabilities

#### 3.3 CTA with Multiple Buttons
**Pattern to use:** `auctor/card-call-to-action-with-buttons`
**Description:** Call-to-action section with multiple button options
**Benefits:** Shows flexibility in action options and button styling

### 4. Feature Showcase Blocks

#### 4.1 Feature Grid with Icons
**Pattern to use:** `auctor/feature-boxes-with-button`
**Description:** Grid layout showcasing 6 key features with icons, descriptions, and action buttons
**Benefits:** Demonstrates grid layouts, feature presentation, and consistent design

#### 4.2 Feature List with Emojis
**Pattern to use:** `auctor/features-with-emojis`
**Description:** Feature list using emoji icons for visual appeal
**Benefits:** Shows creative use of emojis in professional design

#### 4.3 Numbered Features with Image
**Pattern to use:** `auctor/image-and-numbered-features`
**Description:** Image paired with numbered feature list
**Benefits:** Demonstrates structured content presentation

### 5. Social Proof and Testimonials

#### 5.1 Statistics Section
**Pattern to use:** `auctor/numbers-stacked`
**Description:** Impressive statistics with large numbers and descriptions
**Benefits:** Shows data presentation and social proof capabilities

#### 5.2 Testimonial Highlight
**Pattern to use:** `auctor/testimonials-with-big-text`
**Description:** Large testimonial section with customer quotes and avatars
**Benefits:** Demonstrates testimonial layouts and trust-building elements

#### 5.3 Single Testimonial
**Pattern to use:** `auctor/single-testimonial`
**Description:** Featured single testimonial with rating and customer details
**Benefits:** Shows focused testimonial presentation

### 6. Content and Information Blocks

#### 6.1 FAQ Section
**Pattern to use:** `auctor/faq`
**Description:** Frequently asked questions in an organized format
**Benefits:** Demonstrates information architecture and content organization

#### 6.2 Team Members
**Pattern to use:** `auctor/team-members`
**Description:** Team member profiles with photos and descriptions
**Benefits:** Shows people-focused content layouts

#### 6.3 Contact Information
**Pattern to use:** `auctor/contact-details`
**Description:** Contact information and details presentation
**Benefits:** Demonstrates business information layouts

### 7. Advanced Layout Blocks

#### 7.1 Pricing Tables
**Pattern to use:** `auctor/pricing-table-3-column`
**Description:** Three-column pricing comparison table
**Benefits:** Shows complex data presentation and comparison layouts

#### 7.2 Cards and Boxes
**Pattern to use:** `auctor/card-text-and-details`
**Description:** Card-based content presentation with details
**Benefits:** Demonstrates card design patterns and content hierarchy

### 8. Interactive Elements

#### 8.1 Newsletter Signup
**Pattern to use:** `auctor/card-lead-magnet`
**Description:** Email capture form with compelling copy
**Benefits:** Shows lead generation capabilities

#### 8.2 Social Profiles
**Pattern to use:** `auctor/card-social-profile`
**Description:** Social media profile links and presentation
**Benefits:** Demonstrates social media integration

## Recommended Implementation Order

1. **Hero Section** - Start with impact at the top
2. **Blog Posts** (existing) - Keep current blog content
3. **Feature Grid** - Showcase key capabilities
4. **Text and Image Layout** - Demonstrate content/visual balance
5. **Statistics Section** - Add social proof
6. **Call-to-Action Card** - Drive conversions
7. **Testimonials** - Build trust
8. **Featured Post** (existing) - Keep current featured content
9. **FAQ or Team Section** - Add informational content
10. **Newsletter Signup** - Capture leads

## Design Considerations

### Spacing and Flow
- Use consistent spacing between sections (`var:preset|spacing|xxx-large`)
- Alternate background colors (white, tertiary, primary) for visual rhythm
- Include spacer elements where needed for breathing room

### Color Variations
- **Light sections:** Default white/base background
- **Accent sections:** Tertiary background for subtle contrast
- **Bold sections:** Primary background with contrasting text
- **Dark sections:** Main background for dramatic effect

### Content Hierarchy
- Start with broad appeal (hero, features)
- Move to specific benefits (testimonials, stats)
- End with action items (CTAs, newsletter)

### Mobile Responsiveness
All suggested patterns are fully responsive and will automatically adapt to mobile devices using the theme's responsive design system.

## Technical Implementation Notes

- Each pattern should be added as a separate `<!-- wp:pattern {"slug":"pattern-name"} /-->` block
- Patterns can be customized with additional CSS classes if needed
- Consider adding custom spacing groups between major sections
- Test on various screen sizes to ensure proper responsive behavior

## Content Strategy

### Headlines and Copy
- Use action-oriented language that speaks to publishers and writers
- Highlight the ease of use and professional results
- Include specific benefits rather than generic features
- Maintain consistent tone throughout all sections

### Imagery
- Use high-quality, professional images that relate to publishing/writing
- Ensure all images have proper alt text for accessibility
- Consider using the theme's duotone color effects for visual consistency

### Call-to-Action Strategy
- Primary CTA: Download/Try the theme
- Secondary CTAs: Learn more, explore features, read documentation
- Tertiary CTAs: View examples, contact support, follow social media

This comprehensive approach will transform the index.html template from a simple blog listing into a complete showcase of the Auctor theme's capabilities, demonstrating its value to potential users while maintaining excellent user experience and performance.