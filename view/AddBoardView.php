
<!--<a class="waves-effect waves-light btn modal-trigger" href="AddBoard">Add board</a>-->


<div id="AddBoard" class="modal modal-fixed-footer">
    <form class="col s12" action="index.php" method="post"  id="add_board">
        <div class="modal-content">    
            <div class="container">
                <div class="row">
                    <div class="col m6">
                       
                    </div>
                    <div class="col m6">
                        <input type="hidden" name="action" value="add_board" />
				        	<input type="text" name="username" value="<?php echo $_COOKIE["username"] ?>"/>
                        	<input type="hidden" name="userID" value="<?php echo $_COOKIE["userid"] ?>"/>

                        	<label>Board Name:</label>
					        <input type="text" name="boardName" class="textbox"/><br>
                            
					        <label>Description:</label>
					        <textarea rows="200" cols="10" name="boardDesc"  class="textarea">
					        </textarea>
					       	<input type="submit" name="Submit" class="button"/>
 
                </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
        </div>
    </form>
</div>    