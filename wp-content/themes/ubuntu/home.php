<?php 
    get_header(); 
    $slug = 'pagina-inicial';
    $id = get_page_id_by_slug($slug);

    include 'components/main-banner.php';
    include 'components/our-mission.php';
    include 'components/supporter.php';
    include 'components/transparency.php';
    include 'components/remarkable.php';
    get_footer();