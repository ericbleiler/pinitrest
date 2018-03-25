<?php
require('../model/database.php');
require('../model/pin_db.php');

if (isset($_POST['action'])) {

	$action = $_POST['action'];

} else if (isset($_GET['action'])) {

	$action = $_GET['action'];
} else {
	$action = 'show_add_form';
}

if ($action == 'list_pins') {
	if (isset($_GET['pin_id'])) {
		$pin_id = intval($_GET['pin_id']);
	} else {
		$pin_id = 1;
	}

	$pins = get_pins();
	$pin_name = get_pin_name($pin_id);
	$pin = get_pin_name($pin_id);

	include('pin_list.php');

} else if ($action == 'delete_pin') {
	$pin_id = $_POST['pin_id'];
	delete_pin($pin_id);
	header("Location: .?pin_id=$pin_id");

} else if ($action == 'show_add_form') {

	$pins = get_pins();
	include('pin_add.php');

} else if ($action == 'add_pin') {
 $filename = $_FILES["filename"]["name"];
 $tmpFilename = $_FILES["filename"]["tmp_name"];
 $path = "../images/" . $filename;

 if(is_uploaded_file($tmpFilename)){ // check if file is uploaded
  if(move_uploaded_file($tmpFilename, $path)){ // now move the uploaded file to path (directory)
   echo "File uploaded!";
  }
 }
	
	$pinName = $_POST['pinName'];
	$pinDesc = $_POST['pinDesc'];
	add_pin($pinName, $pinDesc, $filename);

	include('../pin_catalog/pin_list.php');

 


} else if ($action == 'add_review') {
	
	$user = $_POST['user'];
	$comment = $_POST['comment'];
	$pin_id = $_POST['pin_id'];
	$rating = $_POST['rating'];

	add_pin($user, $comment, $pin_id, $rating);

	include('pin_list.php');

} 

?>


