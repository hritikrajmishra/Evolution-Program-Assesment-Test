<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name abbreviations task 03</title>
</head>

<body>

    <h1 style="color:red;text-align:center;">Welcome To PageUp | Name like: H.R.Mishra</h1>
    <div style="border: black solid ;padding:20px">
        <form action="" method="post" style="text-align: center;">
            <input type="text" style="font-size: 50px;" name="dataInput" placeholder="Enter Your Full Name"><br><br>
            <button type="submit" style="font-size: 30px;">submit</button>
        </form>
    </div>

    <?php
    // First, get data from the user by form
    $nameGivenByTheUser = isset($_POST["dataInput"]) ? $_POST["dataInput"] : '';
    echo "<h2>".$nameGivenByTheUser." "."</h2>";

    // Now split the name given by the user 
    $breakTheName = explode(" ", $nameGivenByTheUser);

    if (count($breakTheName) == 1) {
        echo "please enter your full name";
    } else {

        // Here we get the first name by the first index
        $firstNameOfUser = isset($breakTheName[0]) ? $breakTheName[0] : '';
        $firstName = isset($firstNameOfUser[0]) ? $firstNameOfUser[0] : '';


        // Initialize $middleName
        $middleName = '';

        for ($i = 1; $i < count($breakTheName) - 1; $i++) {
            // When we get the second index of i, store the middle name in $midName
            $midNameOfUser = isset($breakTheName[$i]) ? $breakTheName[$i] : '';

            // Here we get the middle name 
            $middleName = isset($midNameOfUser[0]) ? $midNameOfUser[0] : '';
            // echo $midNameOfUser . "<br>"; // to check value of Middle name 
        }

        $lastNameOfUser = isset($breakTheName[count($breakTheName) - 1]) ? $breakTheName[count($breakTheName) - 1] : '';

        if ($firstName !== '' && $middleName !== '' && $lastNameOfUser !== '') {
            // Output and final result of the given value by the user
            $FinalNamePrint = "<h1>" . $firstName . "." . $middleName . "." . $lastNameOfUser . "</h1>";
            echo $FinalNamePrint . "<br>";
        } else if ($firstName !== '' && $lastNameOfUser !== '') {
            $FinalNamePrint2 = "<h1>" . $firstName . "." . $lastNameOfUser . "</h1>";
            echo $FinalNamePrint2 . "<br>";
        }
    }
    ?>




</body>

</html>