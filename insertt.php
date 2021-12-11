<?php
      $servername = "localhost";
      $user = "root";
      $password = "sushruta";
      $dbname = "tourist_rg";

      // Create connection
      $conn = mysqli_connect($servername, $user, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      else{
        echo "connection is succesfull.....";
      }
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $cname = $_POST['cname'];
      $email = $_POST['email'];
      $area_code = $_POST['area_code'];
      $phone = $_POST['phone'];
      $places = $_POST['places'];
      $resident = $_POST['resident'];

      $sql = "INSERT INTO `visitors` (`fname`, `lname`, `cname`, `email`, `area_code`, `phone`, `places`, `resident`) VALUES ('$fname', '$lname', '$cname', '$email', '$area_code', ' $phone', '$places', '$resident')";

      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        <br>
        echo "THANKU FOR REGISTATION";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
?>