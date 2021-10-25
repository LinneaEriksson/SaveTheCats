<?php

declare(strict_types=1);

$cats = [
  [
    'img' => '/Pictures/Cat3.jpg',
    'namn' => 'Tasse',
    'ras' => 'Huskatt',
    'ålder' => 10,
    'information' => 'Tasse är en tuff katt som vill komma till ett hem utan småbarn. Tasse behöver mycket eget utrymme och vill umgås på egna villkor.',
    'kastrerad' => 'nej',
  ],
  [
    'img' => '/Pictures/Cat4.jpg',
    'namn' => 'Nasse',
    'ras' => 'Huskatt',
    'ålder' => 8,
    'information' => 'Nasse är en världens gosigaste katt som vill komma till ett hem med mycket kärlek. Nasse vill vara en innekatt i sitt nya hem och behöver hamna i ett hem utan andra katter.',
    'kastrerad' => 'ja',
  ],
  [
    'img' => '/Pictures/Cat5.jpg',
    'namn' => 'Riffe',
    'ras' => 'Sibirisk katt/Main Coon',
    'ålder' => 1,
    'information' => 'Här har vi ett riktigt busfrö. Riffe vill bo i ett hem med vuxna ägare då han blir stressad utav barn. Riffe får gärna vara ute när han blir äldre.',
    'kastrerad' => 'ja',
  ],
  [
    'img' => '/Pictures/Cat6.jpg',
    'namn' => 'Chewie',
    'ras' => 'Huskatt',
    'ålder' => 2,
    'information' => 'Chewie har haft en tuff start på livet. Han är ändå världens snällaste och vill komma till ett hem där han får stå i centrum för att våga ta plats.',
    'kastrerad' => 'nej',
  ],
  [
    'img' => '/Pictures/Cat7.jpg',
    'namn' => 'Moltas',
    'ras' => 'Brittisk korthår',
    'ålder' => 4,
    'information' => 'Är ni på jakt efter en riktig familjekatt så kan ni sluta leta nu. Moltas älskar alla människor han möter och vill komma till en stor familj.',
    'kastrerad' => 'ja',
  ],
  [
    'img' => '/Pictures/Cat8.jpg',
    'namn' => 'Curry',
    'ras' => 'Huskatt',
    'ålder' => 7,
    'information' => 'Curry vill ha en ägare som är hemma mycket. Är du kanske pensionär eller jobbar du hemifrån? Perfekt, då vill Curry göra dig sällskap om dagarna.',
    'kastrerad' => 'ja',
  ],
  [
    'img' => '/Pictures/Cat9.jpg',
    'namn' => 'Max',
    'ras' => 'Huskatt',
    'ålder' => 5,
    'information' => 'Bor du på en bondgård utan stora vägar i närheten så skulle Max kunna vara katten för dig. Max vill kunna gå ut och in som han själv vill.',
    'kastrerad' => 'ja',
  ],
  [
    'img' => '/Pictures/Cat10.jpg',
    'namn' => 'Mr Mjau',
    'ras' => 'Ragdoll',
    'ålder' => 4,
    'information' => 'Mr Mjau är en katt med stor aptit. Han gör vad som helst för mat och kan en del roliga tricks. Mr Mjau vill vara innekatt i sitt nya hem.',
    'kastrerad' => 'ja',
  ]
];

$countCats = (count($cats));



$quotes = [
  '"För tusentals år sedan dyrkades katter som gudar. Detta har katterna aldrig glömt."',
  '"Katter är smartare än hundar. Man kan inte få åtta katter att dra en släde genom snö."',
  '"Att bada en katt kräver styrka, uthållighet, kurage och en katt. Den sista ingrediensen brukar vara svårast att få tag på."',
  '"De som hatar katter återföds som möss i sitt nästa liv"',
];

$randomQuote = array_rand($quotes, 2);


$cities = [
  'Stockholm,',
  'Göteborg,',
  'Malmö,',
  'Helsingborg,',
  'Uppsala,',
  'Lindköping,',
  'Gävle'
];



$adoptedCats = [
  [
    'img' => '/Pictures/Cat11.webp',
    'namn' => 'Lusse',
  ],
  [
    'img' => '/Pictures/Cat12.webp',
    'namn' => 'Mimmi',
  ],
  [
    'img' => '/Pictures/Cat13.webp',
    'namn' => 'Simba',
  ],
  [
    'img' => '/Pictures/Cat14.webp',
    'namn' => 'Missan',
  ],
  [
    'img' => '/Pictures/Cat15.webp',
    'namn' => 'Herr frukt',
  ],
  [
    'img' => '/Pictures/Cat16.webp',
    'namn' => 'Snorklan',
  ],
  [
    'img' => '/Pictures/Cat17.webp',
    'namn' => 'Mumin',
  ],
  [
    'img' => '/Pictures/Cat18.webp',
    'namn' => 'Saffran',
  ],
];



$date = date("y-m-d");



function InformationSaved(string $year, string $animals, int $number): string
{
  return "Sedan $year har vi hittat nya hem åt $number $animals.";
}

$InformationsAboutSavedAnimals = InformationSaved('1 januari 2021', 'katter', 49);


function TheSiteName(string $nameOfCompany): string
{
  return "$nameOfCompany";
}

$Title = TheSiteName('Hemlösa katter');
