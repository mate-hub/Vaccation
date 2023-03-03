<?php
  require 'connection.php';
  if (isset($_POST['login'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $number = $_POST['number'];

      $user = "SELECT username FROM table_name WHERE email = '".$email."' and password = '".$password."'";
      $user = mysqli_query($con, $user);
      if (mysqli_num_rows($user) >
0) { while ($row = mysqli_fetch_array($user)) { $username = $row['username']; }
} else { $msg = "Can't Log in"; } } echo $username; ?>