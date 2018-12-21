# Add-HTML-JS-CSS-to-a-Wordpress-Page-Post
The way to add HTML/JS/CSS to a Wordpress Page/Post, no need to change Wordpress theme

1. Change x.html to page-template-x.php and then add the header of the file:

<?php
/*
Template Name: xx
*/
?>

2. If your page contains references to CSS, JS, images, and other media, such as sample.css, sample.js, and sample.png, you can change the reference address to:

<link href="<?php echo get_theme_file_uri( 'sample.css' ); ?>" rel="stylesheet" type="text/css" />
<script src="<?php echo get_theme_file_uri( 'sample.js' ); ?>" type="text/javascript"></script>
<img src="<?php echo get_theme_file_uri( 'sample.jpg' ); ?>" />

3. copy all files (HTML/JS/CSS/PNG...) into the theme directory and Create the page alias xx in the WordPress and select the page template as the xx page template created in the first step, then publish, and done.
