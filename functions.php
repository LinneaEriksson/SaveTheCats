<?php

declare(strict_types=1);

$randomQuote = array_rand($quotes, 2);

// Hämtar ett random quote från min Quote array varje gång man laddar om sidan. 

$countCats = (count($cats));

// Räknar antalet katter från min cats-array.

$date = date("y-m-d");

// Datumfunktion.

function InformationSaved(string $year, string $animals, int $number): string
{
  return "Sedan $year har vi hittat nya hem åt $number $animals.";
}

$InformationsAboutSavedAnimals = InformationSaved('1 januari 2021', 'katter', 53);

// Funktion för att kunna ändra hur många katter som räddats samt andra värden lätt på hemsidan. 




function TheSiteName(string $nameOfCompany): string
{
  return "$nameOfCompany";
}

$Title = TheSiteName('Hemlösa katter');


// Funktion för att skriva ut namnet på hemsidan. 