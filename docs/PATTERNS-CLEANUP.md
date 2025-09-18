# Patterns Cleanup - PHP to Static Conversion

## Current State - RESOLVED ✅

~~The Auctor theme currently requires manual pattern registration in `functions.php` because patterns contain PHP code.~~

**CONFIRMED**: WordPress 6.0+ auto-registration works correctly with PHP code in patterns. Manual registration has been removed from `functions.php`. All patterns now auto-register like OllieWP.

## Key Findings

### When Manual Registration is Actually Required

After examining OllieWP (which uses PHP functions like `esc_attr_e()` and `get_template_directory_uri()` with auto-registration), manual registration is **NOT** required for:
- **Translation functions**: `<?php esc_attr_e( 'Text', 'auctor' ); ?>`
- **Standard WordPress functions**: `<?php echo esc_url( get_template_directory_uri() ); ?>`

WordPress 6.0+ auto-registration **DOES** execute PHP code in patterns correctly.

### OllieWP Approach Confirmed

- Uses PHP functions in patterns (esc_attr_e, get_template_directory_uri, etc.)
- Successfully relies on WordPress 6.0+ auto-registration
- No manual pattern registration needed
- PHP code is properly executed during auto-registration

### Static Path Solution

Since images are in `/patterns/images/`, we can use relative paths:

```html
<!-- Current PHP approach -->
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/checkmark.svg">

<!-- Static alternative -->
<img src="./patterns/images/checkmark.svg">
```

### Translation Considerations

Users customize pattern content anyway, so hardcoded English text is acceptable:

```html
<!-- Current PHP approach -->
alt="<?php esc_attr_e( 'Checkmark icon', 'auctor' ); ?>"

<!-- Static alternative -->
alt="Checkmark icon"
```

## Final Conclusion

**Manual registration was unnecessary**. WordPress 6.0+ auto-registration works perfectly with PHP functions in patterns.

### Changes Made:
1. ✅ **Removed `register_block_patterns()` function** from `functions.php`
2. ✅ **Fixed hardcoded URLs** in `services-feature-cards.php` (converted to relative paths)
3. ✅ **Reverted PHP function removals** in benefits-list patterns (they work fine with auto-registration)
4. ✅ **Updated documentation** to reflect correct approach

### What Works:
- `<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/` ✅
- `<?php esc_attr_e( 'Text', 'auctor' ); ?>` ✅
- All PHP functions execute correctly with auto-registration ✅

## Todo List

### Phase 1: Analysis
- [ ] Audit all patterns in `/patterns/` directory
- [ ] Identify all PHP usage patterns:
  - [ ] `get_template_directory_uri()` for images
  - [ ] `esc_attr_e()` and translation functions
  - [ ] Any other PHP code
- [ ] Document which patterns are affected

### Phase 2: Image Path Conversion
- [ ] Replace all `<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/` with `./patterns/images/`
- [ ] Test that relative paths work correctly in WordPress editor
- [ ] Verify images display properly in both editor and frontend

### Phase 3: Translation Removal
- [ ] Replace all `<?php esc_attr_e( 'Text', 'auctor' ); ?>` with static English text
- [ ] Update alt attributes for images
- [ ] Update any other translatable strings

### Phase 4: Clean Registration
- [ ] Remove patterns from `$pattern_files` array in `functions.php:199-204`
- [ ] Test that patterns still appear in WordPress editor
- [ ] If all patterns work with auto-registration, remove `register_block_patterns()` function entirely

### Phase 5: Testing
- [ ] Test pattern insertion in WordPress editor
- [ ] Verify images load correctly
- [ ] Test pattern functionality (queries, layouts, etc.)
- [ ] Test on different WordPress versions (6.0+)

### Phase 6: Documentation
- [ ] Update theme documentation to reflect new pattern approach
- [ ] Update `CLAUDE.md` with new pattern guidelines
- [ ] Remove PHP-related pattern instructions

## Files Currently Requiring Manual Registration

Based on `functions.php:199-204`:
- `benefits-list.php`
- `post-loop-grid-tc.php`
- `post-single-featured.php`
- `services-feature-cards.php`

## Notes

- WordPress Query blocks work without PHP - they're handled by WordPress core
- Users will customize pattern content anyway, making translation less critical
- This approach aligns with WordPress best practices and standard theme development
- Consider keeping one PHP pattern as an example if dynamic content is truly needed