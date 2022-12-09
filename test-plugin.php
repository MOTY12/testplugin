<?php
/**
* Plugin Name: test-plugin
* Plugin URI: https://www.your-site.com/
* Description: Test.
* Version: 0.1
* Author: your-name
* Author URI: https://www.your-site.com/
**/


// function modify_read_more_link( $more_link_element, $more_link_text) {
//     var_dump($more_link_element);

//     return '<a class="more-link" href="' . get_permalink() . '">Click to Read!</a>';
// }
// add_filter( 'the_content_more_link', 'modify_read_more_link', 3, 2 );
// add_filter('the_content_more_link', 'modify_read_more_link');

// var_dump("hello world");

function register_user() {
    ob_start();

    include_once( plugin_dir_path( __FILE__ ) . 'user-registration.php' );

    if( !empty($_POST['submit'])){
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $error_message = "";
    $error_counter = 0;

    if( empty($userName)) {
        $error_message .= "Please enter your name";
        $error_counter++;
    }

    if( empty($email)) {
        $error_message .= "Please enter your email";
        $error_counter++;
    }

    if( empty($gender)) {
        $error_message .= "Please enter your gender";
        $error_counter++;
    }

    if( empty($password)) {
        $error_message .= "Please enter your password";
        $error_counter++;
    }

    if( empty($confirm_password)) {
        $error_message .= "Please enter your confirm password";
        $error_counter++;
    }

    if($password != $confirm_password){
        $error_message .= "Password does not match";
        $error_counter++;
    }   

    if($error_counter > 0) {
        echo $error_message;
    } else {
        $user_id = wp_create_user( $userName, $password, $email );
        if ( is_wp_error( $user_id ) ) {
            echo "User already exists";
        } else {
            echo "User created";
            echo $userName;
            echo $email;
            echo $gender;
            echo $password;
            echo $confirm_password;
        }
    }

}
    
        return ob_get_clean();
}


function register_shortcodes(){
    add_shortcode('view-text', 'register_user');
 }

add_action( 'init', 'register_shortcodes' );