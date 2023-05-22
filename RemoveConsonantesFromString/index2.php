<?php

    $stringByUser = $_POST["dataInput"];
    $newString = "";

    for ($i = 0; $i < strlen($stringByUser); $i++) {
        if ($stringByUser[$i] == 'a' || $stringByUser[$i] == 'e' || $stringByUser[$i] == 'i' || $stringByUser[$i] == 'o' || $stringByUser[$i] == 'u') 
        // here we check every character , if it equal to the 'a','e','i','o','u' than we store in the newString
        {
            $newString .= $stringByUser[$i];//storing value on newString;
        }
    }

    echo "output is: " . $newString."<br>";
    echo "do you want check again"." "."<a href='second_webpage.php'>back</a>"; 
?>

  
