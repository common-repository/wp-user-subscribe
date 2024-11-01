<?php 

/*
Plugin Name: WP User Subscribe
Plugin uri: https://wpusersubscribe.org
Author: Mirza Alamin
Author uri: https://mirzaalamin.ga
version: 1.0
Description: WP User Subscribe is a very easy to use, Just you have to install and activate it. No need to confugure anything.
tags: wp user subscribe, subscribe, user, follower, userlist, visitor list
*/

//required files including for dbDelta

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

add_action('wp_footer', 'wp_user_subscribe_function');

	function wp_user_subscribe_function(){ ?>

		<div id="main-area">
			<div class="title">
				<span class="heading">Subscribe Here</span>
				<a href=""><span class="cross"><i class="fas fa-times"></i></span></a>
			</div>
			<form action="" method="POST" class="subform">
				<input type="email" class="email-address" placeholder="Enter your Email" name="mail" required>
				<br>
				<input type="submit" class="subscribe" value="Subscribe" name="subscribe">
				<div><?php if($error){
				echo $error;
			} ?></div>
			</form>
			
		</div>

	<?php }

	global $wpdb;
	if(isset($_POST['subscribe'])){

		$sanitizedemail = sanitize_email( $_POST['mail'] );

		$tableprefix = $wpdb->prefix . "subscribe";

		dbDelta("CREATE TABLE $tableprefix(id INT AUTO_INCREMENT, email varchar(255), UNIQUE KEY id (id))");

		if(filter_var($sanitizedemail, FILTER_VALIDATE_EMAIL)){
			$validemail = $sanitizedemail;
		}

		if($validemail){

		$already = $wpdb->get_var("SELECT * FROM $tableprefix WHERE email = '$validemail'");

			if(count($already) >= 1){
				$error = "Email Already Exists";
			}else{

				$success = "Subcribed Successfully";

				$wpdb->insert($tableprefix, array(
					'email'		=> $validemail
				));
			}
		
		}
	}



	add_action('wp_enqueue_scripts', 'wp_user_subscribe_styles');

	function wp_user_subscribe_styles(){
		wp_enqueue_style('wp_user_subscribe_style', PLUGINS_URL('css/custom.css', __FILE__));

		wp_enqueue_style('wp-user_subscribe-font-awesome', PLUGINS_URL('
			fontawesome/css/all.css', __FILE__));
	}

	add_action('wp_enqueue_scripts', 'wp_user_subscribe_scripts');

	function wp_user_subscribe_scripts(){
		wp_enqueue_script('wp_user_subscribe_script', PLUGINS_URL('scripts/custom.js', __FILE__), array('jquery'), '', false);
	}
?>