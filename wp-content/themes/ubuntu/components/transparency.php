<section class="transparency">
    <div class="transparency--header">
        <h3 class="title"><?php echo get_field('transparency-title', $id); ?></h3>
        <p class="desc"><?php echo esc_html(get_field('transparency-content', $id)); ?></p>
    </div>
    <div class="transparency--contacts">
        <?php
        $args = array(
            'name' => 'informacoes-gerais',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post();

                $nickname = get_field('instagram-nickname');
                $instagram = get_field('instagram');
                $nicknameLinkedin = get_field('linkedin-nickname');
                $linkedin = get_field('linkedin');
                $cnpj = get_field('cnpj');
                $email = get_field('e-mail');
        ?>
                <div class="social-network">
                    <a target="_blank" href="<?php echo esc_url($instagram); ?>" class="icon instagram">
                        <?php echo esc_html($nickname); ?>
                    </a>
                    <a target="_blank" href="<?php echo esc_url($linkedin); ?>" class="icon linkedin">
                        <?php echo esc_html($nicknameLinkedin); ?>
                    </a>
                </div>
                <div class="payments">
                    <div class="cnpj">
                        <h3 class="tag">CNPJ</h3>
                        <p class="icon"><?php echo esc_html($cnpj); ?></p>
                    </div>
                    <div class="email">
                        <h3 class="tag">DOAÇÕES VIA PIX</h3>
                        <p class="icon"><?php echo esc_html($email); ?></p>
                    </div>
                </div>
        <?php
            endwhile;
            wp_reset_postdata(); // Restaura os dados globais
        else :
            echo '<p>Informações gerais não encontradas.</p>';
        endif;
        ?>
    </div>
</section>