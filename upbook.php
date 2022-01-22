<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Update Book - Library Management</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body style="background:linear-gradient( rgba(0, 51, 102,0.8) 100%, rgba(0, 51, 102,0.5)100%),url(image/HstalUg_321.jpg);" class="font-color">

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

<h2 class="h2 text-center">Enter the Book's details to update</h2> <hr>

    <div class="container">
        <form action="" method="post">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Book ID:</label>
                        <input type="text" name="book_no" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Author Name:</label>
                        <input type="text" name="authorname" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Book Title:</label>
                        <input type="text" name="booktitle" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Publisher:</label>
                        <input type="text" name="publisher" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Publish Year:</label>
                        <input type="text" name="publishyear" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Edition:</label>
                        <input type="text" name="edition" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Volume:</label>
                        <input type="text" name="volume" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Pages:</label>
                        <input type="text" name="pages" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Price:</label>
                        <input type="text" name="price" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Status:</label>
                        <input type="text" name="status" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Subject ID:</label>
                        <input type="text" name="subjectid" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Copy:</label>
                        <input type="text" name="copy" class="form-control" required>
                    </div>
                    <input type="submit" name="update" value="Update Book" class="btn btn-danger form-control">
                </div>
                <div class="col-md-1"></div>
            </div>
        </form>
    </div>

    <?php
    if(isset($_POST['update']))
        {
            $book_no = $_POST['book_no'];
            $authorname = $_POST['authorname'];
            $booktitle = $_POST['booktitle'];
            $publisher = $_POST['publisher'];
            $publishyear = $_POST['publishyear'];
            $edition = $_POST['edition'];
            $volume = $_POST['volume'];
            $pages = $_POST['pages'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $subjectid = $_POST['subjectid'];
            $copi = $_POST['copi'];
      
            $query= "UPDATE book SET book_no = '$book_no', authorname = '$authorname', booktitle = '$booktitle', publisher = '$publisher', publishyear = '$publishyear', edition = '$edition', volume = '$volume', pages = '$pages', status = '$status', subjectid = '$subjectid', copi = '$copi' WHERE book_no = '$book_no'";
   
            $r = mysqli_query($conn,$query);

            if ($r ==  true) {
                echo "<script>alert('Book Updated Successfully');</script>";
            }
            else{
                echo "<script>alert('Something went wrong!');</script>";
            }
        }
?>

        </div>
    </div>


    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>