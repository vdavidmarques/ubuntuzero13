<secton class="supporter">
    <div class="supporter--content">
        <?php
        $content = get_field('supporter-content', $id);
        if ($content):
        ?>
            <div class="supporter--content--title">
                <?php echo $content; ?>
            </div>
        <?php
        endif;
        $supports = get_field('supporter-lists-ways', $id);
        if ($supports):
        ?>
            <ul class="supporter--content--lists">
                <?php
                foreach ($supports as $support):
                ?>
                    <li class="item">
                        <?php echo $support['item']; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
        <div class="supporter--content--contact">
            <?php if (get_field('supporter-message', $id)): ?>
                <h4 class="tag-message"><?php echo get_field('supporter-message', $id); ?></h4>
            <?php endif; ?>
            <?php
            $link = get_field('supporter-link', $id);
            if ($link):
            ?>
                <a href="<?php echo $link['url']; ?>" class="button button--primary"><?php echo $link['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>
    <?php
    $image = get_field('supporter-main-image', $id);
    if ($image):
    ?>
        <div class="supporter--image">
            <img src="<?php echo $image['url']; ?>" alt="Seja uma apoiador - Ubuntu Zero13">
        </div>
    <?php endif; ?>
</secton>