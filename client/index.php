<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body class="container-fluid" id="nslbody">
    <?php include("inc/header.php"); ?>
    <?php include("inc/nav.php"); ?>
    
    <main class="row">
      <!-- First Content Area -->
      <section id="contentArea1" class="col-10 offset-1 my-3 p-2 text-center">
        <h1>Welcome To Shredfest</h1>
        <img
          src="images/indexsecstage.jpg"
          alt="Stage"
          class="py-2 img-fluid"
        />
      </section>

      <!-- Second Content Area -->
      <section id="contentArea2" class="col-10 offset-1 my-3 p-2 text-center">
        <h1>About Shredfest</h1>
        <p>
          Shredfest is New England's brand new regional Battle Of The Bands
          event, based out of Hartford, CT. We welcome all band archetypes with
          members from all walks of life. You can
          <a href="divisions.php">view our available band divisions</a> using
          this link or the navigation bar above, and you can
          <a href="registerteam.php">register a band</a> via the same methods.
          We hope you join us, be it as a competitor or just to take in some of
          the region's best up-and-coming acts!
        </p>
        <img src="images/indexmidsec.jpg" alt="Guitar" class="py-2 img-fluid" />
      </section>

      <!-- Third Content Area -->
      <section id="contentArea3" class="col-10 offset-1 my-3 p-2 text-center">
        <h1>Interested In Testing Your Mettle At Shredfest?</h1>
        <p>
          For our first ever event, we offer 4 different divisions. 4 Piece Acts
          (4 band member maximum), 6 Piece Acts (6 band member maximum), Femme
          Fatales (all female bands), and Classic Rockers (all members over 50
          years of age). Management is considering offering more divisions for
          next year's event, and we encourage you to interact with us on social
          media with your ideas!
        </p>
        <img
          src="images/indexbottomsec.jpg"
          alt="Guitar"
          class="py-2 img-fluid"
        />
      </section>
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/include.php"); ?>
</body>
</html>