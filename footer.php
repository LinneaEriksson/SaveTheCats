<footer>


  <div class="footer">
    <p class="footerText">
      <?php echo $InformationsAboutSavedAnimals ?><br>
      <?php echo $Title ?> finns i följande städer:
      <?php
      foreach ($cities as $city) {
        echo "$city ";
      };
      ?>
      <br>
      <?php
      echo "Sidan uppdaterades senast: $date";
      ?>
    </p>
  </div>


</footer>