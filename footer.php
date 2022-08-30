<footer ontouchstart=""> 
    <div class="footer_wrapper"> 
        <h1>
            <a href="<?php echo home_url('/') ?>">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/pf_logo3.svg" alt="logo">
            </a>
        </h1> 
        <div class="footer_navList_wrapper"> 
            <?php wp_nav_menu( array( 'theme_location'=> 'footer-menu', ) ); ?> 
        </div>
    </div>
    <div class="page-top_wrapper"> 
        <a href="#" class="js-link-hover"> 
            <div class="page-top_container"> 
                <svg height="50" width="50"> 
                    <polyline points="5,40 25,10 45,40" style="fill:rgba(0,0,0,0);stroke:#333;stroke-width:4"></polyline> 
                </svg> 
            </div>
        </a>
    </div>
    <small>©copyright 2022 by Ito Takuma</small> 
</footer>

<?php wp_footer(); ?>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/userAgent.js"></script>
</body>
</html>