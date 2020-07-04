<?php get_header();?>
    <div class="container">
        <div class="showCase">
        <?php get_header() ?>
            <h1>Programming language</h1>
            <p>Here are the most common languages and how they are used: HTML. 
            HTML makes up the layout and structure for your website.
            CSS. CSS is the language developers can use to style a website.
            Java. Java is the most popular web programming language.</p>
            <?php if(is_active_sidebar('showcase')):?>
                <?php dynamic_sidebar('showcase');?>
            <?php endif?>
            <a href="the_permalink()" id = "link"><?php get_the_title(28)?>Our team</a>
         </div>

            <div class="content_page">
            <?php if(have_posts()):?>
                    <?php while(have_posts()):?>
                        <?php the_post();?>
                        <?php if($post->post_parent > 0):?>
                        <?php
                            $args = array(
                                'title_li' =>'',
                                'child_of' =>idparent(),
                             );
                            wp_list_pages($args);
                        ?>
                    <?php endif?>
                        
                    <?php endwhile?>
                <?php endif?>
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
                <?php the_content()?> 
        </div>
        <div class="bigsub">
           <div class="box1">
                 <?php if(is_active_sidebar('box1')):?>
                    <?php dynamic_sidebar('box1');?>
                <?php endif?>
                <h3>About use</h3>
                    
           </div>     
                     
           <div class="box2">
                 <?php if(is_active_sidebar('box2')):?>
                    <?php dynamic_sidebar('box2');?>
                <?php endif?>
                <h3>Contact</h3>
                <a href="the_permalink()" id = "link"><?php get_the_title(24)?>Contact</a>
           </div>                  
           <div class="box3">
                 <?php if(is_active_sidebar('box3')):?>
                    <?php dynamic_sidebar('box3');?>
                <?php endif?>
                <h3>Information</h3>
           </div>                  
        </div>
        </div>
       