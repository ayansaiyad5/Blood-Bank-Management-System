<?php 
    session_start();
    if(isset($_SESSION['email'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Certificate</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="../bootstrap/css//bootstrap.min.css">
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="../css/styles.css">
    <!-- jQuery file -->
    <script src="../includes/juqery_latest.js"></script>
<style>
p
{
	color:red;
	 font: 70px Palace Script MT ;
	 margin-top: -395px;
  margin-bottom: 100px;
  margin-right: 180px;
  margin-left: 180px;
}
h1
{
	color:red;
	 font: 70px Palace Script MT ;
	 margin-top: -15px;
  margin-bottom: 100px;
  margin-right: -220px;
  margin-left: 180px;
}
</style>
</head>
<body><br><br><br><br>
 <center><img class="img-fluid" src="../images/certificate.jpg" height="auto" width="50%">	
   <center> <?php  $a=$_SESSION['name']; ?></strong><br><br>
              
				<?php echo "<p>".$a."</p>";  echo "<h1>" . date("Y/m/d") . "</h1>";?>
				
   
</body>
</html>
<?php
}
else{
    header('Location:login.php');
}