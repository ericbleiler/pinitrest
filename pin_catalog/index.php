<?php
require('../model/database.php');
require('../model/pin_db.php');
require('../model/board_db.php');


if (isset($_POST['action'])) {

	$action = $_POST['action'];

} else if (isset($_GET['action'])) {

	$action = $_GET['action'];
} else {
	$action = 'list_pins';
}


if ($action == 'list_pins') {
	if (isset($_GET['pin_id'])) {
		$pin_id = intval($_GET['pin_id']);
	} else {
		$pin_id = 1;
	}

	$pins = get_pins();
	//$likes = get_likes($_COOKIE["userid"]);

	include('pin_list.php');

}	


else if ($action == 'search') {

	$search = $_POST['search'];
	$pins = search($search);
	//$likes = get_likes($_COOKIE["userid"]);

	include('search.php');
}


else if ($action == 'view_pin') {

	$pins = get_pins();
	$pin_id = $_GET['pin_id'];

	$pin = get_pin_name($pin_id);
	$user = get_pin_username($pin_id);
	$desc = get_pin_desc($pin_id);
	$ratings = get_ratings_by_id($pin_id);
	$image = get_pin_image($pin_id);
	$relatedpins = get_related_pins();
	$boards = get_board_by_userid($_COOKIE["userid"]);

	$image_filename = '../images/' . $pin . '.png';

	include('pin_view.php');
}


else if ($action == 'view_board') {

	$board_id = $_GET['board_id'];

	$pins = get_pins_by_board_id($board_id);
	$board = get_board_name($board_id);
	$boards = get_board_by_userid($_COOKIE["userid"]);

	include('board_view.php');
}


else if ($action == 'add_pin') {
	
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
	$userID = intval($_POST['userID']);

	add_pin($pinName, $pinDesc, $tagID, $userID, $filename);
	$pins = get_pins();

	include('pin_list.php');
}




else if ($action == 'save_pin') {
	
 $pinName = $_POST['pinName'];
 $pinDesc = $_POST['pinDesc'];
 $image = $_POST['image'];
 $boardid = $_POST['boardID'];
 $tagID = $_POST['tagID'];

	$userID = intval($_POST['userID']);

	add_pin($pinName, $pinDesc, $tagID, $userID, $image);
	$boards = get_board_by_userid($_COOKIE["userid"]);

	$pins = get_pins();

	include('pin_list.php');
}

else if ($action == 'add_board') {
	
 $boardName = $_POST['boardName'];
 $boardDesc = $_POST['boardDesc'];

 $userid = intval($_POST['userID']);

	add_board($boardName, $boardDesc);

	$username = get_pin_name($pin_id);

	$pins = get_pin_by_userid($_COOKIE["userid"]);
	$boards = get_board_by_userid($_COOKIE["userid"]);
	include('user_profile.php');
}


else if ($action == 'get_user') {
	$UserID = $_POST['userID'];
	$username = get_pin_name($pin_id);

	$pins = get_pin_by_userid($_COOKIE["userid"]);
	$boards = SelectBoardListByUserID($_COOKIE["userid"]);
	
	include('user_profile.php');
}


else if ($action == 'review_add') {

	$pins = get_pins();
	$pin_id = $_GET['pin_id'];

	$pin = get_pin_name($pin_id);
	$user = get_pin_username($pin_id);
	$desc = get_pin_desc($pin_id);
	$ratings = get_ratings_by_id($pin_id);
	
	include('review_add.php');
}

else if ($action == 'add_rating') {
	$rating_id = $_POST['rating_id'];
	$rating_id = trim($rating_id);
	$rating_id = stripslashes($rating_id);
	$rating_id = htmlspecialchars($rating_id);
	
	$pin_id = $_POST['pin_id'];
	$username = $_POST['username'];
	
	$rating = $_POST['rating'];
	$rating = trim($rating);
	$rating = stripslashes($rating);
	$rating = htmlspecialchars($rating);
	
	add_rating($rating_id, $pin_id, $username, $rating);
	header("Location: .?pin_id=view_pin");

	include('pin_view.php');
}
else if ($action == 'add_user') {

	$username = $_POST['username'];
	
	$password = $_POST['password'];
	$email = $_POST['email'];


	add_user($first_name, $password, $email);

	$pins = get_pins();

	include('pin_list.php');
}
else if ($action == 'pin_view') {

	$pin_name = get_pin_name($pin_id);
	$pin = get_pin_by_id($pin_id);
	$pin_desc = get_pin_desc($pin_id);
	$image = get_pin_image($pin_id);

	include('pin_view.php');
}
else if ($action == 'add_review') {
	$rating_id = $_POST['rating_id'];
	$pin_id = $_POST['pin_id'];
	$user = $_POST['user'];
	$rating = $_POST['rating'];
	$rating = trim($rating);
	$rating = stripslashes($rating);
	$rating = htmlspecialchars($rating);
	$comment = $_POST['comment'];
	$comment = trim($comment);
	$comment = stripslashes($comment);
	$comment = htmlspecialchars($comment);

	add_review($user, $comment, $pin_id, $rating);
	header("Location: .?pin_id=view_pin");

}
else if ($action == 'delete_rating') {
	$rating_id = $_POST['ratingID'];

	delete_review($rating_id);	
	
	header("Location: .?pin_id=view_pin");
}
else if ($action == 'edit') {

	$pin_id = $_POST['pin_id'];
	$user = $_POST['user'];
	$rating = $_POST['rating'];
	$rating = trim($rating);
	$rating = stripslashes($rating);
	$rating = htmlspecialchars($rating);
	
	$comment = $_POST['comment'];
	$comment = trim($comment);
	$comment = stripslashes($comment);
	$comment = htmlspecialchars($comment);
	

    $rating_id = $_POST['rating_id'];
	
	include('review_edit.php');
	
}else if ($action == 'edit_review') {
	$rating_id = $_POST['rating_id'];
	$pin_id = $_POST['pin_id'];
	$user = $_POST['user'];
	$rating = $_POST['rating'];
	$rating = trim($rating);
	$rating = stripslashes($rating);
	$rating = htmlspecialchars($rating);
	
	$comment = $_POST['comment'];
	$comment = trim($comment);
	$comment = stripslashes($comment);
	$comment = htmlspecialchars($comment);

	update_review($rating_id, $user, $comment, $pin_id, $rating);
	include('review_edit.php');

}


?>