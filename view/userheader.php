<!DOCTYPE html>
<html>
<head>
	<title>Project 1</title>
  <link rel="stylesheet" type="text/css" href="../css/nav.css" />
  <link rel="stylesheet" type="text/css" href="../css/materialize.css" />
  <link rel="stylesheet" type="text/css" href="../css/style.css" />
  <link rel="stylesheet" type="text/css" href="../css/sidebar-menu.css" />

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>

<body>

        <nav>
         <div class="nav-wrapper">
           <a href="../pin_catalog" class="brand-logo center">
               <img src="../images/reddit.png" class="responsive-img" >
           </a>
           <ul id="slide-out" class="side-nav">
            <li>
              <div class="userView">
                <div class="background">
                  <img src="images/table.jpg" />
                </div>
                <a href="#!user"><img class="circle" src="../images/Eric Bleiler.jpg"></a>
                                <? echo $_COOKIE["username"] ?>

              </div>

            </li>
          <!--
          <li>
          <form class="right">
                <div class="input-field right">
                  <input id="search" type="search" required>
                  <label class="label-icon" for="search"><i class="material-icons right">search</i></label>
                    <i class="material-icons">close</i>
                </div>  
                </form>
            </li>
            -->
            <li><div class="padding"><a href="../pin_manager" class="btn-info">Add pin</a></div></li>
            <li><div class="padding"><a href="../user" class="btn-info">Sign In</a></div></li>
            <li><div class="padding"><a href="../pin_manager" class="btn-info">Sign Out</a></div></li>
            

          </ul><a href="#" data-activates="slide-out" class="button-collapse" style="margin-top:-20px;"><i class="material-icons">menu</i></a>
           
         </div>
       </nav>
	<div id="page">
		<div id="header">
		</div>
    
