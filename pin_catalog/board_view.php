<?php include '../view/header.php'; ?>
<div class="top-header">
  	 <ul class="flex-container">
  	      <li class="flex-user1"><br><h3><?php echo $board; ?></h3></li>
    </ul>
</div>
<div id="columns">
   <?php foreach($pins as $pin) : ?>
      <figure>
        <a href="?action=view_pin&pin_id=<?php echo $pin['PinID']; ?>">
        <img src="../images/<?php echo $pin['Image']; ?>" >
	    <figcaption><?php echo $pin['PinName']; ?></figcaption>
	  </figure>
	<?php endforeach; ?>
</div>
<?php include '../view/footer.php'; ?>

