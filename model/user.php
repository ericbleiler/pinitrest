<?php

	function add_user($username, $password, $bio, $filename) {
		global $db;
		$query = "INSERT INTO Users(Username, Password, Bio, Image)
					VALUES ('$username', '$password', '$bio', '$filename')";
		$db->exec($query);
	}
	function get_login($username, $password) {
		global $db;
		$query = "SELECT * FROM Users
					WHERE Username = '$username' AND Password = '$password'";
		$result = $db->query($query);
		if($result != null){
			return true;
		}else{ 
			return false;
		}
	}
	function get_userid($username) {
		global $db;
		$query = "SELECT * FROM Users 
				  WHERE Username = '$username'";
		$result = $db->query($query);
		$result = $result->fetch();
		$id = $result['UserID'];
		return $id;
	}


?>