<?php include '../view/header.php'; ?>
<div class="top-header-user">
  	 <ul class="flex-container">
  	      <li class="flex-user1"><br><h3><?php echo $_COOKIE["username"] ?></h3></li>
          <li class="flex-user"><img class="imagecircle-large"src="../images/<?php echo $_COOKIE["username"] ?>.jpg">
    </ul>
</div>
<div class="margin-auto">
<div class="row">
    <div class="">
      <ul class="tabs">
        <li class="tab"><a href="#test1">Pins</a></li>
        <li class="tab"><a class="active" href="#test2">Boards</a></li>
      </ul>
    </div>
    <div id="test1" class="col s12">
<div id="columns">

    <?php foreach($pins as $pin) : ?>
      <figure>
        <a href="?action=view_pin&pin_id=<?php echo $pin['PinID']; ?>">
        <img src="../images/<?php echo $pin['Image']; ?>" >
	    <figcaption><h4><?php echo $pin['PinName']; ?></h4></figcaption>
	  </figure>
	<?php endforeach; ?>
</div></div>
    <div id="test2" class="col s12">


	<section class="cards">
			<?php foreach($boards as $board) : ?>
             <article class="card">
             	<a href="?action=view_board&board_id=<?php echo $board['BoardID']; ?>">
                    <img src="../images/<?php echo $pin['Image']; ?>" >
               </a>
             </article>
		 		<?php endforeach; ?></ul>
		</div>	
	</section>
    </div>
  </div>
  
  <?php include('../view/SavePinView.php'); ?>
  <?php include('../view/AddBoardView.php'); ?>


<?php include '../view/footer.php'; ?>

