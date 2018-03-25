<?php include '../view/header.php'; ?>
<?php include('../view/AddPinView.php'); ?>
<div class="header"></div>

<div id="columns">

    <?php foreach($pins as $pin) : ?>
      <figure>
        <a href="?action=view_pin&pin_id=<?php echo $pin['PinID']; ?>">
        <img src="../images/<?php echo $pin['Image']; ?>" >
	    <figcaption><h4><?php echo $pin['PinName']; ?></h4></figcaption>
	  </figure>
	<?php endforeach; ?>
</div>

<?php include '../view/footer.php'; ?>