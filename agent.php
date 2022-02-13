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
$agent =  $_REQUEST['agent'];
$sql_delete ="UPDATE participants SET agent='$agent' WHERE id='$id'";
$result = $connection-> query($sql_delete);
}
?>
<body onload="JSalert()">
<script type="text/javascript">
function JSalert(){
  Swal({
    position: 'center',
    type: 'success',
    title: 'The Agent has been Assingned',
    showConfirmButton: false,
    timer: 1500
  }).then(function() {
    window.location = "assign_agent.php";
});
}
</script>
</body>
</html>
