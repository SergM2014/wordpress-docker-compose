<?php
/**
 * The template for displaying 404 page
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php esc_html_e('Oops that page cannot be found', 'herobiz'); ?></h1>
            </header>

            <div class="page-content">
                <p><?php esc_html_e('it looks like nothing was found at this location', 'herobiz'); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>
    </main>
</div>

<?php
get_footer();
