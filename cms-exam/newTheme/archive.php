
<?php get_header();?>
<div class = "container">
    <div class="row">
        <div class="post">
        <?php if(have_posts()) : ?>
                <?php while(have_posts()): ?>
                <!-- array in post (it appear the last post) -->
                <?php the_post();?>
                    <h2><?php the_title();?></h2>
                <?php the_content();?>  
            <?php endwhile; ?>
            <?php else:?>
        <?php echo "the post no found, so please post your information!";
        endif;
        ?>
        </div>
    </div>
 </div>
  
  