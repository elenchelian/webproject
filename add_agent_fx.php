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
$email =  $_REQUEST['email'];
$phone = $_REQUEST['phone'];

$sql = "INSERT INTO agent VALUES ('id','$name','$email','$phone')";

$result = $connection-> query($sql);
}
?>

<body onload="JSalert()">
<script type="text/javascript">
function JSalert(){
  Swal({
    position: 'center',
    type: 'success',
    title: 'Agent has been added successfully',
    showConfirmButton: false,
    timer: 1500
  }).then(function() {
    window.location = "add_agents.php";
});
}
</script>
</body>
</html>
