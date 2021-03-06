<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" <?php echo 'href="'.$upFolderPlaceholder.'index.php"' . ' class="'.$activePageArrayTop[$ROOT_DIRECTORY].'"'; ?>>SE266</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li ><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"' . ' class="'.$activePageArrayTop[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Assigments <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a class="trigger right-caret">PHP Introduction</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📚 Wk1 Overview: Getting Started with PHP</a></li>
                        <li><a href="#">📘 Introduction to PHP Basics</a></li>
                        <li><a>Development Environment</a></li>
                        <li><a href="#">🔨 [Windows] Setting Up Your Web Server -- XAMPP</a></li>
                        <li><a href="#">🔨 Code Editor - Visual Studio Code</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/basic_PHP_and_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['task_c'].'"'; ?>>Basic PHP and Arrays</a></li>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/associative_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['task_d'].'"'; ?>>Associative Arrays</a></li>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/booleans_and_conditionals/index.php"' . ' class="'.$activePageArrayDropDown2['task_e'].'"'; ?>>Booleans and Conditionals</a></li>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/functions/index.php"' . ' class="'.$activePageArrayDropDown2['task_f'].'"'; ?>>Functions</a></li>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/fizz_buzz/index.php"' . ' class="'.$activePageArrayDropDown2['task_g'].'"'; ?>>Fizz Buzz</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">Forms and PHP</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📚 Wk2 Overview: Using HTML Forms in PHP</a></li>
                        <li><a href="#">📘 Processing HTML Forms with PHP</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a href="#">🛠 Wk2: Task A: Main Course Page</a></li>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_2/patient_intake_form/index.php"' . ' class="'.$activePageArrayDropDown2['patient_intake_form'].'"'; ?>>🛠 Wk2: Task B: Patient Intake Form</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>



                  <li><a class="trigger right-caret">OOP in PHP</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📘 Object-Oriented Programming in PHP</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                          <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_3/simulate_an_atm/index.php"' . ' class="'.$activePageArrayDropDown2['simulate_an_atm'].'"'; ?>>🛠Simulate an ATM</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">Databases and PHP</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📘 Interacting with Databases in PHP</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a href="#">🛠 Wk4: Task: Patient EHR View/Add</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">CRUD, POST & GET</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📘 CRUD in PHP</a></li>
                        <li><a href="#">📘 More on GET and POST</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a href="#">🛠 Wk5: Task: Patient EHR CRUD</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">Useful Tasks in PHP</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📘 Searching and Sorting</a></li>
                        <li><a href="#">📘 Working with Files in PHP</a></li>
                        <li><a href="#">📘 Sessions, Encryption and Redirection</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_6/school_reference_database/index.php"' . ' class="'.$activePageArrayDropDown2['School_Reference_Database'].'"'; ?>>🛠 Wk6: Task: School Reference Database</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">Project Design & Proposal</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📘 Searching and Sorting</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a href="#">🧰 Final Project: Proposal</a></li>
                            <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_7/patient_search/index.php"' . ' class="'.$activePageArrayDropDown2['School_Reference_Database'].'"'; ?>>🛠 Wk7: Task: Patient Search</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">AJAX, JSON & PHP</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">📘</a></li>
                        <li>
                          <a class="trigger right-caret">GRADED ASSIGNMENTS</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a href="#">🛠 Wk8: </a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">Week 9</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">Lesson A</a></li>
                        <li><a href="#">Help Desk</a></li>
                        <li>
                          <a class="trigger right-caret">Tasks</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Assigment</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li><a class="trigger right-caret">Week 10</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">Lesson A</a></li>
                        <li><a href="#">Help Desk</a></li>
                        <li>
                          <a class="trigger right-caret">Tasks</a>
                          <ul class="dropdown-menu sub-menu">
                            <li><a href="#">Assigment</a></li>
                          </ul>
                        </li>
                      </ul>
                  </li>

                  <li role="separator" class="divider"></li>

                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/heroku/index.php"' . ' class="'.$activePageArrayTop['heroku-resources'].'"'; ?>>Heroku Resources</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/php/index.php"' . ' class="'.$activePageArrayTop['php-resources'].'"'; ?>>PHP Resources</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/git/index.php"' . ' class="'.$activePageArrayTop['git-resources'].'"'; ?>>Git Resources</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/git/index.php"' . ' class="'.$activePageArrayTop['git-resources'].'"'; ?>>My GitHub Repo</a></li>
              </li>
            </ul>
          </div>
        </div>
      </nav>