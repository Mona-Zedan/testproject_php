

<?php include 'inc/navbar.php' ?>
<?php include 'inc/header.php' ?>
<?php include 'inc/footer.php' ?>
 <?php if(!isset($_SESSION['auth'])){
    header("location:register.php");
    die;
}
?>
 
 <h1>Home Page </h1>



 