<?php

declare(strict_types=1);



$randomQuote = array_rand($quotes, 2);

// Fetch a random quote from my Quote array each time the page reloads. 




$countCats = (count($cats));

// Counts the number of cats from my cats array. 




$date = date("y-m-d");

// Date function.




function InformationSaved(string $year, string $animals, int $number): string
{
  return "Sedan $year har vi hittat nya hem åt $number $animals.";
}

$InformationsAboutSavedAnimals = InformationSaved('1 januari 2021', 'katter', 53);

// Function to be able to change how many cats that has been saved and other values to the site.




function TheSiteName(string $nameOfCompany): string
{
  return "$nameOfCompany";
}

$Title = TheSiteName('Hemlösa katter');


// Function to write the site name on the website.