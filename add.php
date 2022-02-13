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
        $password = $_REQUEST['password'];
        $email =  $_REQUEST['email'];

        $sql = "INSERT INTO admin VALUES ('id','$name','$email','$password')";

        $result = $connection-> query($sql);
        }
        ?>

        <body onload="JSalert()">
        <script type="text/javascript">
        function JSalert(){
          Swal({
            position: 'center',
            type: 'success',
            title: 'Admin account has been successfully created',
            showConfirmButton: false,
            timer: 1500
          }).then(function() {
            window.location = "dashboard.php";
        });
        }
        </script>
        </body>
        </html>
