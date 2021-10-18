<?php

require __DIR__ . '/header.html';
require __DIR__ . '/index.html';


$cats = [
  [
    'img' => '/Pictures/Cat3.jpg',
    'Namn' => 'Tasse',
    'Ras' => 'Huskatt',
    'Ålder' => '10år',
    'Information' => 'Tasse är en skygg katt som vill komma till ett hem utan småbarn. Tasse behöver mycket eget utrymme och vill umgås på egna villkor'
  ],
  [
    'img' => '/Pictures/Cat4.jpg',
    'Namn' => 'Nasse',
    'Ras' => 'Huskatt',
    'Ålder' => '8år',
    'Information' => 'Nasse är en världens gosigaste katt som vill komma till ett hem med mycket kärlek. Nasse vill vara en innekatt i sitt nya hem.'
  ],
  [
    'img' => '/Pictures/Cat5.jpg',
    'Namn' => 'Riffe',
    'Ras' => 'Sibirisk katt/Main Coon',
    'Ålder' => '1år',
    'Information' => 'Här har vi ett riktigt busfrö. Riffe vill bo i ett hem med vuxna ägare då han blir stressad utav barn. Riffe får gärna vara ute när han blir äldre.'
  ],
  [
    'img' => '/Pictures/Cat6.jpg',
    'Namn' => 'Chewie',
    'Ras' => 'Huskatt',
    'Ålder' => '2år',
    'Information' => 'Chewie har haft en tuff start på livet. Han är världens snällaste och vill komma til ett hem där han får stå i centrum för att våga ta plats.'
  ]
];

foreach ($cats as $cat) :
  $image = $cat['img'];
  $name = $cat['Namn'];
  $rase = $cat['Ras'];
  $age = $cat['Ålder'];
  $informations = $cat['Information'];

?>
  <div class="information">
    <div class="GridInformation">

      <br>
      <ul>
        <li><img src=" <?php echo "$image";
                        ?>"></li>
        <li> <?php echo "Namn: $name";
              ?></li>
        <li><?php echo "Ras: $rase";
            ?></li>
        <li><?php echo "Ålder: $age";
            ?></li>
        <li><?php echo "Information: $informations";
            ?></li>
      </ul></br>
    </div>
  </div><?php
      endforeach;


      require __DIR__ . '/footer.html';
