# solution 1

<?php 
const COLORS = [
        'black',
        'brown',
        'red',
        'orange',
        'yellow',
        'green',
        'blue',
        'violet',
        'grey',
        'white',
    ];

function colorCode($color) {
    for ($i = 0; $i < count(COLORS); $i++) {
        if(COLORS[$i] == $color) {
            return $i;
        } else {
            false;
        }
    }
}
echo colorCode('yellow');
?>


# solution 2

<?php
    $colors = [
        'black' => 0,
        'brown' => 1,
        'red' => 2,
        'orange' => 3,
        'yellow' => 4,
        'green' => 5,
        'blue' => 6,
        'violet' => 7,
        'grey' => 8,
        'white' => 9,
    ];

    foreach($colors as $number => $color) {
        echo "$number => $color \n";
    }
?>


# solution 3

<?php
function colorCodeTwo($color) {
    if($color == 'black') {
        return 0;
    } else if ($color == 'brown') {
        return 1;
    } else if ($color == 'red') {
        return 2;
    } else if ($color == 'orange') {
        return 3;
    } else if ($color == 'yellow') {
        return 4;
    } else if ($color == 'green') {
        return 5;
    } else if ($color == 'blue') {
        return 6;
    } else if ($color == 'violet') {
        return 7;
    } else if ($color == 'grey') {
        return 8;
    } else if ($color === 'white') {
        return 9;
    }
}
echo colorCodeTwo('black');
?> 