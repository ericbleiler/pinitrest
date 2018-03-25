<?php include '../view/header.php'; ?>
<?php include('../view/AddPinView.php'); ?>
<div class="header"></div>

 <?php if(isset($_COOKIE['username'])) { ?>
 <?php } ?>  

	</select>
<ul class="flex-container">
  <li class="flex-item"><img src="../images/<?php echo $image; ?>" >
    <div class="padding"><?php echo $pin; ?><br><a class="waves-effect waves-light btn modal-trigger" href="#Pin">Save</a>
    </div>
  </li>
  <?php include('../view/SavePinView.php'); ?>
  <?php include('../view/AddBoardView.php'); ?>
  
<li class="flex-item">
<div id="columns-side">
   <?php foreach($relatedpins as $pin) : ?>
      <figure>
        <a href="?action=view_pin&pin_id=<?php echo $pin['PinID']; ?>">
        <img src="../images/<?php echo $pin['Image']; ?>" >
	    <figcaption><?php echo $pin['PinName']; ?></figcaption>
	  </figure>
	<?php endforeach; ?>
</div>
</li>
</ul>

<?php include '../view/footer.php'; ?>

