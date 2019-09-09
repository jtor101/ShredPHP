<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body class="container-fluid" id="nslbody">
    <?php include("inc/header.php"); ?>
    <?php include("inc/nav.php"); ?>
    
    <main class="row">
      <!-- First Content Area -->
      <section id="registerArea1" class="col-10 offset-1 my-3 p-2 text-center">
        <h1>Register A Member</h1>
        <p>
          Add any members of your band using this form. Please ensure all fields
          are filled out. You may click Submit to finalize the form, or Cancel
          to return to the Divisions menu.
        </p>
      </section>

      <!-- Begin Register Member form -->
      <form
        name="registerMember"
        id="registerMember"
        class="col-8 offset-2 py-3 my-3"
      >
        <!-- Member Name -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="memberName">Member Name: </label>
            <input
              type="text"
              class="form-control"
              id="memberName"
              name="membername"
              required
            />
            <div id="memberNameError" class="errorMsg mt-2"></div>
          </div>

          <!-- Member Email -->
          <div class="form-group col-6 px-5">
            <label for="memberEmail">Email:</label>
            <input
              type="email"
              class="form-control"
              id="memberEmail"
              name="email"
              required
            />
            <div id="memberEmailError" class="errorMsg mt-2"></div>
          </div>
        </div>

        <!-- Contact Name -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="contactName">Contact Name: </label>
            <input
              type="text"
              class="form-control"
              id="contactName"
              name="contactname"
              required
            />
            <div id="contactNameError" class="errorMsg mt-2"></div>
          </div>

          <!-- Member Age -->
          <div class="form-group col-6 px-5">
            <label for="memberAge">Age:</label>
            <input
              type="number"
              class="form-control"
              id="memberAge"
              name="age"
              min="18"
              required
            />
            <div id="memberAgeError" class="errorMsg mt-2"></div>
          </div>
        </div>

        <!-- Member Gender -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="teamGender">Gender: </label>
            <select class="form-control" id="teamGender" name="gender">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Any">Prefer Not To Say</option>
            </select>
          </div>

          <!-- Member Phone -->
          <div class="form-group col-6 px-5">
            <label for="memberPhone">Phone: </label>
            <input
              type="text"
              class="form-control"
              id="memberPhone"
              name="phone"
              required
            />
            <div id="memberPhoneError" class="errorMsg mt-2"></div>
          </div>
        </div>

        <!-- Cancel button -->
        <a class="btn btn-danger mt-3" id="cancelBtn" href="divisions.php">
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
    <script src="scripts/registermember.min.js"></script>
</body>
</html>