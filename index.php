<?php

require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';

?>

<body>

  <div class="container">
    <div class="content">
      <h1>Hemlösa katter</h1>
      <img class="headPicture" src="/Pictures/Cat1.jpg">






      <?php foreach ($cats as $cat) :
        $image = $cat['img'];
        $name = $cat['Namn'];
        $rase = $cat['Ras'];
        $age = $cat['Ålder'];
        $informations = $cat['Information'];

      ?>
        <p class="information">


          <img src=" <?php echo "$image";
                      ?>">
          <?php echo "Namn: $name";
          ?><br>
          <?php echo "Ras: $rase";
          ?><br>
          <?php echo "Ålder: $age";
          ?><br>
          <?php echo "Information: $informations";
          ?><br>


        </p><?php
          endforeach; ?>

    </div>
  </div>
</body>
<?php
$date = date("d-y-m");

echo $date;

$years =  date('Y', mktime(5, 1, 1, date("m") - 2, date("d") - 23, date("Y") - 2005));
$years = $years - 2000;
$months = date('n', mktime(5, 1, 1, date("m") - 2, date("d") - 23, date("Y") - 2005));
$days =  date('j', mktime(5, 1, 1, date("m") - 2, date("d") - 23, date("Y") - 2005));

echo 'Antal år: ' . $years  . "<br>\n";
echo 'Antal månader: ' . $months . "<br>\n";
echo 'Antal dagar: ' . $days . "<br>\n";

require __DIR__ . '/footer.php';
