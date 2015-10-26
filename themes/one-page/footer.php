<!-- ***********************Footer Page Starts************************* -->
<div class="footer">
    <div class="container_24">
        <div class="grid_24">
            <?php
            /* A sidebar in the footer? Yep. You can can customize
             * your footer with four columns of widgets.
             */
            get_sidebar('footer');
            ?>
        </div>
    </div>
</div>
<!-- ***********************Footer Page Ends************************* -->
<!-- ***********************Copyright starts************************* -->
<div class="copyright_wrapper">
    <div class="container_24">
        <div class="grid_24">
            <div class="grid_24">
                <div class="copyright_text">
                    <?php $site_url='http://www.inkthemes.com/';?>
                    <p><a href="<?php echo esc_url($site_url); ?>" title="OnePage"><?php _e('One page','onepage'); ?></a><?php _e(' Theme Powered By ','onepage'); ?><a href="http://www.wordpress.org" title="WordPress"><?php _e('WordPress','onepage'); ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ***********************Copyright Ends************************* -->
<?php wp_footer(); ?>
</body>
</html>