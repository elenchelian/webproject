<!DOCTYPE html>

<html lang="en">

<head>
  <script src="package/dist/sweetalert2.js"></script>
  <link rel="stylesheet" href="package/dist/sweetalert2.css">
</head>
<body>
<?php
$connection = mysqli_connect("localhost", "root", "", "insurance");
if(isset($_GET['delete'])){
$id =$_GET['delete'];
$sql_delete ="DELETE FROM admin WHERE id='$id'";
$result = $connection-> query($sql_delete);
}
?>
<body onload="JSalert()">
<script type="text/javascript">
function JSalert(){
  Swal({
    position: 'center',
    type: 'success',
    title: 'Admin Account has been successfully deleted',
    showConfirmButton: false,
    timer: 1500
  }).then(function() {
    window.location = "adminlist.php";
});
}
</script>
</body>
</html>
