<?php

require __DIR__ . '/header.html';
require __DIR__ . '/arrays.php';

?>

<body>

  <div class="container">
    <div class="content">
      <img class="HeadPicture" src="/Pictures/Cat1.jpg">
      <h1>Hemlösa katter</h1>



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

require __DIR__ . '/footer.html';
