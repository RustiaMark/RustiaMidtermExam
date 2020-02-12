<?php
session_start();

  $username = $_POST['username'];
  $password = $_POST['password'];
 
  if ($username&&$password)
  {
	 $connect = mysqli_connect("localhost", "root", "")or die("couldn't connect to the database!");
	 
	 $query = mysqli_query("SELECT * FROM gatekeeper WHERE username='$username', password='$password'");
	 
	 $numrows = mysqli_num_rows($query);
	 
	 if($numrows!=0)
	 {
		 while($row = mysqli_fetch_assoc($query))
		 {
			 $dbusername = $row['username'];
			 $dbpassword = $row['password'];
		 }
		 if ($username==$dbusername&&($password)==$dbpassword)
		 {
			  echo '<script type="text/javascript">
                      alert("That Account dont exist!");
                         location="home.php";
                           </script>';
			 $_SESSION['username'] = $username;
		 }
		 else
			 echo '<script type="text/javascript">
                      alert("Wrong Password!");
                         location="index.php";
                           </script>';
	 }	 
	 else
         die('<script type="text/javascript">
                      alert("Welcome User!");
                         location="index.php";
                           </script>');		 
	  
  }
  else 
	  die('<script type="text/javascript">
                      alert("Please enter a username and password!");
                         location="tb.php";
                           </script>');
  
	  	 
?>
