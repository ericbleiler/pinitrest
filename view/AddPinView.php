

<div id="Pin" class="modal modal-fixed-footer">
    <form class="col s12" action="index.php" method="post"  id="add_pin" enctype='multipart/form-data'>
        <div class="modal-content">    
            <div class="container">
                <div class="row">
                    <div class="col m6">
                        <img class="materialboxed" width="650" src="http://cdn4.wpbeginner.com/wp-content/uploads/2011/09/pin.gif">
                    </div>
                    <div class="col s6 m6 l6">
                        
				            <input type="hidden" name="action" value="add_pin" />
				        	<input type="text" name="username" value="<?php echo $_COOKIE["username"] ?>"/>
                        	<input type="hidden" name="userID" value="<?php echo $_COOKIE["userid"] ?>"/>

                        	<label>Pin Name:</label>
					        <input type="text" name="pinName" class="textbox"/><br>
                            
                            <label>TagID:</label>
					        <input type="text" name="tagID" class="textbox"/><br>
					        
					        <label>Upload an Image:</label>
                            <input name='filename' type='file' />
                            
					        <label>Description:</label>
					        <textarea rows="200" cols="10" name="pinDesc"  class="textarea">
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