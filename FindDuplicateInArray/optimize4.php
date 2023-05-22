<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find duplicate Task 04</title>
</head>

<body>

    <h1 style="color:red;text-align:center;">Find Duplicate</h1>
    <div style="border: black solid ;padding:20px">
        <form action="" method="post" style="text-align: center;">
            <input type="text" style="font-size: 50px;" name="dataInput" placeholder="Enter value 1 2 3 4 5"><br><br>
            <button type="submit" style="font-size: 30px;">submit</button>
        </form>
    </div>

    <?php

    $nameGivenByTheUser = isset($_POST["dataInput"]) ? $_POST["dataInput"] : '';

    // define a string

    // $arr = str_split($nameGivenByTheUser);
    $arr = explode(" ", $nameGivenByTheUser);


    // $arr = [1, 2, 2, 3, 4, 3, 4];
    $newArr = [];
    $index = 0;

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$i] == $arr[$j]) {
                $newArr[$index] = $arr[$i];
                $index++;
            }
        }
    }
    foreach ($newArr as $v) {
        echo "<h1>" . $v . "</h1>";
    };
    ?>
</body>

</html>