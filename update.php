<!DOCTYPE html>

<html lang="en">

<head>
  <script src="package/dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="package/dist/sweetalert2.css">
</head>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "", "insurance");
if(isset($_GET['update'])){
$id =$_GET['update'];
$name = $_REQUEST['name'];
$password = $_REQUEST['password'];
$sql_update ="UPDATE admin SET name='$name',password = '$password' WHERE id='$id'";
$result = $connection-> query($sql_update);
}
?>
<body onload="JSalert()">
<script type="text/javascript">
function JSalert(){
  Swal({
    position: 'center',
    type: 'success',
    title: 'Profile has been updated successfully',
    showConfirmButton: false,
    timer: 1500
  }).then(function() {
    window.location = "adminlist.php";
});
}
</script>
</body>
</html>
