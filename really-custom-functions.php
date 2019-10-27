<?php
/**
 * Plugin Name: Really? Functions
 * Plugin URI: 
 * Description: Custom functions for the Really? project.
 * Author: Stephanie David
 * Author URI: 
 * Version: 1.0
 */
 
// Put your code snippets below this line.

/**
 * This function will connect wp_mail to the Send in Blue authenticated
 * SMTP server. This improves reliability of wp_mail, and avoids many potential problems.
 *
 * For instructions on the use of this script, see:
 * https://www.butlerblog.com/2013/12/12/easy-smtp-email-wordpress-wp_mail/
 * 
 * Values are constants set in wp-config.php
 */
 
add_action( 'phpmailer_init', 'send_smtp_email' );
function send_smtp_email( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->Host       = SMTP_HOST;
	$phpmailer->SMTPAuth   = SMTP_AUTH;
	$phpmailer->Port       = SMTP_PORT;
	$phpmailer->Username   = SMTP_USER;
	$phpmailer->Password   = SMTP_PASS;
	$phpmailer->SMTPSecure = SMTP_SECURE;
	$phpmailer->From       = SMTP_FROM;
	$phpmailer->FromName   = SMTP_NAME;
}