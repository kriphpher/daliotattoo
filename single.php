<?php get_header(); ?>
<?php if(have_posts()){while(have_posts()){the_post();get_template_parts('/wp-content/themes/daliotattoo/template-parts/blog.php', 'article');get_template_parts('/wp-content/themes/daliotattoo/template-parts/emot.php', 'article');get_template_parts('/wp-content/themes/daliotattoo/template-parts/jobs.php', 'article');}} ?>
<?php get_footer(); ?>