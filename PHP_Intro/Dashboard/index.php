<?php
session_start();
//checking whether the user is logged in or not
if(!isset($_SESSION['role'])){
    header("Location: /BCA_Intro/login.php");
}else if($_SESSION['role'] =! 2){
    echo "Sorry ! You can't access this dashboard.";
    exit();
}

?>

User Dashboard


<?php echo $_SESSION['name']; ?>
<?php echo $_SESSION['username']; ?> 


