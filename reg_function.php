<!DOCTYPE html>

<html lang="en">

<head>
  <script src="package/dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="package/dist/sweetalert2.css">
</head>
<body
<?php
$connection = mysqli_connect("localhost", "root", "", "insurance");
if(isset($_GET['add'])){
$id =$_GET['add'];
$topic =  $_REQUEST['topic'];
$date = $_REQUEST['date'];
$time =  $_REQUEST['time'];
$venue =  $_REQUEST['venue'];

$sql = "INSERT INTO seminar VALUES ('id','$topic','$date','$time','$venue')";

$result = $connection-> query($sql);
}
?>

<body onload="JSalert()">
<script type="text/javascript">
function JSalert(){
  Swal({
    position: 'center',
    type: 'success',
    title: 'Seminar has been added Successfully',
    showConfirmButton: false,
    timer: 1500
  }).then(function() {
    window.location = "dashboard.php";
});
}
</script>
</body>
</html>
