<?php
defined('_JEXEC') or die;
?>

<div class="slideshow">
    <div class="slide">
        <video autoplay muted loop class="background-video">
            <source src="<?php echo Uri::base(); ?>modules/mod_slideshow/media/video01.mp4" type="video/mp4">
        </video>
        <div class="text">
            <h1>Slide 1</h1>
            <p>Welcome to the first slide</p>
        </div>
    </div>
    <div class="slide">
        <video autoplay muted loop class="background-video">
            <source src="<?php echo Uri::base(); ?>modules/mod_slideshow/media/video02.mp4" type="video/mp4">
        </video>
        <div class="text">
            <h1>Slide 2</h1>
            <p>Experience the second slide</p>
        </div>
    </div>
    <div class="slide">
        <video autoplay muted loop class="background-video">
            <source src="<?php echo Uri::base(); ?>modules/mod_slideshow/media/video03.mp4" type="video/mp4">
        </video>
        <div class="text">
            <h1>Slide 3</h1>
            <p>Enjoy the final slide</p>
        </div>
    </div>
</div>
