<?php
  function biodata()
  {
    $name = "Ferdian Dwi Nugroho";
    $age = 19;
    $address = "Gg sawo rt 03 rw 02 no. 48 curug - cimanggis, Depok";
    $hobbies = [
                'Bermain game online Dota 2',
                'Jalan - jalan',
                'Tidur'
              ];
    $is_married = false;
    $schools = array(
              [
                'name' => "MI AL - ISLAM",
                'year_in' => 2006,
                'year_out' => 2012,
                'major' => null
                ],
              [
                'name' => "SMP TARUNA BHAKTI",
                'year_in' => 2012,
                'year_out' => 2015,
                'major' => null
                ],
              [
                'name' => "SMK TARUNA BHAKTI",
                'year_in' => 2015,
                'year_out' => 2018,
                'major' => null
                ]
            );
    $interest_in_coding = true;
    $biodata = [
                'name' => $name,
                'age' => $age,
                'address' => $address,
                'hobbies' => $hobbies,
                'is_married' => $is_married,
                'list_school' => $schools,
                'interest_in_coding' => $interest_in_coding
              ];

    $response = [
      'status' => "OK",
      'biodata' => $biodata,
      "message" => null
    ];
    return $response;
  }
 ?>
