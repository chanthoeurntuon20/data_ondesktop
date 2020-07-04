<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url')?>">

</head>
<body>
    <div class="header">
        <div class="row">
            <div class="name">
                <h1><?php  bloginfo('name')?></h1>
            </div>
            <div class="menu">
                 <h2><?php wp_nav_menu();?></h2> 
                 <div class="search">
                    <?php get_search_form(); ?>
                 </div>    
            </div>
        </div>
    </div>
