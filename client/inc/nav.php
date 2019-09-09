<nav>
      <ul class="nav justify-content-center" id="navlist">
        <li class="nav-item" id="navhome">
          <a class="nav-link text-reset" href="index.php">Home</a>
        </li>
        <li class="nav-item" id="nav1">
          <a class="nav-link text-reset" href="divisions.php"
            >View Divisions</a
          >
        </li>
        <li class="nav-item" id="nav2">
          <a class="nav-link text-reset" href="registerteam.php"
            >Register Band</a
          >
        </li>
        <li class="nav-item dropdown" id="nav3">
          <!-- Theme Picker -->
          <a
            class="nav-link dropdown-toggle text-reset"
            data-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="true"
            aria-expanded="false"
            >Theme Settings</a
          >
          <div class="dropdown-menu px-3">
            <!-- Light Theme -->
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="themeRadios"
                id="lightRadio"
                value="lightTheme"
              />
              <label
                class="form-check-label"
                for="lightRadio"
                id="lightRadioLabel"
              >
                Light theme
              </label>
            </div>
            <!-- Dark Theme -->
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="themeRadios"
                id="darkRadio"
                value="darkTheme"
              />
              <label
                class="form-check-label"
                for="darkRadio"
                id="darkRadioLabel"
              >
                Dark theme
              </label>
            </div>
          </div>
        </li>
      </ul>
    </nav>