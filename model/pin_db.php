<?php
	function add_pin($pinName, $pinDesc, $tagID, $userID, $filename) {
		global $db;
		$query = "INSERT INTO Pins(PinName, PinDesc, TagID, UserID, Image)
					VALUES ('$pinName', '$pinDesc', '$tagID', '$userID', '$filename')";
		$db->exec($query);
	}
	function get_pin_by_userid($user_id) {
		global $db;
		$query = "SELECT * FROM Pins
			WHERE userID = '$user_id'
			ORDER BY userID";
		$pins = $db->query($query);
		return $pins;
	}
	function search($search) {
		global $db;
		$query = "SELECT * FROM Pins
			WHERE PinName = '$search'";
		$pins = $db->query($query);
		return $pins;
	}
	function get_likes($user_id) {
		global $db;
		$query = "SELECT * FROM likes
			WHERE userID = '$user_id'";
		$likes = $db->query($query);
		return $likes;
	}
	function get_pins() {
		global $db;
		$query = 'SELECT * FROM Pins
					ORDER BY PinID';
		$result = $db->query($query);
		return $result;
	}
	function get_related_pins() {
		global $db;
		$query = 'SELECT * FROM Pins
					ORDER BY PinID
					LIMIT 5';
		$result = $db->query($query);
		return $result;
	}
	function get_ratings() {
		global $db;
		$query = 'SELECT * FROM ratings
					ORDER BY ratingID';
		$result = $db->query($query);
		return $result;
	}
	function get_pin_name($pin_id) {
		global $db;
		$query = "SELECT * FROM Pins
					WHERE PinID = '$pin_id'";
		$pin = $db->query($query);
		$pin = $pin->fetch();
		$pin_name = $pin['PinName'];
		return $pin_name;
	}
	function get_pin_desc($pin_id) {
		global $db;
		$query = "SELECT * FROM Pins
					WHERE PinID = '$pin_id'";
		$pin = $db->query($query);
		$pin = $pin->fetch();
		$pin_desc = $pin['PinDesc'];
		return $pin_desc;
	}
	function get_pin_username($pin_id) {
		global $db;
		$query = "SELECT * FROM Pins
					WHERE PinID = '$pin_id'";
		$pin = $db->query($query);
		$pin = $pin->fetch();
		$username = $pin['username'];
		return $username;
	}
	function get_pin_image($pin_id) {
		global $db;
		$query = "SELECT * FROM Pins
					WHERE PinID = '$pin_id'";
		$pin = $db->query($query);
		$pin = $pin->fetch();
		$image = $pin['Image'];
		return $image;
	}
	function get_pin_by_id($pin_id) {
		global $db;
		$query = "SELECT * FROM pins
			WHERE pins.pinID = '$pin_id'
			ORDER BY pinID";
		$pins = $db->query($query);
		return $pins;
	}
	function get_ratings_by_id($pin_id) {
		global $db;
		$query = "SELECT * FROM ratings
			WHERE ratings.pinID = '$pin_id'
			ORDER BY ratingID";
		$ratings = $db->query($query);
		return $ratings;
	}
	function get_ratings_id($rating_id) {
		global $db;
		$query = "SELECT * FROM ratings
			WHERE ratings.ratingID = '$rating_id'
			ORDER BY ratingID";
		$rating = $db->query($query);
		$rating = $rating->fetch();
		$rating_id = $rating['ratingID'];

		return $rating_id;
	}
	function get_ratings_user($rating_id) {
		global $db;
		$query = "SELECT * FROM ratings
			WHERE ratings.ratingID = '$rating_id'
			ORDER BY ratingID";
		$rating = $db->query($query);
		$rating = $rating->fetch();
		$user = $rating['user'];

		return $user;
	}
	function get_ratings_comment($rating_id) {
		global $db;
		$query = "SELECT * FROM ratings
			WHERE ratings.ratingID = '$rating_id'
			ORDER BY ratingID";
		$rating = $db->query($query);
		$rating = $rating->fetch();
		$comment = $rating['comment'];

		return $comment;
	}
	function get_ratings_rating($rating_id) {
		global $db;
		$query = "SELECT * FROM ratings
			WHERE ratings.ratingID = '$rating_id'
			ORDER BY ratingID";
		$ratings = $db->query($query);
		$ratings = $ratings->fetch();
		$rating = $rating['rating'];

		return $rating;
	}
	function get_ratings_pin_id($rating_id) {
		global $db;
		$query = "SELECT * FROM ratings
			WHERE ratings.ratingID = '$rating_id'
			ORDER BY ratingID";
		$ratings = $db->query($query);
		$ratings = $ratings->fetch();
		$pin_id = $rating['pinID'];

		return $pin_id;
	}
	function add_review($user, $comment, $pin_id, $rating) {
		global $db;
		$query = "INSERT INTO ratings(user, comment, pinID, rating)
					VALUES ('$user', '$comment', '$pin_id', '$rating')";
		$db->exec($query);
	}
	function delete_pin($pin_id) {
		global $db;
		$query = "DELETE FROM pins
					WHERE pinID = '$pin_id'";
		$db->exec($query);
	}
	function delete_review($rating_id) {
		global $db;
		$query = "DELETE FROM ratings
					WHERE ratingID = '$rating_id'";
		$db->exec($query);
		
	}
	function update_review($rating_id, $user,  $comment, $pin_id, $rating) {
			global $db;
			$query = "UPDATE ratings SET user = '$user', comment = '$comment', pinID = '$pin_id', rating = '$rating'
					  WHERE ratingID = '$rating_id'";
			$db->exec($query);
		}

?>