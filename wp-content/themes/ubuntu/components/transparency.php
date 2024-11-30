<section class="transparency">
    <?php 
        $title = get_field('transparency-title', $id);
        $content = get_field('transparency-content', $id);

        echo $title;
        echo $content;
    ?>
</section>