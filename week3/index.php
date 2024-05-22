<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 3</title>
</head>

<body>
    <?php
    $currentHour = rand(1, 24);

    echo "Current Hour: ", $currentHour, "<br>";
    
    if ($currentHour >= 6 && $currentHour < 12) echo "Good Morning";
    else if ($currentHour >= 12 && $currentHour < 18) echo "Good Afternoon";
    else if ($currentHour >= 18 && $currentHour < 21) echo "Good Evening";
    else if ($currentHour >= 21 && $currentHour <= 24) echo "Good Night";
    else if ($currentHour > 0 && $currentHour < 6) echo "GO Sleep Its Late Night!";
    
    echo "<br><br>";
    
    $random = rand(1, 100);
    if ($random % 5 == 0 && $random % 3 == 0) echo "FizzBuzz";
    else if ($random % 3 == 0) echo "Fizz";
    else if ($random % 5 == 0) echo "Buzz";
    else echo $random;
    ?>
</body>

</html>