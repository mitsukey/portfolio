<div class="footer-widget_wrapper">
    <?php if( is_active_sidebar( 'footer-widget-area' ) ):?> 
        <div class="footer-widget_container"> 
            <h6>最新の投稿</h6> 
            <?php dynamic_sidebar( 'footer-widget-area' );?> 
        </div>
    <?php endif;?> 
    <?php if( is_active_sidebar( 'footer-widget-area-2' ) ):?> 
        <div class="footer-widget_container"> 
            <h6>アーカイブ</h6> 
            <?php dynamic_sidebar( 'footer-widget-area-2' );?> 
        </div>
    <?php endif;?> 
    <?php if( is_active_sidebar( 'footer-widget-area-3' ) ):?> 
        <div class="footer-widget_container"> 
            <h6>タグクラウド</h6> 
            <?php dynamic_sidebar( 'footer-widget-area-3' );?> 
        </div>
    <?php endif;?>
</div>