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
    <div class="container m-5">

        <div class="row">

            <?php

            function getUsers()
            {
                $usersUrl = "https://jsonplaceholder.typicode.com/users";
                // $usersUrl = "./users.json";
                $usersData = file_get_contents($usersUrl);
                return json_decode($usersData, true);
            }

            $fetchUsers = getUsers();
            if (!empty($fetchUsers)) {
                for ($i = 0; $i < count($fetchUsers); $i++) {
                    // echo $fetchUsers[$i]["name"];
                    echo
                    '<div class="col-md-3 p-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $fetchUsers[$i]["name"] . '</h5>
                                        <p class="card-text fst-italic"> Email: <a href="mailto:' . $fetchUsers[$i]["email"] . '">' . $fetchUsers[$i]["email"] . '</a></p>
                                        <p class="card-text"> Address: ' . $fetchUsers[$i]["address"]["street"] . ' ' . $fetchUsers[$i]["address"]["suite"] . ' ' . $fetchUsers[$i]["address"]["city"] . ' ' . $fetchUsers[$i]["address"]["zipcode"] . '</p>
                                        <p class="card-text"> Phone: <a href="tel:' . $fetchUsers[$i]["phone"] . '">' . $fetchUsers[$i]["phone"] . '</a></p>
                                        <p class="card-text"> Company Name: ' . $fetchUsers[$i]["company"]["name"] . ' </p>
                                        <a href="' . $fetchUsers[$i]["website"] . '" class="btn btn-primary">' . $fetchUsers[$i]["website"] . '</a>
                                    </div>
                                </div>
                            </div>';
                    echo "<br>";
                }
            }
            ?>
        </div>
    </div>

    </div>
</body>

</html>