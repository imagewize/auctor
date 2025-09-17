# Auctor Theme Quick Start Guide

## Block Theme Demo Content Strategy

### Current Analysis

Auctor currently contains 70+ block patterns with **Moiraine-branded content** that needs updating to reflect Auctor's publishing focus. The current patterns include generic placeholder text rather than publishing-industry specific content.

**Key Issues:**
- Hero patterns still reference "Moiraine" instead of "Auctor"
- Content focuses on generic business rather than publishing/editorial
- Blog post loops work but need real posts to showcase properly
- Templates load patterns that don't reflect publishing industry

### Block Theme Approach (WordPress.org Standards)

For block themes, **demo content is handled through patterns rather than XML imports**. This aligns with WordPress.org guidelines and modern block theme standards:

1. **Content lives in patterns** - Not in separate XML files
2. **Users customize existing patterns** - Rather than replacing dummy content
3. **Repository allows pattern content** - WordPress.org permits content within patterns
4. **Immediate visual impact** - Users see designed layouts instantly

### Current Pattern Content Status

**✅ Good Structure:**
- 70+ patterns across all categories
- Proper pattern organization (hero, posts, CTA, etc.)
- Block markup follows FSE standards
- Translation-ready strings

**❌ Needs Publishing Focus:**
- Hero content: "Welcome to Moiraine" → "Welcome to [Publishing Brand]"
- Generic business copy → Editorial/publishing industry copy
- Lorem ipsum → Publishing-relevant sample content
- Generic CTAs → Publishing-specific actions

### Recommended Quick Start Strategy

#### Phase 1: Blog Post Query Issue Resolution (Critical Priority)
**Address immediate template functionality:**

The current `templates/index.html` uses two post patterns:
- `auctor/post-loop-grid-tc` (inherit: true) - Will show posts when they exist
- `auctor/post-single-featured` (inherit: false, requires "featured" tag) - Will be empty on fresh install

**ISSUE:** Fresh theme activation shows empty post grids because:
1. No posts exist yet
2. Featured post pattern requires posts tagged "featured"
3. Query patterns with `inherit: false` need specific posts to display content

**SOLUTION OPTIONS:**

**Option A: Replace with Static Content Patterns (Recommended)**
- Replace `post-loop-grid-tc` with `card-blog-post` or `blog-post-columns` (static content)
- Replace `post-single-featured` with a hero pattern with publishing content
- Users see immediate professional demo, replace with real posts later

**Option B: Create Demo Post Generator**
- Add function to create sample posts on theme activation
- Include posts with "featured" tag for featured post pattern
- Requires activation hook (may not be WordPress.org compliant)

**Option C: Hybrid Approach**
- Keep one query pattern for users with existing posts
- Add static content patterns above/below for immediate visual impact
- Best of both worlds but longer index template

#### Phase 2: Update Pattern Content (High Priority)
**Focus on patterns that load by default:**

1. **Hero patterns** - Update to publishing industry messaging
   - Replace "Moiraine" references with publishing-focused copy
   - Update CTAs to reflect editorial use cases
   - Maintain professional editorial tone

2. **Blog post patterns** - Add publishing-relevant sample content
   - Article headlines about publishing industry
   - Publishing-focused excerpts and descriptions
   - Editorial categories and terminology

3. **About patterns** - Writer/publisher focused bios
   - Author profiles instead of generic business
   - Publishing industry achievements
   - Editorial experience and credentials

#### Phase 3: Template Integration
**Ensure templates showcase content properly:**

1. **Homepage template** (`templates/index.html`) - Currently uses query patterns
2. **Post loops** - Query patterns work but need posts to populate
3. **Single post template** - Showcase editorial layouts

#### Phase 4: Content Categories
**Publishing-focused pattern content should include:**

- **Industry categories**: Editorial, Publishing, Design, Digital Media
- **Article types**: Industry News, How-to Guides, Success Stories, Resources
- **Professional tone**: Authoritative but accessible writing style
- **Publishing terminology**: Editorial, manuscript, typography, layout, etc.

### Implementation Approach

#### WordPress.org Compliant Method
```
✅ Update pattern files directly with publishing content
✅ Include realistic sample text in patterns
✅ Focus on editorial/publishing industry language
✅ Maintain translation readiness
✅ Replace query patterns with static content patterns on index template
✅ No XML imports or activation hooks needed
```

#### Recommended Implementation (Option A)
**Replace index template patterns with static content:**

1. **Replace `post-loop-grid-tc`** with `blog-post-columns` or `card-blog-post`
   - Shows immediate professional content
   - Publishing-focused article previews
   - Users can add real posts later and switch to query patterns

2. **Replace `post-single-featured`** with `hero-call-to-action-buttons`
   - Publishing-focused hero content
   - "Start Publishing" / "Explore Themes" CTAs
   - Immediate visual impact for new installations

**Benefits:**
- ✅ Instant professional demo on theme activation
- ✅ No empty post loops or missing content
- ✅ WordPress.org compliant (no hooks/DB changes)
- ✅ Users can replace static patterns with query patterns later
- ✅ Showcases theme capabilities immediately

