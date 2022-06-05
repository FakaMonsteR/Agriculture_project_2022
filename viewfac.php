<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/cs.css">

    <!-- jQuery dataTable cdns -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./adminpanel/DataTables/datatables.js"></script>
    <script src="./adminpanel/DataTables/Select-1.3.4/js/select.dataTables.min.js"></script>
    <link rel="stylesheet" href="./adminpanel/DataTables/datatables.min.css">
    <link rel="stylesheet" href="./adminpanel/DataTables/DataTables-1.11.5/css/dataTables.dataTables.min.css">

    <title>View Faculties</title>
</head>

<body>

    <?php include("header.php"); ?>

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">View Faculty</h1>
            </div>
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Faculty Table</h3>
                <h4><a style="color: green;" href="addfaculty.php">Add Faculty</a></h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered fac_table display compact hover cell-border" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>    
                                <td>#</td>
                                <td>Image</td>
                                <td>Name</td>
                                <td>Department</td>
                                <td>Year</td>
                                <td>E-mail</td>
                                <td>Phone</td>
                                <td>Address</td>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            require 'connect.php';
                            $result = mysqli_query($con, "SELECT * FROM faculty WHERE status = 'approved'");
                            while ($row = mysqli_fetch_array($result)) {
                                ?>
                                    <tr>
                                        <td><?php echo $row["fac_id"] ; ?></td>
                                        <td><img src="<?php echo './' . $row["photo"]; ?>" alt="image" style="width:50px;"></td>
                                        <td><?php echo $row["name"] ; ?></td>
                                        <td><?php echo $row["dept"] ; ?></td>
                                        <td><?php echo $row["year"] ; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["phone"]; ?></td>
                                        <td><?php echo $row["addr"] ; ?></td>
                                    </tr>
                            <?php        
                            }
                            ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <?php
    include "footer.php";
    ?>

    <script>
        $(document).ready(function() {
            $('.fac_table').DataTable();
        });
    </script>



</body>

</html>