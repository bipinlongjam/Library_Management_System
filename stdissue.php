<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title></title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

<div class="container">
       <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3" class="form-group">
                    <input type="text" placeholder="Book Id" name="book_no" class="form-control" required>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-3" class="form-group">
                    <input type="text" placeholder="Std Roll No." name="roll_no" class="form-control" required>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-2" class="form-group">
                    <input type="submit" name="bookissue" value="Issue Book" class="btn btn-danger form-control">
                </div>
                <div class="col-md-2">
                    <input type="reset" class="btn btn-danger form-control">
                </div>
            </div>
        </form>
</div>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$dbname = "lms";

//Creating connection for mysqli

$conn = new mysqli($server, $user, $pass, $dbname);


 if(isset($_POST['bookissue']))
        {
            $book_no = $_POST['book_no'];
            $roll_no = $_POST['roll_no'];
      
            $query= "INSERT INTO stdissue (book_no, roll_no) VALUES ('$book_no', '$roll_no')";
   
            $r = mysqli_query($conn,$query);

            if ($r ==  true) {
                echo "<script>alert('Book Issued Successfully');</script>";
            }
            else{
                echo "<script>alert('Something went wrong!');</script>";
            }
            // echo "<script>window.location.href=window.location.href</script>";
        }
?>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>