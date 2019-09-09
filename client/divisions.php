<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body class="container-fluid" id="nslbody">
    <?php include("inc/header.php"); ?>
    <?php include("inc/nav.php"); ?>
    
    <main class="row">
      <!-- First Content Area -->
      <section id="divisionArea1" class="col-10 offset-1 my-3 p-2 text-center">
        <h1>Our Divisions</h1>
        <p>
          We offer 4 different divisions. 4 Piece Acts (4 band member maximum),
          6 Piece Acts (6 band member maximum), Femme Fatales (all female
          bands), and Classic Rockers (all members over 50 years of age). More
          divisions may be in the works for future iterations of Shredfest. Let
          us know what you'd like to see!
        </p>
      </section>

      <!-- Second Content Area with division select dropdown -->
      <section id="divisionArea2" class="col-8 offset-2 my-3 p-2 text-center">
        <div class="form-group col-8 offset-2">
          <h1><label for="divisionSel">Select a Division</label></h1>
          <select class="form-control" id="divisionSel">
            <option>-- Click here --</option>
          </select>
        </div>
      </section>

      <!-- Third Content Area, changes with division select -->
      <section id="divisionArea3" class="col-8 offset-2 my-3 p-2 text-center">
        <h1 class="py-2" id="cardHeading">Bands</h1>
        <div class="card"></div>
      </section>
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/include.php"); ?>
    <script src="scripts/divisions.min.js"></script>
</body>
</html>