<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank Management</title>
    <!-- Bootstrap files -->
    <link rel="stylesheet" href="bootstrap/css//bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- External CSS file -->
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <a class="navbar-brand" href="index.php">Blood Bank Management System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin/login.php">Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="donor/login.php">Donor</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="patient/login.php">Patient</a>
            </li>
			<li class="nav-item">
                <a class="nav-link" href="aboutus.php">Aboutus</a>
            </li>
            </ul>
        </div>
    </nav>
<!-- Main content -->
<div class="container-fluid" style="margin:50px;">
    <div class="row container" style="text-align: justify;">
        <div class="col-md-8 mx-auto content-left">
            <h4>What is Blood Bank Management System?</h4>
            <p>
                The basic building aim is to provide online blood bank service to the people. It is a browser-based system that is designed to store, process, retrieve and analyse information concerned with the administrative and inventory management within a blood bank system
            </p>
           
        </div>
        <div class="col-md-3 content-right">
            <img class="img-fluid" src="../BBMSayan/images/image1.jpg" height="auto" width="70%">
        </div>
    </div>
</div>

<div class="container-fluid" style="margin-bottom: 5%;">
    <div class="row">
        <div class="col-10  m-auto">
        <h4>Our centers?</h4>
        <div class="card container">
            <h4>Navsari</h4>
            <hr>
            <p>Near parshi Hospital Address, JN Tata Rd, Marg, Lunsikui, Navsari, Gujarat.<p>   
        </div>
        <div class="card">
            <h4>Valsad</h4>
            <hr>
            <p>Near Kasturba Hospital Address, Lala Lajpatrai Road, Valsad - 396001, Gujarat.</p>
        </div>
        <div class="card">
            <h4>Vapi</h4>
            <hr>
            <p>Near 21 Century Hospital Address, Shiv Residency tower A,  Chharawada Rd, Vapi, Gujarat.</p>
        </div>
        <div class="card">
            <h4>Surat</h4>
            <hr>
            <p>Near Apple Hospital Address, Udhna Darwaja, Aman Nagar, Udhna, Surat - 395002, Gujarat.</p>
        </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 bg-danger footer">
            &copy 2024 Ayan
        </div>
    </div>
</div>
</body>
</html>