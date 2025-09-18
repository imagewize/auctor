# Pattern Differences: Auctor vs Ollie

## Patterns Auctor has that Ollie doesn't:

1. **benefits-list-dark.php**
2. **benefits-list-light.php**
3. **blog-posts-static.php**
4. **card-text-box-with-arrow.php** (vs Ollie's `card-text-box-with-link.php`)
5. **contact-side-by-side.php**
6. **cta-explore-more.php**
7. **featured-post-static.php**
8. **footer-centered-light.php**
9. **footer-centered.php**
10. **footer-light.php**
11. **footer-minimal-light.php**
12. **footer-minimal.php**
13. **footer.php**
14. **header-light-action-button.php**
15. **header-light-with-hamburger-menu.php**
16. **page-contact.php**
17. **post-loop-grid-tc.php**
18. **post-single-featured.php**
19. **services-feature-cards.php**

## Patterns Ollie has that Auctor doesn't:

1. **card-text-box-with-link.php** (vs Auctor's `card-text-box-with-arrow.php`)
2. **footer-dark-centered.php**
3. **footer-dark-minimal.php**
4. **footer-dark.php**
5. **footer-light-centered.php**
6. **footer-light-minimal.php**
7. **menu-card-1.php** through **menu-card-4.php** (4 patterns)
8. **menu-mobile-1.php** through **menu-mobile-6.php** (6 patterns)
9. **menu-panel-1.php** through **menu-panel-4.php** (4 patterns)

## Template Patterns (COPIED TO AUCTOR):

✅ **template-index-grid.php** - COPIED
✅ **template-index-list.php** - COPIED
✅ **template-page-404.php** - COPIED
✅ **template-page-archive.php** - COPIED
✅ **template-page-centered.php** - COPIED
✅ **template-page-full.php** - COPIED
✅ **template-page-left-sidebar.php** - COPIED
✅ **template-page-right-sidebar.php** - COPIED
✅ **template-page-search.php** - COPIED
✅ **template-page-wide.php** - COPIED
✅ **template-post-centered.php** - COPIED
✅ **template-post-left-sidebar.php** - COPIED
✅ **template-post-right-sidebar.php** - COPIED
✅ **template-post-wide.php** - COPIED

## Summary

- **Auctor has 19 additional patterns** not in Ollie
- **Ollie has 23 remaining patterns** not in Auctor (14 template patterns copied)
- **Template patterns: 14 copied to Auctor** ✅

### Key Differences

**Auctor's strengths:**
- More footer variations (6 additional footer styles)
- Static content patterns (blog-posts-static, featured-post-static)
- Specialized layouts (benefits lists, services feature cards)
- Contact-focused patterns

**Ollie's strengths:**
- Extensive menu navigation patterns (14 total: 4 card + 6 mobile + 4 panel)
- Comprehensive template layout patterns (14 total for various page/post layouts)
- Dark theme footer variations
- More systematic template organization

## Template Integration Complete ✅

**Changes Made:**
1. **Created** `patterns/page-marketing.php` - Contains the original marketing homepage layout
2. **Updated** `templates/index.html` - Now uses `auctor/template-index-grid` for blog layout
3. **Added** 14 template patterns from Ollie for layout flexibility

**Usage Options:**

**For Blog Homepage:**
- Current: `templates/index.html` → Grid blog layout
- Alternative: Change to `auctor/template-index-list` for list layout

**For Marketing Homepage:**
- Use pattern `auctor/page-marketing` in Site Editor
- Apply to front-page template or any page

**For Page/Post Layouts:**
- 14 template patterns available in Site Editor
- Users can switch between centered, wide, sidebar layouts

**Recommendations:**
1. Consider adding Ollie's menu patterns for better navigation flexibility
2. Evaluate remaining footer dark patterns
3. Template system now matches Ollie's flexibility while keeping Auctor's unique marketing patterns