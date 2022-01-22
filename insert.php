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
            $fcltid = $_POST['fcltid'];
      
            $query= "INSERT INTO fcltissue (book_no, fcltid) VALUES ('$book_no', '$fcltid')";
   
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