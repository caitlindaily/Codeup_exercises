<?php

//Construct a loop that iterates through each book and then each book's keys and values. 
//Have it output the book's title, then list the key value pairs for the data about each book.

//Update your loop to only show books that were written after 1950.

$books = [
    'The Hobbit' => [
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ],
    'Game of Thrones' => [
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ],
    'The Catcher in the Rye' => [
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ],
    'A Tale of Two Cities' => [
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    ]
];



foreach ($books as $titles => $details) {
	echo "$titles was published in " . $details['published'] . " and was written by " . $details['author'] . " and has " .
	$details['pages'] . " pages.\n\n";
}



//1.Create a file called fruit.php 2. Create an array of fruits. 3. Write a loop that prints the fruits. for||foreach	
//4. Modify the fruit array so that you have fruit name => color. Print using foreach. "Apples are red."