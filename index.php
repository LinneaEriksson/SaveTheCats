<?php

require __DIR__ . '/header.html';


$cats = [
  [
    'Namn' => 'Tasse',
    'Ras' => 'Huskatt',
    'Ålder' => '10år',
    'Information' => 'Tasse är en skygg katt som vill komma till ett hem utan småbarn. Tasse behöver mycket eget utrymme och vill umgås på egna villkor'
  ],
  [
    'Namn' => 'Nasse',
    'Ras' => 'Huskatt',
    'Ålder' => '8år',
    'Information' => 'Nasse är en världens gosigaste katt som vill komma till ett hem med mycket kärlek. Nasse vill vara en innekatt i sitt nya hem.'
  ],
  [
    'Namn' => 'Riffe',
    'Ras' => 'Sibirisk katt',
    'Ålder' => '1år',
    'Information' => 'Här har vi ett riktigt busfrö. Riffe vill bo i ett hem med vuxna ägare då han blir stressad utav barn. Riffe får gärna vara ute när han blir äldre.'
  ],
  [
    'Namn' => 'Chewie',
    'Ras' => 'Huskatt',
    'Ålder' => '2år',
    'Information' => 'Chewie har haft en tuff start på livet. Han är världens snällaste och vill komma til ett hem där han får stå i centrum för att våga ta plats.'
  ]
];

foreach ($cats as $cat) :
  $name = $cat['Namn'];
  $rase = $cat['Ras'];
  $age = $cat['Ålder'];
  $informations = $cat['Information'];


  echo "$name $rase $age $informations";

endforeach;


require __DIR__ . '/footer.html';
