<?php

require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';


?>

<body><?php


      ?>
  <h1>Hemlösa katter</h1>
  <div class="container">
    <div class="content">
      <img class="headPicture" src="/Pictures/Cat2.jpg">


      <p class="aboutUs">Hemlösa katter är en ideell förening som arbetar med att förbättra livet och hitta nya hem åt hemlösa katter. Enligt oss är alla katters liv värda lika mycket och avlivning kommer i absolut sista hand. På grund utav detta är våra veterinärkostnader höga och vi tar tacksamt emot gåvor via swish eller bank-giro.


        <br>
        <br>
        Just nu finns det <?php echo $countCats; ?> katter hos oss för omplacering. Du kan läsa mer om katterna nedanför.


      </p>
      <?php






      foreach ($cats as $cat) :
        $image = $cat['img'];
        $name = $cat['namn'];
        $rase = $cat['ras'];
        $age = $cat['ålder'];
        $informations = $cat['information'];
        $castration = $cat['kastrerad']

      ?>
        <div class="information">


          <img src=" <?php echo "$image";
                      ?>">
          <p class="informationFatText"><?php echo $name;
                                        ?></p><br>
          <?php echo "Ras: $rase";
          ?><br>
          <?php echo "Ålder: $age år";
          ?><br>
          <?php echo "Information: $informations";
          ?><br><?php

                if ($castration === 'ja') {
                  echo "$name är kastrerad";
                } else {
                  echo "$name är inte kastrerad";
                }; ?>


        </div><?php
            endforeach; ?>
      <p class="Quote"><?php echo "$InformationsAboutSavedAnimals Se bilder på några utav katterna nedan:"; ?>

      </p>

      <?php

      foreach ($adoptedCats as $adopted) :
        $nameAdopted = $adopted['namn'];
        $picture = $adopted['img'];

      ?> <div class="adoptedCat"><img class="adoptedCatPictures" src=" <?php
                                                                        echo "$picture"; ?>">
          <p class="informationFatText"><?php
                                        echo $nameAdopted;
                                        ?></p>
        </div><?php

            endforeach;
              ?>

      <p class="Quote">
        <?php
        echo $quotes[$randomQuote[0]] . "\n";
        ?>
      </p>
      <img class="headPicture" src="/Pictures/Cat1.jpg">


    </div>
  </div>
</body>
<?php


require __DIR__ . '/footer.php';
?>