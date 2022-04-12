<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>PHP Crud Application</title>
</head>
<body>
    <?php require_once 'process.php';?>
    <div class="container">
    <?php
    $mysqli= new mysqli('localhost','root','','crud') or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
    //print_r($result);
    //pre_r($result->fetch_assoc()); //fetching and printing data from the database
    ?>
    <div class="row justisy-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <?php
            while($row = $result->fetch_assoc()):?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['location'] ?></td>
                <td></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
    <?php
    function pre_r($array){
        echo'<pre>';
        print_r($array);
        echo'<pre>';
    }
    ?>
    <div class ="container row justify-content-center">
        <form action="" method="post">
            <div class="form-group">
                <label >Name</label>
                <input type="text" name="name" class="form-control" placeholder="Entre you name">
            </div>
            <div class="form-group">
                <label >Location</label>
                <input type="text" name="location" class="form-control" placeholder="Entre your location">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
        </form>
    </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>