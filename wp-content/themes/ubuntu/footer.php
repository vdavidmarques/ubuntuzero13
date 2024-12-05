</main>
<footer id="footer" role="contentinfo">
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
    <div class="container scroll-top-icon">
        <img src="<?php echo get_template_directory_uri(); ?>/dist/icons/top.svg" alt="Moonlight" class="icon" id="scrollToTopBtn">
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>