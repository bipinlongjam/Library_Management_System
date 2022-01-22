<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lms";

$connect = mysqli_connect($servername, $username, $password, $dbname);
$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES["excel"]["name"])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();
   for($row=2; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
    $rollno = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $name = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $fname = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $branch = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(3, $row)->getValue());
    $year = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(4, $row)->getValue());
    $dob = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(5, $row)->getValue());
    $mno = mysqli_real_escape_string($connect, $worksheet->getCellByColumnAndRow(6, $row)->getValue());
    $query =  "INSERT INTO std (roll_no, name, fname, branch, year, dob, mno) VALUES ('".$rollno."', '".$name."', '".$fname."', '".$branch."', '".$year."', '".$dob."', '".$mno."')";
    mysqli_query($connect, $query);
    $output .= '<td>'.$rollno.'</td>';
    $output .= '<td>'.$name.'</td>';
    $output .= '<td>'.$fname.'</td>';
    $output .= '<td>'.$branch.'</td>';
    $output .= '<td>'.$year.'</td>';
    $output .= '<td>'.$dob.'</td>';
    $output .= '<td>'.$mno.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
  <title></title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
 </head>
 <body>
    <h2 class="h2 text-center">Import Excel Data From Here</h2>
    <p class="text-center" style="color: white;">(For Student)</p><br>
   <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Select Excel File:</label>
                        <input type="file" name="excel" class="form-control" required>
                    </div>
                    <input type="submit" name="import" value="Import" class="btn btn-danger form-control">
                </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <br><br>
        <?php
          echo $output;
        ?>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
 </body>
</html>