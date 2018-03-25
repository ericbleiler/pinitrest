<!DOCTYPE html>
<html>
<head>
	<title>PinITrest</title>
  <link rel="stylesheet" type="text/css" href="../css/nav.css" />
  <link rel="stylesheet" type="text/css" href="../css/materialize.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
</head>

<body>

  <nav>
    <div class="nav-wrapper light-blue darken-4">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

      <ul class="left hide-on-med-and-down">
    
        <?php if(isset($_COOKIE['username'])) { ?>
            <li><a href="../pin_catalog" >pins</a></a></li>
	          <li><a href=#Pin><i class="material-icons">add_a_photo</i>
            <?php include('../view/AddPinView.php'); ?></a></li>
            <li><a href="../view/?action=sign_out" >Sign Out</a></a></li>
            <li><a href="../pin_catalog/?action=get_user&userID=<?php echo $_COOKIE["userid"] ?>" >
                <img class="imagecircle" src="../images/<?php echo $_COOKIE["username"] ?>.jpg"></a>
            </li>
        <?php }else{ ?> 
            <li><a href="#!" class="brand-logo center">PinITrest</a></li> 
            <li><a href="../view/login.php" >Sign In</a></li>
            <li><a href="../view/register.php" >Register</a></li>

        <?php }?>
      </ul>
      <ul class="side-nav" id="mobile-demo">
           <?php if(isset($_COOKIE['username'])) { ?>
            <li><?php echo $_COOKIE["username"] ?>.jpg"></li>
            <li><a href="../pin_manager" >Add pin</a></a></li>
            <li><a href="../view/?action=sign_out" >Sign Out</a></a></li>
        <?php }else{ ?>
            <li><a href="../pin_catalog" >pins</a></a></li>
            <li><a href="../view/login.php" >Sign In</a></li>
            <li><a href="../view/register.php" >Register</a></li>
        <?php }?>
      </ul>
    </div>
  </nav>
          
	<div id="page">
		<div id="header">
		</div>
     </div>
                              

	
	
     