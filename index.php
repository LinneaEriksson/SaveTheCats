<?php

require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/functions.php';

?>

<body><?php


      ?>
  <h1><?php echo $Title ?></h1>
  <div class="container">
    <div class="content">
      <img class="headPicture" src="/Pictures/Cat2.jpg" alt="En bild på en svart och en ljushårig katt som sitter nära vaarandra och kollar åt sidan båda två.">


      <article class="aboutUs">
        <h2>Om oss</h2>
        <br>
        <p class="aboutUsText">
          <?php echo $Title ?> är en ideell förening som arbetar med att förbättra livet och hitta nya hem åt hemlösa katter. Enligt oss är alla katters liv värda lika mycket och avlivning kommer i absolut sista hand. På grund utav detta är våra veterinärkostnader höga och vi tar tacksamt emot gåvor via swish eller bank-giro.
          <br>
          <br>
          Just nu finns det <?php echo $countCats; ?> katter hos oss för omplacering. Du kan läsa mer om katterna nedanför.
        </p>
      </article>
      <?php






      foreach ($cats as $cat) :
        $image = $cat['img'];
        $altText = $cat['alt'];
        $name = $cat['namn'];
        $rase = $cat['ras'];
        $age = $cat['ålder'];
        $informations = $cat['information'];
        $castration = $cat['kastrerad']

      ?>
        <div class="information">


          <img src=" <?php echo "$image";
                      ?>" alt=" <?php echo $altText; ?> ">
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


        </div>
      <?php
      endforeach; ?>



      <p class="Quote"><?php echo "$InformationsAboutSavedAnimals Se bilder på några utav katterna nedan:"; ?></p>



      <?php

      foreach ($adoptedCats as $adopted) :
        $nameAdopted = $adopted['namn'];
        $picture = $adopted['img'];
        $altAdopted = $adopted['alt'];

      ?> <div class="adoptedCat"><img class="adoptedCatPictures" src=" <?php
                                                                        echo "$picture"; ?>" alt=" <?php echo $altAdopted; ?> ">
          <p class="informationFatText"><?php
                                        echo $nameAdopted;
                                        ?>
          </p>
        </div>
      <?php

      endforeach;
      ?>

      <p class="Quote">
        <?php
        echo $quotes[$randomQuote[0]] . "\n";
        ?>
      </p>


      <img class="headPicture" src="/Pictures/Cat1.jpg" alt="Bilden är i svartvitt på en svart katt som sitter i en gränd. Katten ser ensam ut.">


    </div>
  </div>
</body>

<?php

require __DIR__ . '/footer.php';

?>