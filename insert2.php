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