
<?php get_header();?>
<div class = "container">
    <div class="row">
        <div class="post">
        <?php if(have_posts()) : ?>
                <?php while(have_posts()): ?>
                <!-- array in post (it appear the last post) -->
                <?php the_post();?>
                <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <?php 
                $caters = get_the_category();
                $cate = "";
                if($caters){
                    foreach($caters as $cater){
                        $cate = '<a href="'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                    }
                }
                echo $cate;
        ?>

                <?php the_content();?>  
            <?php endwhile; ?>
            <?php else:?>
        <?php echo "the post no found, so please post your information!";
        endif;
        ?>
        </div>
        <div class="side" >
            <?php if(is_active_sidebar('sidebar')):;?>
                    <?php dynamic_sidebar('sidebar'); ?>
                    <?php else : "Cannot add widget!!";?>
            <?php endif ; ?>
        </div>
    </div>
 </div>
  
  