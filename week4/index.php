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
    <h1 class="display-1">Week 4</h1>
        <div class="mx-5 d-flex justify-content-center">
            <div class="row">
                <h2 class="display-2">for() loop</h1>
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
                                        <p class="card-text"> Address: ' . $fetchUsers[$i]["address"]["street"] . ', ' . $fetchUsers[$i]["address"]["suite"] . ', ' . $fetchUsers[$i]["address"]["city"] . ', ' . $fetchUsers[$i]["address"]["zipcode"] . '</p>
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
        <div class="mx-5 d-flex justify-content-center">
            <div class="row">
                <h2 class="display-2">foreach() loop</h1>
                    <?php
                    if (!empty($fetchUsers)) {
                        foreach ($fetchUsers as $user) {
                            echo
                            '<div class="col-md-4 p-2">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">' . $user["name"] . '</h5>
                                    <p class="card-text fst-italic"> Email: <a href="mailto:' . $user["email"] . '">' . $user["email"] . '</a></p>
                                    <p class="card-text"> Address: ' . $user["address"]["street"] . ', ' . $user["address"]["suite"] . ', ' . $user["address"]["city"] . ', ' . $user["address"]["zipcode"] . '</p>
                                    <p class="card-text"> Phone: <a href="tel:' . $user["phone"] . '">' . $user["phone"] . '</a></p>
                                    <p class="card-text"> Company Name: ' . $user["company"]["name"] . ' </p>
                                    <a href="' . $user["website"] . '" class="btn btn-primary">' . $user["website"] . '</a>
                                </div>
                            </div>
                        </div>';
                            echo "<br>";
                        }
                    }
                    ?>

            </div>
        </div>

</body>

</html>