<?php
//php-marketplace function
if(session_status()==PHP_SESSION_NONE){
    session_start();
    session_regenerate_id();
  }
include('config.php');
function chak_data($data)
{
    $trim_data = trim($data);
    $srtip_data = stripslashes($trim_data);
    $mail_data = htmlspecialchars($srtip_data);
    return $mail_data;
}

function check_email($email)
{
    global $con;
    $sql = "select * from user_info where email = '$email' ";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

function login($email, $password)
{
    global $con;
    $pass = md5($password);
    $sql = "select * from user_info where email = '$email' and password='$pass'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
    if ($row) {
        $_SESSION['user_id']= $row['id'];
        $_SESSION['username']= $row['username'];
        $_SESSION['fname']= $row['fname'];
        $_SESSION['email_id']= $row['email'];
        $_SESSION['role']= $row['role_id'];
        ?>
        <script>
           window.location.href = "dashboard-settings";
        </script>
        <?php
        die();
    } else {
        // echo "login Faild";
    }
    return $row;
}

function profile_info(){
    
    global $con;
    $userid = $_SESSION['user_id'];
    $sql = "select * from user_info where id=$userid";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
    return $row;
}

?>

