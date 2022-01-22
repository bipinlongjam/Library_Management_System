<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Home - Library Management</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>


</head>

<body style="background:linear-gradient( rgba(0, 51, 102,0.8) 100%, rgba(0, 51, 102,0.5)100%),url(image/HstalUg_321.jpg);">

<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "lms";
    
    $conn = mysqli_connect($servername,$user,$password,$dbname);
?>
    <!-- Script for navbar -->
    <?php  include('navbar.php'); ?>
    <!-- Script for navbar -->

        <?php
            $result=mysqli_query($conn, "SELECT count(id) as total from fcltissue");
            $data=mysqli_fetch_assoc($result);
            
            $result2=mysqli_query($conn, "SELECT count(id) as total from stdissue");
            $data2=mysqli_fetch_assoc($result2);

            $result3=mysqli_query($conn, "SELECT count(book_no) as total from book");
            $data3=mysqli_fetch_assoc($result3);
        ?>

<div class="container font-color">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-3 track-box" style="background-color: rgba(128,0,0,0.4);">
            <h3 class="h3 text-center">Issued Books</h3>
            <p class="text-center" style="color: white;">(Faculty)</p><hr class="hr2">
            <h4 class="h4 text-center"><?php echo $data['total']; ?></h4>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-3 track-box" style="background-color: rgba(128,128,0,0.4);">
            <h3 class="h3 text-center">Issued Books</h3>
            <p class="text-center" style="color: white;">(Student)</p><hr class="hr2">
            <h4 class="h4 text-center"><?php echo $data2['total']; ?></h4>
        </div>
        <div class="col-md-2"></div>
    </div><br><br>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-3 track-box" style="background-color: rgba(0,255,0,0.4);">
            <h3 class="h3 text-center">Total Books</h3><hr class="hr2">
            <h4 class="h4 text-center"><?php echo $data3['total']; ?></h4>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

        </div>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
    <script src="js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>