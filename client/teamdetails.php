<!DOCTYPE html>
<html lang="en">

<?php include("inc/head.php"); ?>

<body class="container-fluid" id="nslbody">
    <?php include("inc/header.php"); ?>
    <?php include("inc/nav.php"); ?>
    
    <main>
      <!-- Register New Button -->
      <div class="row">
        <a class="btn btn-info col-2 offset-4 my-4" id="regBtn" href="#"
          >Register New Member</a
        >
        <a
          class="btn btn-primary col-2 offset-5 m-4 px-4"
          id="backBtn"
          href="divisions.php"
        >
          Back To Divisions
        </a>
      </div>
      <!-- Member Details Table -->
      <div class="row">
        <table
          class="table table-hover table-bordered col-8 offset-2"
          id="teamTable"
        >
          <thead>
            <tr>
              <th scope="col">Member Name</th>
              <th scope="col">Email</th>
              <th scope="col">Contact Name</th>
              <th scope="col">Age</th>
              <th scope="col">Gender</th>
              <th scope="col">Phone</th>
              <th scope="col">Member Details</th>
              <th scope="col">Delete?</th>
            </tr>
          </thead>
          <tbody id="teamTBody"></tbody>
        </table>
      </div>

      <!-- Edit Mode div, hides/shows when Edit button/Cancel button clicked. -->
      <div class="row">
        <p class="col-10 offset-1 text-center" id="editMode">EDIT MODE</p>
      </div>

      <!-- Begin Member Info Form, readonly/disabled toggles with Edit/Cancel -->

      <form
        name="memberInfo"
        id="memberInfo"
        class="col-8 offset-2 py-3 my-3"
        action="divisions.php"
      >
        <!-- Member ID -->
        <div class="row">
          <div class="form-group col-4 offset-4 px-5">
            <label for="memberId">Member Id: </label>
            <input
              type="number"
              class="form-control"
              id="memberId"
              name="memberid"
              readonly
            />
          </div>
        </div>
        <!-- Member Name -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="memberName">Member Name: </label>
            <input
              type="text"
              class="form-control"
              id="memberName"
              name="membername"
              readonly
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
              readonly
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
              readonly
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
              readonly
              required
            />
            <div id="memberAgeError" class="errorMsg mt-2"></div>
          </div>
        </div>
        <!-- Member Gender -->
        <div class="row">
          <div class="form-group col-6 px-5">
            <label for="memberGender">Gender:</label>
            <select
              class="form-control"
              id="memberGender"
              name="gender"
              disabled
            >
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
              readonly
              required
            />
            <div id="memberPhoneError" class="errorMsg mt-2"></div>
          </div>
        </div>
        <!-- Edit button -->
        <a class="btn btn-info mt-3" id="editBtn" href="#memberInfo">Edit</a>
        <!-- Cancel button -->
        <a class="btn btn-danger mt-3" id="cancelBtn" href="#memberInfo">
          Cancel
        </a>
        <!-- Submit button -->
        <button type="button" class="btn btn-success mt-3" id="submitBtn">
          Submit
        </button>
      </form>
      <!-- End Form -->
    </main>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/include.php"); ?>
    <script src="scripts/teamdetails.min.js"></script>
</body>
</html>