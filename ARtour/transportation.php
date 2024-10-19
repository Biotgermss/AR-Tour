<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="app.js" defer></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        .detail {
            width: 100%;
        }
        .detail td,.detail th {
            padding: 10px;
        }
        .detail td {
            text-align: right;
        }
    </style>
</head>
<body>
<?php
include 'nav.php';
include 'DataModel.php';
if(!isset($_GET["id"])) {
    header("location: dimages.php");
}
$id = $_GET["id"];
$model = new DataModel();
$discover = $model->getDiscoverById($id);

?>
<main>
    <div class="container">
        <button class="btn btn-secondary back">Back</button>
        <h1 class="title">Discover</h1>
        <form>
            <table class="detail">
                <tr>
                    <th>Name</th>
                    <td><?= $discover["name"] ?></td>
                </tr>

                <tr>
                    <th>Description</th>
                    <td><?= $discover["description"] ?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?= $discover["address"] ?></td>
                </tr>
            </table>
        </form>
    </div>

    <div class="container">
        <button class="btn btn-primary">Add Transportation</button>
        <H1>Transportation</H1>
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Commuters</td>
                <td>Description</td>
                <td>
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-primary">Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</main>
<script>
    $(".back").on('click', function () {
        window.location.href = "dimages.php"
    })
</script>
</body>
</html>