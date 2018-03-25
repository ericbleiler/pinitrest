<?php
require('../model/database.php');
require('../model/user.php');
require('../model/pin_db.php');
require('../model/board_db.php');

if (isset($_POST['action'])) {

	$action = $_POST['action'];

} else if (isset($_GET['action'])) {

	$action = $_GET['action'];
} else {
	$action = 'show_user_form';
}

if ($action == 'delete_user') {


} else if ($action == 'show_user_form') {

	include('login.php');

} else if ($action == 'add_pin') {
	
 $pinName = $_POST['pinName'];
 $pinDesc = $_POST['pinDesc'];
 $tagID = $_POST['tagID'];

 $filename = $_FILES["filename"]["name"];
 $tmpFilename = $_FILES["filename"]["tmp_name"];
 $path = "../images/" . $filename;

 if(is_uploaded_file($tmpFilename)){ // check if file is uploaded
  if(move_uploaded_file($tmpFilename, $path)){ // now move the uploaded file to path (directory)
   echo "File uploaded!";
  }
 }
	$userid = intval($_POST['userID']);

	add_pin($pinName, $pinDesc, $tagID, $userid, $filename);

	$pins = get_pins();

	header("Location: .?../pin_catalog/pin_list.php");
}

else if ($action == 'save_pin') {
	
 $pinName = $_POST['pinName'];
 $pinDesc = $_POST['pinDesc'];
 $image = $_POST['image'];
 $boardid = $_POST['boardID'];
 $tagID = $_POST['tagID'];

	$userid = intval($_POST['userID']);

	add_pin($pinName, $pinDesc, $tagID, $userID, $image);

	$pins = get_pins();

	include('pin_list.php');
}


else if ($action == 'add_board') {
	
 $boardName = $_POST['boardName'];
 $boardDesc = $_POST['boardDesc'];

 $userid = intval($_POST['userID']);

	add_board($boardName, $boardDesc, $userid);

	include('pin_list.php');
}



else if ($action == 'add_user') {
//controller for file upload code snippet
 $filename = $_FILES["filename"]["name"];
 $tmpFilename = $_FILES["filename"]["tmp_name"];
 $path = "../images/" . $filename;
    echo "<script>console.log( 'Debug Objects: " . $filename . "' );</script>";

  if(move_uploaded_file($tmpFilename, $path)){ // now move the uploaded file to path (directory)
   echo "File uploaded!";
  }
//end of the code snippet
 
	$bio = $_POST['bio'];
	$username = $_POST['username'];
	$password = $_POST['password'];

	add_user($username, $password, $bio, $filename);

	$pins = get_pins();

	header('Location:https://cisy8503groupproject-ericbleiler.c9users.io/pin_catalog/');


} else if ($action == 'sign_in') {
	$username = $_POST['username'];
	$username = trim($username);
	$username = stripslashes($username);
	$username = htmlspecialchars($username);
	
	$password = $_POST['password'];
	$password = trim($password);
	$password = stripslashes($password);
	$password = htmlspecialchars($password);
	
	$userid = get_userid($username);

	if(get_login($username, $password) == true){
		if (!isset($_COOKIE['username'])) {
			setcookie('username', $_POST['username'], time() + 360000, '/'); 
			setcookie('userid', $userid, time() + 360000, '/'); 
	} 

	$pins = get_pins();
	header('Location:https://cisy8503groupproject-ericbleiler.c9users.io/pin_catalog/');
}

}else if ($action == 'sign_out') {
	unset($_COOKIE['username']);
	setcookie('username', '', time() - 3600, '/');
	include('login.php');

}

?>