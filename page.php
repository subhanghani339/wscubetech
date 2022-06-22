<?php
get_header(); 
?>

<h2><?php the_title() ?></h2>
<?php the_post_thumbnail('medium'); ?>

<div class="about-content">
    <?php the_content() ?>
    <?php $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
    // print_r($imagePath) ?>
    <img src="<?php echo $imagePath[0] ?>" />
</div>