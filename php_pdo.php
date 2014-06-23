<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'caitlin', 'delinda');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


// Create the query and assign to var
// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(40) NOT NULL,
//     location VARCHAR(40) NOT NULL,
//     date_established  DATE,
//     area_in_acres  INT,
//     PRIMARY KEY (id)
// )';

// // Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);

$parks = [
    ['name' => 'Acadia','location' => 'Maine', 'date_established' =>  '1919-02-26', 'area_in_acres' => 47389],
    ['name' => 'American Samoa','location' => 'American Samoa', 'date_established' =>  '1988-10-31', 'area_in_acres' => 9000],
    ['name' => 'Arches', 'location' => 'Utah', 'date_established' =>  '1971-11-12', 'area_in_acres' => 76518],
    ['name' => 'Badlands','location' => 'South Dakota', 'date_established' =>  '1978-11-10', 'area_in_acres' => 242755],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_established' =>  '1944-06-12', 'area_in_acres' => 801163],
    ['name' => 'Bisacyne', 'location' => 'Florida', 'date_established' =>  '1980-06-28', 'area_in_acres' => 172924],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_established' =>  '1999-10-21', 'area_in_acres' => 32950],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_established' =>  '1928-02-25', 'area_in_acres' => 35835],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_established' =>  '1964-09-12', 'area_in_acres' => 337597],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_established' =>  '1971-12-18', 'area_in_acres' => 241904]
];

foreach ($parks as $park) {
    $query = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_established']}', '{$park['area_in_acres']}')";

    $dbc->exec($query);

    echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}
