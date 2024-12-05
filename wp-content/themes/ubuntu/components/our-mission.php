<section class="our-mission">
    <div class="container">
        <?php
        $title = get_field('our-mission-title', $id);
        $content = get_field('our-mission-content', $id);
    
        $group = get_field('squares-our-mission', $id);
        $photo = $group['photo']['url'];
        $groupContent = $group['content'];
    
        ?>
        <div class="our-mission--header">
            <div class="our-mission--header--title">
                <h2><?php echo $title; ?></h2>
            </div>
            <div class="our-mission--header--content">
                <p><?php echo $content; ?></p>
            </div>
        </div>
        <div class="our-mission--content">
            <div class="our-mission--content--logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="our-mission--content--image">
                <div class="bg-blue">&nbsp;</div>
                <div class="content">
                    <p><?php echo $groupContent; ?></p>
                </div>
                <img src="<?php echo $photo; ?>" alt="<?php echo $title; ?>" class="image">
            </div>
        </div>
    </div>
</section>