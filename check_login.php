
<?php
include('wordpress/wp-includes/wp-db.php');
include('./wordpress/wp-includes/pluggable.php');
include('./wordpress/wp-includes/class-phpass.php');
require('./wordpress/wp-blog-header.php');


global $wpdb;
//Get posted variables, name and password from Index.php
$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 
$lastPage=$_POST['lastpage']; 

//Query the database checking for the user name
$results = $wpdb->get_results( 'SELECT * FROM wp_users WHERE user_login="'.$myusername.'"');

//Get user id
$userID = $results[0]->ID;

//Get user type
$user_info = get_userdata($userID);
$userType = implode(', ', $user_info->roles);

//Check if user name and password actually matches
$password_hashed = $results[0]->user_pass;
$wp_hasher = new PasswordHash(8, TRUE);

if($wp_hasher->CheckPassword($mypassword, $password_hashed)) {
		session_start();   
		$_SESSION['username'] = $myusername;
		$_SESSION['id'] = $userID;
		$_SESSION['userType'] = $userType;
		$_SESSION['log_in'] = true;
		header("location:$lastPage"); //Return to the mother and tell her you are alive.
} else {
    echo "No, Wrong Password";
}
?>