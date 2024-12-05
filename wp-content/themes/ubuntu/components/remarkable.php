<?php 
    $slug = 'pagina-inicial';
    $id = get_page_id_by_slug($slug);
?>
<section class="remarkable">
    <div class="container">
        <div class="remarkable--header">
            <h3 class="title">
                <?php echo get_field('remarkable-moments-title', 7); ?>
            </h3>
            <p class="desc">
                <?php echo get_field('remarkable-moments-content', 7); ?>
            </p>
        </div>
        <?php

        $photos = get_field('galerry', 7);
        foreach ($photos as $photo):
        ?>
            <img src="<?php echo $photo['photo']['url']; ?>" alt="">
        <?php endforeach; ?>
    </div>
</section>