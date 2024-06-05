<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <h1 class="display-1">Week 5</h1>
    <div class="mx-5 d-flex justify-content-center">
        <div class="row">
            <h2 class="display-2">Colors from Database</h1>
                <?php

                $connect = mysqli_connect('localhost', 'root', '', 'Http5225Week5-0NA');
                if (!$connect) {
                    echo 'Error Code: ' . mysqli_connect_errno();
                    echo 'Error Code: ' . mysqli_connect_error();
                }
                $query = 'SELECT `Name`,`Hex` FROM colors';
                $result = mysqli_query($connect, $query);
                if (!$result) {
                    echo 'Error Message ' . mysqli_error($connect);
                    exit;
                } else {
                    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($rows as $row) {
                        echo
                        '<div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">' . $row["Name"] . '</h5>
                                    <p class="card-text">Hex: ' . $row["Hex"] . '</p>
                                    <div style="width: 100%; height: 50px; background-color: ' . $row["Hex"] . '"></div>
                                </div>
                            </div>
                        </div>';
                    }
                }
                ?>
        </div>
    </div>

</body>

</html>