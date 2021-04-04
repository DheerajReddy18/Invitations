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
	      background-color:coral;
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
   $r=mysqli_query($db,"SELECT serialnumber FROM info WHERE username='$name' ");
   $data=mysqli_fetch_assoc($r);
   $id=$data['serialnumber'];
   $sql="SELECT * FROM events WHERE recipientid = '$id' "; 
   $result=mysqli_query($db,$sql);
   while($row_1=mysqli_fetch_assoc($result))
   {
   
   $eventid=$row_1['eventid'];
   if($row_1['accepted']!=1)
   {
     $rec=$row_1['recipientid'];
     if(isset($_POST['accept']))
 	{  
            $store=$_POST['accept'];
           mysqli_query($db,"UPDATE events SET accepted=1 WHERE eventid='$store'AND recipientid='$rec' ");
	   unset($_POST['accept']); 
	    header(Refresh:0"); 
  	   } 
  	if(isset($_POST['reject']))
    {  
           $store=$_POST['accept'];
           mysqli_query($db,"UPDATE events SET accepted=9 WHERE eventid='$store' AND recipientid='$rec' ");
	   unset($_POST['reject']); 
	   header("Refresh:0");
  	 } 
    echo "<div id='inv'> ";
   
    $sql1=mysqli_query($db,"SELECT * FROM  invitation WHERE id='$eventid '") ; 
 	$row=mysqli_fetch_assoc($sql1);
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
 	$store=$row['id'];
 	echo "<form action='' method='post'>";
 	echo "<button type='submit' name='accept' id='accept' value='$store '  >accept</button>";
 	echo "<button type='submit' name='reject' id='reject' value='$store'  >reject</button>";
 	echo "</form>";
	echo "</div>";
  
    echo "<br /><br /><br /><br />";
  }
 }
 
 echo "<br /><a href='index.php'>go to homepage</a>"; 
?> 
  
 
 
 
 </body>
 
 
 </html>
