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
    </style>

</head>
<body>
 <?php
  $name=$_SESSION['username'];
  echo $name;
  $result=mysqli_query($db,"SELECT serialnumber,username FROM info WHERE username <> '$name' ");
  echo "<table border='1' text-align='center'><tr><td> Id </td><td>username</td><td>Send</td></tr>";
  while($row=mysqli_fetch_assoc($result))
   {
     
	   $t=$row['serialnumber'];
	   echo "<tr><td>".$row['serialnumber']."</td><td>".$row['username']."</td>";
	   echo "<td><form action='' method='post'><button type='submit' name='send'  value='$t'>send</button></form></td></tr>";
       if(isset($_POST['send']))
	   {
	    $eventid=$_SESSION['id'];
	    $recipientid=$_POST['send'];
	    $q="INSERT INTO events (eventid,recipientid) VALUES ('$eventid','$recipientid')";
	    if(mysqli_query($db,$q))
		 echo "succesfully sent to ".$recipientid;
		else 
		 echo "not sent ,try again"; 
		unset($_POST['send']);
     }  
	
	echo "<br/>";
}	
  echo "</table>";	
  echo "<br /><a href='index.php'>go to homepage</a>"; 
?>	

</body>
</html>