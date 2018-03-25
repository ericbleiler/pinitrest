<?php

   function SelectBoardListByUserID($UserID)
    {
        global $db;
        $query = "SELECT * FROM Boards INNER JOIN UserBoard ON Boards.BoardID = UserBoard.BoardID WHERE UserBoard.UserID = '$UserID' ";
        $boards = $db->query($query);
        return $boards;
    }
   function get_board_by_userid($user_id){
        global $db;
        $query = "SELECT * FROM Boards";
		$boards = $db->query($query);
        return $boards;
    }
    function add_board($boardName, $boardDesc)
    {
        global $db;
        $query = "INSERT INTO Boards(BoardName, BoardDesc) VALUES ('$boardName', '$boardDesc')";
        $db->exec($query);
        
    }
    function get_pins_by_board_id($board_id) {
		global $db;
		$query = "SELECT * FROM Pins INNER JOIN UserBoard ON UserBoard.UserID = Pins.UserID WHERE UserBoard.UserID = '$UserID'"; 
		$pins = $db->query($query);
		return $pins;
	}
    function get_board_name($board_id) {
		global $db;
		$query = "SELECT * FROM Boards
					WHERE BoardID = '$board_id'";
		$board = $db->query($query);
		$board = $board->fetch();
		$board_name = $board['BoardName'];
		return $board_name;
	}
	 function get_board_desc($board_id) {
		global $db;
		$query = "SELECT * FROM Boards
					WHERE BoardID = '$board_id'";
		$board = $db->query($query);
		$board = $board->fetch();
		$board_desc = $board['BoardDesc'];
		return $board_desc;
	}

?>