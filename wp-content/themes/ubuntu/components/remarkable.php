<section class="remarkable">
    <?php 
        $title = get_field('remarkable-moments-title', $id);
        $content = get_field('remarkable-moments-content', $id);
        echo $title;
        echo $content;
        $photos = get_field('galerry', $id);
        foreach ( $photos as $photo):
    ?>
        <img src="<?php echo $photo['photo']['url']; ?>" alt="">
    <?php endforeach; ?>
</section
    ?>
</section>