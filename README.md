# Add-HTML-JS-CSS-to-a-Wordpress-Page-Post
The way to add HTML/JS/CSS to a Wordpress Page/Post, no need to change Wordpress theme

1. Change x.html to page-template-x.php and then add the php header of the file

2. If your page contains references to CSS, JS, images, and other media, such as sample.css, sample.js, and sample.png, you can change the reference address by using get_theme_file_uri(), see my code.

3. copy all files (HTML/JS/CSS/PNG...) into the theme directory and Create the page alias xx in the WordPress and select the page template as the xx page template created in the first step, then publish, and done.
