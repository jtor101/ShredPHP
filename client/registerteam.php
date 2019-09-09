<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body class="container-fluid" id="nslbody">
    <?php include("inc/header.php"); ?>
    <?php include("inc/nav.php"); ?>
    
    <main class="row">
      <!-- First Content Area -->
      <section id="registerArea1" class="col-10 offset-1 my-3 p-2 text-center">
        <h1>Register A Team</h1>
        <p>
          Add your band using this form. Please ensure all fields are filled
          out. You may click Submit to finalize the form, or Cancel to return to
          the Home page.
        </p>
      </section>

      <!-- Begin Register Team form -->
      <form
        name="registerTeam"
        id="registerTeam"
        class="col-8 offset-2 py-3 my-3"
        action="divisions.php"
      >
        <!-- Team Name -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="teamName">Team Name: </label>
            <input
              type="text"
              class="form-control"
              id="teamName"
              name="teamname"
              required
            />
            <div id="teamNameError" class="errorMsg mt-2"></div>
          </div>

          <!-- Team League -->
          <div class="form-group col-6 px-5">
            <label for="teamLeague">League:</label>
            <select class="form-control" id="teamLeague" name="leaguecode">
            </select>
          </div>
        </div>

        <!-- Manager Name -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="managerName">Manager Name: </label>
            <input
              type="text"
              class="form-control"
              id="managerName"
              name="managername"
              required
            />
            <div id="managerNameError" class="errorMsg mt-2"></div>
          </div>

          <!-- Manager Phone -->
          <div class="form-group col-6 px-5">
            <label for="managerPhone">Manager Phone:</label>
            <input
              type="tel"
              class="form-control"
              id="managerPhone"
              name="managerphone"
              required
            />
            <div id="managerPhoneError" class="errorMsg mt-2"></div>
          </div>
        </div>

        <!-- Minimum Age -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="minAge">Minimum Age:</label>
            <input
              type="number"
              class="form-control"
              id="minAge"
              name="minmemberage"
              min="18"
              required
            />
            <div id="minAgeError" class="errorMsg mt-2"></div>
          </div>

          <!-- Manager Email -->
          <div class="form-group col-6 px-5">
            <label for="maxAge">Manager Email: </label>
            <input
              type="email"
              class="form-control"
              id="emailAddr"
              name="manageremail"
              required
            />
            <div id="managerEmailError" class="errorMsg mt-2"></div>
          </div>
        </div>

        <!-- Maximum Age -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="maxAge">Maximum Age: </label>
            <input
              type="number"
              class="form-control"
              id="maxAge"
              name="maxmemberage"
              required
            />
            <div id="maxAgeError" class="errorMsg mt-2"></div>
          </div>

          <!-- Maximum Team Members -->
          <div class="form-group col-6 px-5">
            <label for="maxTeamMembers">Maximum Team Members:</label>
            <select
              class="form-control"
              id="maxTeamMembers"
              name="maxteammembers"
            >
              <option value="3">3 members</option>
              <option value="4">4 members</option>
              <option value="5">5 members</option>
              <option value="6">6 members</option>
              <option value="7">7 members</option>
              <option value="8">8 members</option>
            </select>
          </div>
        </div>

        <!-- Team Gender -->
        <div class="row">
          <div class="form-group col-6 offset-3 px-5">
            <label for="teamGender">Team Gender: </label>
            <select class="form-control" id="teamGender" name="teamgender">
              <option value="Any">Any</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
        </div>

        <!-- Cancel button -->
        <a class="btn btn-danger mt-3" id="cancelBtn" href="index.php">
          Cancel
        </a>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success mt-3" id="submitBtn">
          Submit
        </button>
      </form>
      <!-- End Form -->
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/include.php"); ?>
    <script src="scripts/registerteam.min.js"></script>
</body>
</html>