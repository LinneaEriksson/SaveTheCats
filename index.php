<?php

require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';

?>

<body>
  <h1>Hemlösa katter</h1>
  <div class="container">
    <div class="content">
      <img class="headPicture" src="/Pictures/Cat2.jpg">

      <p class="AboutUs">Det här är en text som förklarar lite om organisationen. Hjälp våra katter tack såmycket hejdå.</p>
      <?php






      foreach ($cats as $cat) :
        $image = $cat['img'];
        $name = $cat['namn'];
        $rase = $cat['ras'];
        $age = $cat['ålder'];
        $informations = $cat['information'];
        $castration = $cat['kastrerad']

      ?>
        <p class="information">


          <img src=" <?php echo "$image";
                      ?>">
          <?php echo "Namn: $name";
          ?><br>
          <?php echo "Ras: $rase";
          ?><br>
          <?php echo "Ålder: $age år";
          ?><br>
          <?php echo "Information: $informations";
          ?><br><?php

                if ($castration === true) {
                  echo "$name är kastrerad";
                } else {
                  echo "$name är inte kastrerad";
                }; ?>


        </p><?php
          endforeach; ?>
      <p class="Quote">
        <?php
        echo $quotes[$rand_keys[0]] . "\n";
        ?>
      </p>
      <img class="headPicture" src="/Pictures/Cat1.jpg">
    </div>
  </div>
</body>
<?php


require __DIR__ . '/footer.php';
