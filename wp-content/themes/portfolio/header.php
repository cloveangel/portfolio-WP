<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Louise Zhou's CV - Web Front-End Development">
    <meta name="Keywords" content="Louise Zhou  web Front-End Web Development CV">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
    <nav>
      <a href="<?php echo site_url(); ?>" target="_self"><img src="<?php echo get_theme_file_uri('/images/logo.png'); ?>" id="logo" alt="logo"></a>
        <ol>
            <li <?php if (is_page('about')) echo 'class="current-menu-item"'; ?>><a href="<?php echo site_url('/about'); ?>">About</a></li>
            <li <?php if (get_post_type() == 'portfolio') echo 'class="current-menu-item"'; ?>><a href="<?php echo get_post_type_archive_link('portfolio')?>">Works</a></li>
            <li><a href="<?php echo get_theme_file_uri('/cv/CV-Lujiang-frontend-E.pdf'); ?>">CV</a></li>
        </ol>
    </nav>