<!--Modal Save button-->
  	<div id="Pin" class="modal modal-fixed-footer">
    <div class="modal-content">
	      <h4>Save Pin</h4>
	      <div class="row">

	      	<div class="smallpin"><img src="../images/<?php echo $image; ?>" ></div>
	     		 </div>
	      			<form class="col s12" action="index.php" method="post"  id="save_pin">
							<?php foreach($boards as $board) : ?>
	     					<?php echo $board['BoardName']; ?>
 							<?php endforeach; ?>
 							
								  <input type="hidden" name="action" value="save_pin" />
				        	<input type="hidden" name="username" value="<?php echo $_COOKIE["username"] ?>"/>
                  <input type="hidden" name="userID" value="<?php echo $_COOKIE["userid"] ?>"/>
								
					    	  <input type="hidden" name="image" class="textbox" value="<?php echo $image; ?>"/><br>
					   
	     				 	  <label>Pin Name:</label>
					    	  <input type="text" name="pinName" class="textbox" value="<?php echo $pin; ?>"/><br>
					   
					    	  <label>TagID:</label>
					        <input type="text" name="tagID" class="textbox"/><br>
					        
					     		<label>Board ID:</label>
					    	  <input type="text" name="boardID" class="textbox" value=""/><br>
					    	  
					        <label>Description:</label>
					        <textarea rows="200" cols="10" name="pinDesc"  class="textarea" value="<?php echo $desc; ?>">
					        </textarea>
	      						     <input type="submit" name="Submit" class="button"/>

	            </form>

	       
	        </div>
		  </div>
    </div>
    <div class="modal-footer">
      <a class="btn-floating btn-large waves-effect waves-light modal-trigger" href="#AddBoard" ><i class="material-icons">add</i></a>
    </div>
  </div>
  <!--End of Modal add view-->