
<?php
include 'nav.php';
include 'DataModel.php';
$model = new DataModel();
$discovers = $model->getDiscovers();
?>
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
        .title {
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<main>
    <div class="container">
        <h1 class="title">Discover</h1>
        <form action="ajax.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" id="description" class="form-control" name="description" placeholder="Enter description">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea class="form-control" id="address" name="address"></textarea>
            </div>
            <button class="btn btn-default" name="save_discover" value="submit">Submit</button>
        </form>
    </div>

    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($discovers as $discover) {
            ?>
            <tr>
                <td><?= $discover["name"] ?></td>
                <td><?= $discover["description"] ?></td>
                <td><?= $discover["address"] ?></td>
                <td>
                    <button class="btn btn-primary transport" data-id="<?= $discover["id"] ?>">Transportation</button>
                    <button class="btn btn-primary">Activities</button>
                    <button class="btn btn-primary">Stores</button>
                    <button class="btn btn-primary">Place Nearby</button>
                </td>
                <?php
                }
                ?>
            </tr>
            </tbody>
        </table>
    </div>
</main>
<script>

    $(".transport").on("click", function () {
        const id = $(this).attr('data-id')
        window.location.href = "transportation.php?id=" + id
    })
</script>
</body>
</html>