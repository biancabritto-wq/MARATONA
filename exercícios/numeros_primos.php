<?php
$num = 17;
$primo = true;
if ($num <= 1) {
    $primo = false;
} else {
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $primo = false;
            break;
        }
    }
}
echo $primo ? "$num é primo.\n" : "$num não é primo.\n";
?>