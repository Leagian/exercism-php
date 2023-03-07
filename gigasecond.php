<?php
function from($date) {

    $time = strtotime($date);
    $gigaseconds = pow(10, 9);
    $newTime = $time + $gigaseconds;
        return $newTime;
}
echo from("19:5:13")
?>

<?php
function fromTwo($date) {
    $newDate = date('H:i:s', strtotime($date.' +1000000000 seconds'));
    return $newDate;
}

echo fromTwo("19:5:13");
?>
