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
$name =  $_REQUEST['name'];
$occupation = $_REQUEST['occupation'];
$phone_number =  $_REQUEST['phone_number'];
$email =  $_REQUEST['email'];
$seminar =  $_REQUEST['seminar'];

$sql = "INSERT INTO participants VALUES ('id','$name','$occupation','$phone_number','$email','$seminar','-')";

$result = $connection-> query($sql);
}
?>

<body onload="JSalert()">
<script type="text/javascript">
function JSalert(){
  Swal({
    position: 'center',
    type: 'success',
    title: 'Successfully registered for the seminar',
    showConfirmButton: false,
    timer: 1500
  }).then(function() {
    window.location = "index.php";
});
}
</script>
</body>
</html>
