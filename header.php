<!DOCTYPE html>
<html>
<head>
    <title>IIP</title>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />
</head>
<body> 

    <div>
        <?php $logoImg = get_header_image(); ?>
        <a href="<?php echo site_url() ?>">
            <img src="<?php echo $logoImg ?>" />
        </a>
    </div>
    <div>
        <?php wp_nav_menu(
            array(
            'theme_location'=>'primary-menu',
            'menu_class'=>'nav'
            ))?>
    </div>

