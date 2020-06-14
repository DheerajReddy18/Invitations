<?php 

include 'insert.php';
if(!isset($_SESSION['username']))

{
    
	header("location:login.php");
}
 
?>

<html>
<head>
   <style>
	  
	 body{
	      background-color:lightblue;
          position:absolute;
	     font-size:20px;
		 left:25%;
		 font-family:cursive;	     
	     }
		 
	 #inv{
	     outline:5px solid black;
		 outline-offset:20px;
	    
	     }	 
    </style>

 

</head>
<body>
  <?php
  $name= $_SESSION['username'];
 
 $sql="SELECT * FROM invitation WHERE sender = '$name' "; 
 $result=mysqli_query($db,$sql);

 
 while($row=mysqli_fetch_assoc($result))
 {
  echo "<div id='inv'> ";
  echo '<br />';
   echo '<h2> ' ; 
   echo $row['type']." party";
   echo '</h2>';
   echo '<h3> ' ; 
   echo "party date: ".$row['date'];
   echo '</h3> ' ; 

   echo  "<h3>from :". $row['sender']."</h3>";

   echo $row['header'];
   echo "<br />";
   echo   $row['body'];
   echo "<br />";
   echo $row['footer'];
   echo "<br /><br />";
   echo "</div>";
   
  

 }
  
  echo "<br /><a href='index.php'>go to homepage</a>"; 
 
 
?>
</body>
</html>

