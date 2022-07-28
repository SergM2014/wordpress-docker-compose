<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>

<section class="no-results not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing found', 'herobiz'); ?></h1>
    </header>

    <div class="page-content">
        <?php
        if(is_home() && current_user_can('publish_posts')):

            printf(
                    '<p>'.wp_kses(
                            /*translators: 1: link to WP admin new post page */
                            __('Ready to publish your first pst& <a href="%1$">Get started here</a>/', 'herobiz'),
                        array(
                                'a' => array(
                                        'href' => array(),
                                ),
                        )
                    ).'</p>',
                esc_url(admin_url('post-new.php'))
            );

        elseif (is_search()) :
        ?>

        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again'); ?></p>
        <?php get_search_form();

        else :
            ?>
            <p><?php esc_html_e('It seems we can find what you are looking for'); ?></p>
	        <?php
            get_search_form();

        endif;
        ?>
    </div>
</section>
