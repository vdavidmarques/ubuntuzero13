<section class="our-mission">
    <?php 
        $title = get_field('our-mission-title', $id);
        $content = get_field('our-mission-content', $id);
        
        $group = get_field('squares-our-mission', $id);
        $photo = $group['photo']['url'];
        $content = $group['content'];
        
    ?>
    <p><?php echo $title; ?></p>
    <p><?php echo $content; ?></p>

    <img src="<?php echo $photo; ?>" alt="">
    <p><?php echo $content; ?></p></p>
</section>