<?php
  session_start();

  $errors=array();
  
  $db=mysqli_connect('127.0.0.1','root','');
  mysqli_query($db,"CREATE DATABASE dheeraj");
  mysqli_select_db($db,"dheeraj");
  $table1="CREATE TABLE info ( serialnumber INT(11) AUTO_INCREMENT PRIMARY KEY,username VARCHAR(255),emailid VARCHAR(255),password VARCHAR(255))";
  mysqli_query($db,$table1);
  $table2="CREATE TABLE invitation (id INT(11) AUTO_INCREMENT PRIMARY KEY,sender VARCHAR(255),date DATE,type VARCHAR(255),header VARCHAR(255),body VARCHAR(500),footer VARCHAR(255))";
  mysqli_query($db,$table2);
  $table3="CREATE TABLE events (number INT(11) AUTO_INCREMENT PRIMARY KEY,eventid INT(10),recipientid INT(10),accepted INT(10) DEFAULT 0)";
  mysqli_query($db,$table3);

 
    
  if(isset($_POST['register']))
 {
  
  $username=mysqli_real_escape_string($db,$_POST['username']);	  
  $emailid=mysqli_real_escape_string($db,$_POST['emailid']);	
  $password_1=mysqli_real_escape_string($db,$_POST['password_1']);	
  $password_2=mysqli_real_escape_string($db,$_POST['password_2']);	
	 
  if(empty($username))
    array_push($errors,"username is required");	 
  if(empty($emailid))
    array_push($errors,"email is required");	 
  if(empty($password_1))
    array_push($errors,"password is required");	 
  if($password_1!=$password_2)
    array_push($errors,"passwords do not match");
	
  $info_check_query="SELECT * FROM info WHERE username = '$username' or emailid='$emailid' LIMIT 1";
  $result=mysqli_query($db,$info_check_query);
  $name=mysqli_fetch_assoc($result);
  if($name)
  {
    if($name['username']==$username)
	  array_push($errors,"username already exists");
	if($name['emailid']==$emailid)
	  array_push($errors,"emailid  has already registered ");  
  }  
   if(count($errors)==0)
  {
   $password=md5($password_1);
   $query="INSERT INTO info(username,emailid,password) VALUES ('$username','$emailid','$password')";  
   if(!mysqli_query($db,$query))
     echo '<br />not inserted';
   else
     echo '<br />inserted';
  $_SESSION['username']=$username;
  $_SESSION['success']="you are now logged in";
  header("location:index.html");
 }
} 
 
 

 if(isset($_POST['login']))
 {
  
    $username=mysqli_real_escape_string($db,$_POST['username']);	  
    $password=mysqli_real_escape_string($db,$_POST['password_1']);	
    if(empty($username))
      array_push($errors,"username is required");	 
    if(empty($password))
      array_push($errors,"password is required");	 
    if(count($errors)==0)
	{
	   $password=md5($password);
       $query="SELECT * FROM info WHERE username='$username' AND password='$password' ";  
	   $results= mysqli_query($db,$query);
	   if(mysqli_num_rows($results))
	   {
	     $_SESSION['username']=$username;
		 $_SESSION['success']="logged in successfully";
		 header("location:index.html");
	   }
	   else
	   
	     array_push($errors,"wrong username or password  try again");
	}  
	 else
	 {
	    echo 'hi';
	    array_push($errors,"wrong username or password  try again");
          
	  } 
 }
	
	 if(count($errors)!=0)
	 {
     
      foreach($errors as $error)
	  {
	    echo $error ;
		echo "<br>";
		
	    
	  }
     }
    
	 if(isset($_POST['create']))
	 {
	
   
	$sender=$_SESSION['username'];
    $date=mysqli_real_escape_string($db,$_POST['date']);
    $type=mysqli_real_escape_string($db,$_POST['type']); 
    $header=mysqli_real_escape_string($db,$_POST['header']); 
    $body=mysqli_real_escape_string($db,$_POST['body']); 
    $footer=mysqli_real_escape_string($db,$_POST['footer']);    
	
    $query="INSERT INTO invitation (sender,date,type,header,body,footer) VALUES ('$sender','$date','$type','$header','$body','$footer')";  
    mysqli_query($db,$query);
	$result1=mysqli_query($db,"SELECT id FROM invitation WHERE date='$date' AND sender='$sender' AND type='$type'");
	$row1=mysqli_fetch_assoc($result1);
	$_SESSION['id']=$row1['id'];
	header("location:send.html");
   
      	 
     }
	 
	 
	
	 
 
 ?>
 
 
 
 
