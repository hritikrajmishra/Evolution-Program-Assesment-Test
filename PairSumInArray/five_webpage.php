<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find pairs Task 05</title>
</head>

<body>

    <h1 style="color:red;text-align:center;"> find pairs</h1>
    <div style="border: black solid ;padding:20px">
        <form action="" method="post" style="text-align: center;">
            <input type="text" style="font-size: 50px;" name="dataInput" placeholder="Enter Number Ex.1 2 3 4 6 9 8 5"><br><br>
            <input type="text" style="font-size: 50px;" name="dataInputSum" placeholder="Enter Sum Value"><br><br>
            <button type="submit" style="font-size: 30px;">submit</button>
        </form>
    </div>


    <?php
    // $arr = [4, 4, 5, 1, 2, 1, 5, 6, 3, 2, 4, 6, 1];
    $nameGivenByTheUser = isset($_POST["dataInput"]) ? $_POST["dataInput"] : '';
    echo "<h2>".$nameGivenByTheUser."<h2>";
    $sumGivenByTheUser = isset($_POST["dataInputSum"]) ? $_POST["dataInputSum"] : '';

    // define a string

    // $arr = str_split($nameGivenByTheUser);
    $arr = explode(" ", $nameGivenByTheUser);

    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {
            $sum = $arr[$i] + $arr[$j];
            if ($sum == $sumGivenByTheUser) {
                echo "<h2>".$arr[$i] . "+" . $arr[$j] . " is the pair"."<br>" . "<br>";
            }
        }
    }

    ?>

</body>

</html>