<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty</title>
    <link rel="stylesheet" href="./css/demo.css">
    <link rel="stylesheet" href="./cs/.css">
    <link rel="stylesheet" href="./alumnireg/.css">
    <style>
        .body-container {
            margin: 2rem 12rem 0rem 12rem;
        }
    </style>
</head>

<body>
    <?php
    include('./header.php')
    ?>
    <div class="body-container">
        <form action="addstd1.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control">
            </div>
            <div class="mb-3">
                <label for="branch" class="form-label">Branch</label>
                <input type="text" name="branch" class="form-control">
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" name="year" class="form-control">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Permanent Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" name="photo" class="form-control" accept=".jpg,.jpeg,.png">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>

</html>