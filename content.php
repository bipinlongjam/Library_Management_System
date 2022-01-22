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

            <!-- Radio Button -->
            <h3 class="text-justify" style="color: white;">
                <form action="" class="text-center">
                    <input type="radio" name="chkPassPort" value="1" id="chkYes" onClick="displayForm(this)"><label for="chkYes">Student  |</label><span></span>
                    <input type="radio" name="chkPassPort" value="2" id="chkYess" onClick="displayForm(this)"><label for="chkYess">Faculty</label>
                </form>
            </h3>
            <!-- Radio Button -->
            <hr>

            <!-- Radio Button content for student -->
            <div class="container">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div id="A" style="visibility:hidden;">
                            <form method="post" action="stdhome2.php">
                                <div class="form-group">
                                    <label>Roll Number:</label>
                                    <input type="text" name="roll_no" class="form-control" required>
                                </div>
                                <input type="submit" value="Show" class="btn btn-danger center-block" name="show">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <!-- Radio Button content for student -->

            <!-- Radio Button content for faculty -->
            <div class="container" id="B" style="margin-top: -124px; visibility:hidden;">
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div>
                            <form method="post" action="fcthome2.php">
                                <div class="form-group">
                                    <label>Faculty ID:</label>
                                    <input type="text" name="fcltid" class="form-control" required>
                                </div>
                                <input type="submit" value="Show" class="btn btn-danger center-block" name="show">
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
            </div>
            <!-- Radio Button content for faculty -->

            
<!-- Script for radio button -->
<script type="text/javascript">
    function displayForm(c) {
        if (c.value == "1") {

            document.getElementById("A").style.visibility = 'visible';
            document.getElementById("B").style.visibility = 'hidden';
        } else if (c.value == "2") {
            document.getElementById("A").style.visibility = 'hidden';
            document.getElementById("B").style.visibility = 'visible';
        } else {}
    }
</script>
<!-- Script for radio button -->



    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>