<aside id="sidebar">
<button id="side-button">Side Bar</button>
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<div id="primary" class="widget-area">
    <ul class="xoxo">
        <?php dynamic_sidebar( 'primary-widget-area' ); ?>
    </ul>
</div>
<?php endif; ?>
</aside>