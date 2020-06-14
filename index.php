<?php
  session_start();
  if(!isset($_SESSION['username']))
  {
    
	header("location:login.php");
  }
  
  if(isset($_GET['logout']))
  {
    session_destroy();
	unset($_SESSION['username']);
	header("location:login.php");
  }	
  
  
?>  



<!DOCTYPE html>
<html lang="en">
  <head>
    <title>homepage</title>
	<style>
	  #page{
         position:absolute;
	     font-size:30px;
		 left:25%;
		 font-family:cursive;
		 }
	 body{
	      background-color:lightblue;
          	     
	     }
	 
	</style>
	
  </head>
  <body>
   <div>
	 <?php if(isset($_SESSION['success'])): ?>
          <h3>
		       <?php 
			         echo $_SESSION['success'];
		             unset($_SESSION['success']);  
			   ?> 
		  </h3> 
	     <?php endif ?>	  
   </div>
   <div id="page" align="center">
   <?php if(isset($_SESSION['username'])): ?>
    <h3 align="center">welcome <strong><?php echo $_SESSION['username']; ?></strong></h3>
   <?php endif ?>
   
   
   <p>click here to create a new <a href="INV.php">Invitation</a></p>
   <p>click here to see <a href="events.php">sent Invitations </a></p>
   <p>click here to see <a href="view.php">recieved Invitations </a></p>
   <P>click here to see <a href="acceptedinv.php">accepted Invitations </a>by you</p>
   
   <br />
   <button><a href="index.php?logout='1'">logout</a></button>
   </div>
 </body>
</html> 