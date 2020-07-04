<?php 
    function menu(){
        register_nav_menus(array(
            'primary'=> __('Primary menu'),
            'footer'=> __('Footer menu')
        ));
    }
    add_action('after_setup_theme','menu');
    function idparent(){
        global $post;
        $id = $post->ID;
        if($post->post_parent){
            $ancestor = get_post_ancestors($id);
            return $ancestor[0];//incase there are many level just show first level
        }
        return $id;
    }
    function init_widget($id){
        register_sidebar(array(
            'name'=>'Sidebar',
            'id'=>'sidebar',
            'before_widget'=>'<div class = "showcase">',
            'after_widget'=>'</div>',
            'before_title'=>'<h3 style="color:red">',
            'after_title'=>'</h3>',
        ));
        register_sidebar(array(
            'name'=>'showCase',
            'id'=>'showcase',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red">',
            'after_title'=>'</h3>',
        ));
         register_sidebar(array(
            'name'=>'box1',
            'id'=>'box1',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red">',
            'after_title'=>'</h3>',
        ));
         register_sidebar(array(
            'name'=>'box2',
            'id'=>'box2',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red">',
            'after_title'=>'</h3>',
        ));
        register_sidebar(array(
            'name'=>'box3',
            'id'=>'box3',
            'before_widget'=>'',
            'after_widget'=>'',
            'before_title'=>'<h3 style="color:red">',
            'after_title'=>'</h3>',
        ));
}
add_action('widgets_init','init_widget');
?>