<?php

function dayina($day)
{
    $days = [
        "Sunday" => "Ahad",
        "Monday" => "Senin",
        "Tuesday" => "Selasa",
        "Wednesday" => "Rabu",
        "Thursday" => "Kamis",
        "Friday" => "Jumat",
        "Saturday" => "Sabtu",
    ];

    return $days[$day];
}
