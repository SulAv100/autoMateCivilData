<?php


function getNepaliDate($date){
    $ndate = NepaliCalender::getInstance()->eng_to_nep($date);
    $ndate = $ndate['year'].'-'.$ndate['month'].'-'.$ndate['date'];
    return $ndate;
}

function getEnglishDate($date){
    $year = date('Y',strtotime($date));
    $month = date('m',strtotime($date));
    $day = date('d',strtotime($date));
    $edate = NepaliCalender::getInstance()->nep_to_eng($year,$month,$day);
    $date = $edate['year'].'-'.$edate['month'].'-'.$edate['date'];
    return $date;
}

include('NepaliCalender.php');

$nep_date = $_POST['initialDate'];

$eng_date = getEnglishDate($nep_date);

$selected_value = $_POST['selectedValue'];

$date = new DateTime($eng_date);

// Add the selected value as days
$date->modify("+$selected_value days");

// Output the new date
$new_date = $date->format('Y-m-d');

$new_nep_date = getNepaliDate($new_date);
echo $new_nep_date;


return($new_nep_date);

