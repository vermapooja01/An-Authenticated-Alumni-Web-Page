<?php
include 'login.php';
include 'Userlogin.php';
 $connection = new mysqli($hn, $un, $pw, $db);
if (isset($_SESSION['username']))
  {
      //session_start();
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
    $firstname = $_SESSION['firstname'];
    $lastname  = $_SESSION['lastname'];

    echo "Hi ".$firstname."<br/>";

                   echo "<br/>";
                   echo "<br/>";
        echo "My Profile: my name is ".$firstname." ".$lastname."<br/>";
        echo "My Events<br/>";
       echo "CampusNews<br/>";
      echo '<form method="post">
    <input type="submit" value="Logout" name="Logout" >
      </form>
          ';
 if ($connection->connect_error) die($connection->connect_error);
  

$query1 = "SELECT firstname, lastname, email FROM registeredusers";
  $result1 = $connection->query($query1);
if ($result1->num_rows!=0)
  {
      echo "<h4>MEET OUR ALUMNIS</h4>";
      while($row1 = $result1->fetch_assoc())
      {
          $firstname = $row1['firstname'];
          $lastname = $row1['lastname'];
          $email = $row1['email'];
          echo "<p> Name: $firstname $lastname <br/> Email: $email </p>";
        }
    
   }   
  }
  
  
  
