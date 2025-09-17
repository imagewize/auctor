<?php
/**
 * Title: Featured Post Static Content
 * Slug: auctor/featured-post-static
 * Description: Static featured post content with publishing industry focus
 * Categories: auctor/posts
 * Keywords: post, featured, static, content, publishing
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"backgroundColor":"tertiary","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-tertiary-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|large","left":"var:preset|spacing|large"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:image {"width":"388px","height":"525px","scale":"cover","sizeSlug":"featured-vertical","linkDestination":"none","style":{"border":{"radius":"5px"}}} -->
            <figure class="wp-block-image size-featured-vertical is-resized has-custom-border"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/publishing-on-the-wall.webp" alt="Featured article about digital publishing evolution" style="border-radius:5px;object-fit:cover;width:388px;height:525px"/></figure>
            <!-- /wp:image -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--small)">
                <!-- wp:heading {"level":2,"className":"is-style-post-title-no-underline","fontSize":"x-large","fontFamily":"bodoni"} -->
                <h2 class="wp-block-heading is-style-post-title-no-underline has-bodoni-font-family has-x-large-font-size">The Evolution of Editorial Design in the Digital Age</h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"60%","style":{"spacing":{"blockGap":"var:preset|spacing|small"}}} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:paragraph {"fontSize":"large","fontFamily":"open-sans"} -->
            <p class="has-open-sans-font-family has-large-font-size">Modern publishing has transformed with digital platforms and content management systems. Publishers now have unprecedented control over content presentation and reader experience.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
            <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)">
                <!-- wp:button {"className":"is-style-button-brand"} -->
                <div class="wp-block-button is-style-button-brand"><a class="wp-block-button__link wp-element-button">Read Full Article</a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->