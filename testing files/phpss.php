<?php

session_start();
require '../connect.php';

// $mod_price = mysqli_query($con, "SELECT MODEL_PRICE FROM sheet1");

// $mod_price_arr = mysqli_fetch_array($mod_price);

// echo $mod_price_arr;
// var_dump($mod_price_arr);

// while($mod_price_arr){
//     echo $mod_price_arr['model_price'];
//     echo "\n";
// }


$sql = "SELECT * FROM sheet2";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
$date = $row['DATE'];
$monthly = date('F', strtotime($date));
$full = $monthly;

foreach($query as $data){
    $month = $data['DATE'];
    $amount = $data['MODEL_PRICE'];
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php spreadsheet</title>

    <!-- jQuery dataTable cdns -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="../adminpanel/DataTables/datatables.js"></script>
    <script src="../adminpanel/DataTables/Select-1.3.4/js/select.dataTables.min.js"></script>
    <link rel="stylesheet" href="../adminpanel/DataTables/datatables.min.css">
    <link rel="stylesheet" href="../adminpanel/DataTables/DataTables-1.11.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha512-Hqe3s+yLpqaBbXM6VA0cnj/T56ii5YjNrMT9v+us11Q81L0wzUG0jEMNECtugqNu2Uq5MSttCg0p4KK0kCPVaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = [
           <?php echo json_encode($month); ?>
        ];

        const data = {
            labels: labels,
            datasets: [{
                label: 'My First dataset',
                backgroundColor: 'rgb(255, 99, 132)',
                borderColor: 'rgb(255, 99, 132)',
                data: [
                    <?php echo json_encode($amount);?>
                ],
            }]
        };

        const config = {
            type: 'line',
            data: data,
            options: {
                scales: {
                    beginAtZero: true
                }
            }
        };
    </script>



    <style>
        .table-container {
            width: 1100px;
            height: 550px;
            padding: 10px;
            outline: 4px solid red;
            margin: 12px auto;
        }
    </style>
</head>

<body>


    <!-- <div class="container">
        <div class="row">
            <select id='gMonth2' onchange="show_month()">
                <option value=''>--Select Month--</option>
                <option selected value='1'>Janaury</option>
                <option value='2'>February</option>
                <option value='3'>March</option>
                <option value='4'>April</option>
                <option value='5'>May</option>
                <option value='6'>June</option>
                <option value='7'>July</option>
                <option value='8'>August</option>
                <option value='9'>September</option>
                <option value='10'>October</option>
                <option value='11'>November</option>
                <option value='12'>December</option>
            </select>

            <input type="date" name="" id="">
        </div>
    </div> -->



    <div style="width: 500px;">
        <canvas id="myChart"></canvas>
    </div>




    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <h5 class="mb-3">Import Data from Excel(CSV, xls, xlsx) file.</h5>
                <hr>

                <?php
                if (isset($_SESSION['status'])) {
                    echo "<h4>" . $_SESSION['status'] . "</h4>";
                    unset($_SESSION['status']);
                }
                ?>

                <form action="code.php" method="post" enctype="multipart/form-data">
                    <div class="card card-body shadow">
                        <div class="row">
                            <div class="col-md-2 my-auto">
                                <h5>Select File</h5>
                            </div>
                            <div class="col-md-4">
                                <input type="file" name="import_file" id="" class="form-control" multiple />
                            </div>
                            <div class="col-md-4">
                                <button type="submit" name="import_file_btn" class="btn btn-primary">Upload/Import</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <div class="container mt-3 table-container">
        <table id="alumni" class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>DATE</th>
                    <th>DISTRICT</th>
                    <th>COMMUDITY</th>
                    <th>ARRIVAL</th>
                    <th>MIN PRICE</th>
                    <th>MAX PRICE</th>
                    <th>MODEL PRICE</th>
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $result = mysqli_query($con, "SELECT * FROM sheet1");
                while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["DATE"]; ?></td>
                        <td> <?php echo $row["DISTRICT"]; ?> </td>
                        <td> <?php echo $row["COMUDITY"]; ?> </td>
                        <td> <?php echo $row["ARIVAL"]; ?> </td>
                        <td> <?php echo $row["MIN PRICE"] ?> </td>
                        <td> <?php echo $row["MAX PRICE"]; ?> </td>
                        <td> <?php echo $row["MODEL_PRICE"] ?> </td>
                        <td class="actions">
                            <!-- <button type="button" class="edit editbtn" data-toggle="modal"></button>
                            <button type="button" class="delete deletebtn" value="<?php echo $row["DATE"]; ?>"></button> -->
                        </td>

                    </tr>
                <?php
                };
                ?>
            </tbody>
        </table>
    </div>


    <script>
        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>




    <script>
        $(document).ready(function() {
            $('#alumni').DataTable();
        });
    </script>
</body>

</html>