#### What Users Will See on Fresh WordPress Installation

**Default WordPress Content on Activation:**
- Homepage (`index.html`) - **CURRENT ISSUE**: Empty post loops
- Sample Page (`page.html`) - Works fine, shows page content
- "Hello World" post (`single.html`) - **ISSUE**: Related posts section empty
- WordPress default menu items

**Post-Implementation with Static Patterns:**
- **Homepage** - Professional publishing demo with static content patterns
- **Sample Page** - Clean page template (no changes needed)
- **Single Post** - "Hello World" post display works, but related posts section still empty
- **All Templates** - Header/footer work with static content

**Additional Considerations:**

**Single Post Template Issue:**
The `single.html` template has a "Related Posts" query at the bottom (lines 78-88) that also shows empty when only one post exists. **Recommended Solution:**
1. Replace related posts query with static content pattern (testimonial or CTA)
2. Alternative: Modify query to show "Recent Posts" instead of related posts
3. This ensures single post pages always show professional content

**Navigation & Menus:**
- Theme includes header/footer template parts
- Fresh installs need menu setup
- Consider adding sample menu structure to patterns

#### Multiple Professional Pages with Existing Page Patterns

**Excellent Solution: Pre-built Page Patterns Available**

The theme already includes complete page patterns that users can apply instantly:

**Available Full-Page Patterns:**
- `auctor/page-home` - Complete homepage with hero, features, testimonials, pricing
- `auctor/page-about` - Team members, company stats, job openings
- `auctor/page-contact` - Contact details, testimonials, social links
- `auctor/page-features` - Feature showcase and benefits
- `auctor/page-pricing` - Pricing tables and plans
- `auctor/page-blog` - Blog layout and post grids
- `auctor/page-download` - Product download and app features
- `auctor/page-profile` - Personal/author profile page

**Implementation Strategy for Multiple Pages:**

1. **Create Page Templates** - Users can create new pages and apply these patterns instantly
2. **Document Pattern Usage** - Provide clear instructions on applying page patterns
3. **Menu Structure** - Guide users to create navigation linking these pages
4. **Content Guidance** - Show how to customize pattern content for publishing industry

**Benefits of This Approach:**
- ✅ **Instant Professional Website** - 5-8 complete pages ready to use
- ✅ **No Code Required** - Users apply patterns via Site Editor
- ✅ **Publishing-Focused** - Patterns work well for editorial/publishing sites
- ✅ **Customizable** - Users can modify any pattern content
- ✅ **WordPress.org Compliant** - Pure pattern-based approach

**User Workflow:**
1. Activate Auctor theme
2. Create new pages: "About", "Contact", "Features", etc.
3. Apply corresponding page patterns
4. Customize content for their publishing brand
5. Set up navigation menu
6. Professional multi-page website complete!

#### Pattern Content Examples
**Hero Pattern Updates:**
- "Welcome to Moiraine" → "Welcome to Auctor"
- "Design faster and publish sooner" → "Publish with confidence and style"
- Generic CTAs → "Start Writing" / "Explore Layouts"

**Blog Content Examples:**
- "The Future of Digital Publishing: Trends That Will Shape 2025"
- "Mastering Editorial Design in WordPress Block Themes"
- "From Writer to Publisher: Building Your Platform"

### User Experience Flow

1. **Theme Installation** → User sees professional publishing patterns
2. **Pattern Insertion** → Ready-to-use editorial layouts with relevant content
3. **Content Replacement** → User replaces sample content with their own
4. **Customization** → User modifies patterns to match their brand

### Benefits of This Approach

- **WordPress.org compliant** - No XML imports or hooks required
- **Instant professional look** - Patterns include realistic content
- **Publishing-focused** - Content reflects target audience
- **Easy customization** - Users modify existing content rather than starting blank
- **SEO-friendly** - Sample content uses proper publishing keywords

### Revised Implementation Priority

#### Phase 1: Critical Template Fixes (Immediate)
1. **Fix index.html template** - Replace query patterns with static content patterns
2. **Fix single.html template** - Replace related posts with static pattern
3. **Test all templates** for empty content issues

#### Phase 2: Content Updates (High Priority)
1. **Update all page patterns** with publishing-focused content
2. **Replace "Moiraine" references** across all patterns
3. **Add realistic editorial content** to blog/article patterns

#### Phase 3: User Experience (Medium Priority)
1. **Create setup documentation** for applying page patterns
2. **Document menu creation** process
3. **Test full user workflow** from activation to complete site

#### Phase 4: Polish (Low Priority)
1. **Verify translation readiness** of updated content
2. **Add any missing page pattern variations**
3. **Final testing and refinement**

### Expected User Experience Post-Implementation

**Upon Theme Activation:**
- **Homepage**: Professional publishing demo (static patterns)
- **Available Patterns**: 8 complete page layouts ready to apply
- **User Action**: Create pages, apply patterns, customize content
- **Result**: Professional multi-page publishing website in 30 minutes

This approach transforms Auctor from a broken demo to a complete professional publishing platform that works immediately upon activation while following WordPress.org block theme best practices.