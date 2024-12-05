<section class="main-banner">
    <div class="container">
        <?php
        if (function_exists('the_custom_logo')) {
            the_custom_logo();
        }
        $mainImg = get_field('main-photo', $id);
        $squares =  get_field('squares', $id);
        ?>
        <img src="<?php echo $mainImg['url']; ?>" alt="Ubuntu zero13" class="main-photo">
        
        <div class="main-banner--infos">
            <p><?php echo $squares['content']; ?></p>
            <div class="main-banner--infos--image">
                <div class="bg-blue">&nbsp;</div>
                <img src="<?php echo esc_url($squares['photo-info']['url']); ?>" alt="Ubuntu zero13" class="image">
            </div>
        </div>
        <div class="main-banner--supporter">
            <div class="bg-blue">&nbsp;</div>
            <div class="main-banner--supporter--content">
                <h3 class="tag">
                    <?php echo $squares['tag']; ?>
                </h3>
                <div class="title">
                    <?php echo $squares['content_2']; ?>
                </div>
                <a href="<?php echo $squares['link']['url']; ?>" class="button button--primary">
                    <?php echo $squares['link']['title']; ?>
                </a>
            </div>
            <img src="<?php echo esc_url($squares['photo_2']['url']); ?>" alt="Ubuntu zero13" class="main-banner--supporter--image">
        </div>
    </div>
</section>