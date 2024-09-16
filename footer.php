<footer>
        <div class="container flex flex-col gap-32 md:flex-row md:gap-24">
            <div class="md:w-2/12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/obistroy-black.svg" alt="O'Spa" class="w-[128px] mb-16" />
                <div class="info text-[14px] mt-24 pt-16 border-t border-soft-white-400">
                    <p>28 Avenue de Pythagore, 33700 Mérignac</p>
                    <a href="tel:000000000">05 19 08 10 11</a>
                </div>
            </div>
            <div class="md:w-3/12">
                <span class="pretitle-2">À propos</span>
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'footer_first',
                    'container' => '',
                    'items_wrap' => '<ul>%3$s</ul>',
                ) );
                ?>
            </div>
            <div class="md:w-4/12">
                <span class="pretitle-2">Suivez-nous</span>
                <p>Recevez nos dernières actualités en vous inscrivant à la newsletter O'Bistroy.</p>
                <?php echo do_shortcode('[sibwp_form id=1]') ?>
                <div class="rs flex gap-8">
                <a href="https://www.instagram.com/o_bistroy/" target="_blank"><i class="bx bx-sm bxl-instagram"></i></a>
                <a href="https://www.facebook.com/profile.php?id=61559738912098" target="_blank"><i class="bx bx-sm bxl-facebook-square"></i></a>
                </div>
            </div>
        </div>
        <div class="legal-footer">
            <span><a href="/legal">Mentions légales</a></span>
            <span class="dash"></span>
            <span>Site internet réalisé par <a href="https://yperactive.com" target="_blank">Yperactive</a></span>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>
