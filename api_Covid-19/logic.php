<?php 

    $jsonData = file_get_contents("https://covid19.th-stat.com/api/open/today");
    $data = json_decode($jsonData, true);
    

    $confirmed = $data['Confirmed'];
    $recovered = $data['Recovered'];
    $hospitalized = $data['Hospitalized'];
    $deaths = $data['Deaths'];
    $newconfirmed = $data['NewConfirmed'];
    $newrecovered = $data['NewRecovered'];
    $newhospitalized = $data['NewHospitalized'];
    $newdeaths = $data['NewDeaths'];
    $updateDate = $data['UpdateDate'];


    //sum covid 19 thai
    $jsonDataline = file_get_contents("https://covid19.th-stat.com/api/open/timeline");
    $dataline = json_decode($jsonDataline, true);


?>