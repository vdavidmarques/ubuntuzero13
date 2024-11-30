<secton class="supporter">
    <?php 
        $title = get_field('supporter-title', $id);
        $content = get_field('supporter-content', $id);
        echo $title;
        echo $content;
        $supports = get_field('supporter-lists-ways', $id);

        foreach ($supports as $support):
            echo $support['item'];
        endforeach;
        
    ?>
</secton>