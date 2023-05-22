<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Word </title>
</head>

<body>

<h1 style="color:red;text-align:center;">Match word </h1>
    <div style="border: black solid ;padding:20px">
        <form action="" method="post" style="text-align: center;">
        <input type="text" style="font-size: 50px;" name="dataInput" placeholder="Enter Value"><br><br>
        <input type="text" style="font-size: 50px;" name="checkWord" placeholder="Enter the word"><br><br>
        <input type="submit" style="font-size: 20px;">
        </form>
    </div>

    <?php
 
    $inputData = isset($_POST["dataInput"]) ? $_POST["dataInput"] : ''; // value given by the user
    $inputCheck = isset($_POST["checkWord"]) ? $_POST["checkWord"] : ''; // value given by the user
     


    for ($i = 1; $i < strlen($inputData); $i++) // strlen() get the length of string
    {
        if ($inputData[$i] == $inputCheck) {
            echo "<h2>"."true " . $inputCheck . " is present in the word " . $inputData . " at word " . ($i+1)."<br>"."</h2>";
            
            return;
        }
    }

?>
</body>

</html>