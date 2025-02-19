<footer class="footer">
            <div class="container">
                <div class="footer__inner">
                    <div class="logo">
                        
                        <?php the_custom_logo() ?>
                    </div>
                    <p class="footer__text"><?php the_field("copyright") ?></p>
                    <div class="footer__icons">
                        <a href=<?php the_field("instagram-link") ?>><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Insta.svg" alt=""></a>
                        <a href=<?php the_field("youtube-link") ?>><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Youtube.svg" alt=""></a>
                        <a href=<?php the_field("vk-link") ?>><img src="<?php bloginfo('template_url'); ?>/assets/img/icons/Vk.svg" alt=""></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>