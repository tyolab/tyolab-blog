<div class="grid_6 alpha">
    <div class="footer_columns first">
        <?php if (is_active_sidebar('first-footer-widget-area')) : ?>
            <?php dynamic_sidebar('first-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('Footer Widgets', 'onepage'); ?></h4>
            <p><?php _e('Footer is widgetized. To setup the footer, drag the required Widgets in Appearance -> Widgets Tab in the First, Second, Third and Fourth Footer Widget Areas.', 'onepage'); ?></p>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6">
    <div class="footer_columns second">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
        <?php else : ?> 
            <h4><?php _e('Latest Posts', 'onepage'); ?></h4>
            <ul>
                <li><a href="#"><?php _e('Entertainment', 'onepage'); ?></a></li>
                <li><a href="#"><?php _e('Following problems', 'onepage'); ?></a></li>
                <li><a href="#"><?php _e('FAQ', 'onepage'); ?></a></li>
                <li><a href="#"><?php _e('Music And Sports', 'onepage'); ?></a></li>
            </ul>
        <?php endif; ?> 
    </div>
</div>
<div class="grid_6">
    <div class="footer_columns third">
        <?php if (is_active_sidebar('third-footer-widget-area')) : ?>
            <?php dynamic_sidebar('third-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('Search Anything', 'onepage'); ?></h4>
            <?php _e('Address: Magnet Brains 10 No. Arera Colony, Bhopal India<br/>
            Contact No : +91-9926465653<br/>     
            Email : support@inkthemes.com', 'onepage'); ?>
        <?php endif; ?>
    </div>
</div>
<div class="grid_6 omega">
    <div class="footer_columns last">
        <?php if (is_active_sidebar('fourth-footer-widget-area')) : ?>
            <?php dynamic_sidebar('fourth-footer-widget-area'); ?>
        <?php else : ?>
            <h4><?php _e('Use Of Widgets', 'onepage'); ?></h4>
            <p><?php _e('You can easily drag and drop the widgets here to display under the footer. You just need to go to your dashboard and there you can choose the appearance option and then widgets.', 'onepage'); ?></p>
        <?php endif; ?>
    </div>
</div>
<!-- ***********************Footer Page Ends************************* -->

