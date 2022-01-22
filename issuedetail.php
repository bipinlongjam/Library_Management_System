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

<?php
    $servername = "localhost";
    $user = "root";
    $password = "";
    $dbname = "lms";
    
    $conn = mysqli_connect($servername,$user,$password,$dbname);
?>

<?php
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM std WHERE id = ".mysqli_real_escape_string($_GET['id']).";";
        $result = mysqli_query($conn,$sql);
    }
    
    $result = mysqli_query($conn,"SELECT * FROM stdissue WHERE roll_no = '".$_POST['roll_no']."' ");
?>       

<div class="container" style="color: white;">
    <h3 style="color: red;">Issue Details:</h3>
    <div class="row">
        <div class="col-md-12">
            <form method="get" action="delete2.php">
            <table style="width:100%">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="checkAl"> Select All</th>
                        <th>Book ID</th>
                        <th>Issue Date</th>
                    </tr>
                </thead>
                <?php
                $i=0;
                while($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["book_no"]; ?>"></td>
                    <td><?php echo $row["book_no"]; ?></td>
                    <td><?php echo $row["issuedate"]; ?></td>
                </tr>
                <?php
                $i++;
                }
                ?>
            </table>
            <p align="center"><button type="delete" class="btn btn-success" name="delete">Return Book</button></p>
            </form>
        </div>
    </div>
</div>

<script>
    $("#checkAl").click(function () {
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
</script>

<br><hr style="border: 0.3px solid white;">

<?php
    include 'stdissue.php';
?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>

</html>