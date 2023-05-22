<?php
 // first get data from user by form
 $nameGivenByTheUser = $_POST["dataInput"];

// now split the name given by user 
 $breakTheName = explode(" ",$nameGivenByTheUser);// if you want to check Use "var_dump()"

 var_dump($breakTheName);


 // here we get the first name by first index
 $firstNameOfUser = $breakTheName[0];
 $firstName=$firstNameOfUser[0];

 echo $firstNameOfUser."<br>";// to check value of first name 

 
for($i=1; $i<count($breakTheName)-1; $i++){

    //when got the second index of i , than store the middle name on $midName
    $midNameOfUser = $breakTheName[$i];
    $middleName=$midNameOfUser[0];

    // here we get the middle name 
    echo $midNameOfUser."<br>";// to check value of Middle name 
}


 $lastNameOfUser = $breakTheName[count($breakTheName)-1];// count of the index - 1 which is the last position of name


 echo $lastNameOfUser."<br>";// to check value of Last name 

// out and final result of given value by user
 $FinalNamePrint = $firstName.".".$middleName.".".$lastNameOfUser;
 echo $FinalNamePrint."<br>";


if($firstName!==null && $middleName==null && $lastNameOfUser==null){
    $FinalNamePrint ="hii"." ".$firstName." "."please enter your full name";
    echo $FinalNamePrint."<br>";
}

 // if you want to go on previous page
 echo "go back to page"." "."<button><a href='third_webpage.php'>back</a></button>";

 ?>
