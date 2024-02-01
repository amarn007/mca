
<html>
<head><b><h1><u>sum</u></h1></b></head>
<body>
<form action="" method="GET">
please enter the number:<input type ="text" name='txt'>
<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php

function sumOfDigits($number) {
    $sum = 0;

    // Loop through each digit of the number
    while ($number != 0) {
        // Extract the last digit
        $digit = $number % 10;

        // Add the digit to the sum
        $sum += $digit;

        // Remove the last digit from the number
        $number = (int)($number / 10);
    }

    return $sum;
}

if(isset($_GET['txt'])){

$givenNumber =$_GET['txt'];
$result = sumOfDigits($givenNumber);

echo "The sum of digits of $givenNumber is: $result";

}

?>
