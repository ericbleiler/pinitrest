<?php include '../view/header.php'; ?>
<?php include('../view/AddPinView.php'); ?>
<div class="header"></div>

<form action="index.php" method="post"  id="search">
    <input type="hidden" name="action" value="search" />
    <label>Search:</label>
    <input type="text" name="search" class="textbox"/><br>
    <input type="submit" name="Submit" class="button"/>
</form>

<div id="columns">
    <div class="margin">

    <?php foreach($pins as $pin) : ?>
      <figure>
        <a href="?action=view_pin&pin_id=<?php echo $pin['PinID']; ?>">
        <img src="../images/<?php echo $pin['Image']; ?>" >
	    <figcaption><h4><?php echo $pin['PinName']; ?></h4>
	       
        </figcaption>
	  </figure>
	<?php endforeach; ?>
</div>
</div>


<?php include '../view/footer.php'; ?>