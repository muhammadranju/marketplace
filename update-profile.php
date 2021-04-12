<?php

include('config/config.php');
if (isset($_POST['save_changes'])) {
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $country = $_POST['country'];
  $city = $_POST['city'];
  $address_line = $_POST['address_line'];
  $zip_code = $_POST['zip_code'];

  $sql = "INSERT INTO user_info (fname,lname,country,city,address_line,zip_code) VALUES('$fname', '$lname', '$country', '$city', '$address_line', '$zip_code')";
  $query = mysqli_query($con, $sql);

  if ($query) {
?>
    <script>
      window.location.href = "/";
    </script>
  <?php
  } else {
  ?>
    <script>
      window.location.href = "/";
    </script>
<?php
  }
}




?>

<a href="dashboard-settings">Back</a>