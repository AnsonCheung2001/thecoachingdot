<?php
    
    add_theme_support( 'title-tag' );
    add_theme_support('post_thumbnails');

    add_action( 'wp_ajax_my_ajax_action', 'ajax_action_stuff' ); // 針對已登入的使用者
    add_action( 'wp_ajax_nopriv_my_ajax_action', 'ajax_action_stuff' ); // 針對未登入的使用者

    function ajax_action_stuff(){
		
		
        $Aname = $_POST["Aname"];
        $Aemail = $_POST["Aemail"];
        $Acontent = $_POST["Acontent"];

        if ($Aemail){
            $args = array(
                'post_type' => 'contact',
                'post_title' => $Aname,
                'post_content' => $Acontent,
                'post_status' => 'publish'
            );
            
            $post_id = wp_insert_post($args);
            update_post_meta( $post_id, 'email', $Aemail );
        }
		
        echo $post_id;
        die();
    }
    
?>