</main>
<footer id="footer" role="contentinfo">
    <div class="container">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        ?>
        <div class="footer--nav">
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'custom_header_menu',
                    'menu'           => 'Menu do Header',
                    'menu_id'        => 'custom-header-menu',
                    'menu_class'     => 'main-menu',
                    'fallback_cb'    => '__return_false',
                ));
                ?>
            </nav>
        </div>

    </div>
</footer>
</div>
<div class="copyright">
    &copy; <?php echo esc_html(date_i18n(__('Y', 'ubuntuzero13'))); ?> <?php echo esc_html(get_bloginfo('name')); ?> - By <a href="https://baixada-web-studio.great-site.net/" target="_blank">Baixada Web Studio</a>
</div>
<div class="container scroll-top-icon">
    <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/top.svg" alt="Moonlight" class="icon" id="scrollToTopBtn">
</div>
</div>
<?php wp_footer(); ?>

</body>

</html>