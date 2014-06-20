<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'caitlin', 'delinda');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


// Create the query and assign to var
$query = 'CREATE TABLE national_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    location VARCHAR(40) NOT NULL,
    date_established  DATE,
    area_in_acres  INT,
    PRIMARY KEY (id)
)';

// Run query, if there are errors they will be thrown as PDOExceptions
$dbc->exec($query);
