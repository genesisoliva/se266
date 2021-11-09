    <!--<nav>
        <div id="logo">
            <a href="<?php echo $upFolderPlaceholder ?>index.php">
            <img src="<?php echo $upFolderPlaceholder;?>images/logo/logo.png" alt="Your Logo">
            <span class="logoLink">Your Tagline</span>
        </a>
    </div>
            <label for="drop" class="toggle">Show/Hide Menu</label>
            <input type="checkbox" id="drop" />

            <ul class="menu">
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"' . ' class="'.$activePageArrayTop[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
                
                <li>
                    <label for="drop-2" class="toggle">Assignments +</label>
                    <a href="#" <?php echo 'class="'.$activePageArrayTop['assignments'].'"'; ?>>Assignments</a>
                    <input type="checkbox" id="drop-2"/>
                    <ul>
                        <li>
                            <label for="drop-3" class="toggle">Week 1 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week1'].'"'; ?>>Week 1</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/basic_PHP_and_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['task_c'].'"'; ?>>Basic PHP and Arrays</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/associative_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['task_d'].'"'; ?>>Associative Arrays</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/booleans_and_conditionals/index.php"' . ' class="'.$activePageArrayDropDown2['task_e'].'"'; ?>>Booleans and Conditionals</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/functions/index.php"' . ' class="'.$activePageArrayDropDown2['task_f'].'"'; ?>>Functions</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/fizz_buzz/index.php"' . ' class="'.$activePageArrayDropDown2['task_g'].'"'; ?>>Fizz Buzz</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 2 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week2'].'"'; ?>>Week 2</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_2/patient_intake_form/index.php"' . ' class="'.$activePageArrayDropDown2['patient_intake_form'].'"'; ?>>Patient Intake Form</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 3 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week3'].'"'; ?>>Week 3</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_3/simulate_an_atm/index.php"' . ' class="'.$activePageArrayDropDown2['simulate_an_atm'].'"'; ?>>Simulate an Atm</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 4 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week4'].'"'; ?>>Week 4</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_4/patient_ehr_vew_add/index.php"' . ' class="'.$activePageArrayDropDown2['patient_ehr_vew_add'].'"'; ?>>Patient EHR View/Add</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 5 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week5'].'"'; ?>>Week 5</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_5/patient_ehr_crud/index.php"' . ' class="'.$activePageArrayDropDown2['patient_ehr_crud'].'"'; ?>>Patient EHR CRUD</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 6 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week6'].'"'; ?>>Week 6</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_6/school_reference_database/index.php"' . ' class="'.$activePageArrayDropDown2['School_Reference_Database'].'"'; ?>>School Reference Database</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 7 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week7'].'"'; ?>>Week 7</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_7/patient_search/index.php"' . ' class="'.$activePageArrayDropDown2['Patient_Search'].'"'; ?>>Patient Search</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 8 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week8'].'"'; ?>>Week 8</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_8/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_8'].'"'; ?>>Example 8</a></li>
                            </ul>
                        </li>


                        <li>
                            <label for="drop-3" class="toggle">Week 9 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week9'].'"'; ?>>Week 9</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_9/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_9'].'"'; ?>>Example 9</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 10 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week2'].'"'; ?>>Week 10</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_10/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_10'].'"'; ?>>Example 10</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/heroku/index.php"' . ' class="'.$activePageArrayTop['heroku-resources'].'"'; ?>>Heroku Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/php/index.php"' . ' class="'.$activePageArrayTop['php-resources'].'"'; ?>>PHP Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/git/index.php"' . ' class="'.$activePageArrayTop['git-resources'].'"'; ?>>Git Resources</a></li>

            </ul>
    </nav>-->

    <div class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img alt="Logo" src=""></a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"' . ' class="'.$activePageArrayTop[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
        <li class="dropdown menu-large">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Projects <b class="caret"></b> </a>
          <ul class="dropdown-menu megamenu">
            <li class="row">
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
              <div class="col-sm-6 col-md-3">
                <a href="#" class="thumbnail">
                  <img src="http://placehold.it/150x120" />
                </a>
              </div>
            </li>
          </ul>
        </li>
        <li class="dropdown menu-large">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assigments <b class="caret"></b></a>          
          <ul class="dropdown-menu megamenu row">
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Week 1</li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/basic_PHP_and_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['task_c'].'"'; ?>>Basic PHP and Arrays</a></li>
                <li class="disabled"><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/associative_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['task_d'].'"'; ?>>Associative Arrays</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/booleans_and_conditionals/index.php"' . ' class="'.$activePageArrayDropDown2['task_e'].'"'; ?>>Booleans and Conditionals</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/functions/index.php"' . ' class="'.$activePageArrayDropDown2['task_f'].'"'; ?>>Functions</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/fizz_buzz/index.php"' . ' class="'.$activePageArrayDropDown2['task_g'].'"'; ?>>Fizz Buzz</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Week 5</li>
                <li><a href="#">Patient EHR CRUD</a></li>
                <!--<li><a href="#">Raspberry PI</a></li>
                <li><a href="#">VoCore</a></li>
                <li><a href="#">Banana PI</a></li>-->
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Week 2</li>
                <li><a href="#">Main Course Page</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_2/patient_intake_form/index.php"' . ' class="'.$activePageArrayDropDown2['patient_intake_form'].'"'; ?>>Patient Intake Form</a></li>
                <!--<li><a href="#">Nano-Tubes</a></li>
                <li><a href="#">Nano-Wires</a></li>
                <li><a href="#">Materials</a></li>-->
                <li class="divider"></li>
                <li class="dropdown-header">Week 6</li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_6/school_reference_database/index.php"' . ' class="'.$activePageArrayDropDown2['School_Reference_Database'].'"'; ?>>School Reference Database</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Week 3</li>
                <li><a href="#">Simulate an ATM</a></li>
                <!--<li><a href="#">No Software</a></li>
                <li><a href="#">Cloud Computing</a></li>-->
                <li class="divider"></li>
                <li class="dropdown-header">Week 7</li>
                <li><a href="#">Task: Patient Search</a></li>
                <!--<li><a href="#">Hosting Environment</a></li>
                <li><a href="#">Internal IT</a></li>-->
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Week 4</li>
                <li><a href="#">Patient EHR View/Add</a></li>
                <!--<li><a href="#">Java</a></li>
                <li><a href="#">Python</a></li>
                <li><a href="#">Ruby</a></li>
                <li><a href="#">ColdFusion</a></li>
                <li><a href="#">ASP.NET</a></li>
                <li><a href="#">GO</a></li>
                <li><a href="#">Perl</a></li>
                <li><a href="#">Lasso</a></li>-->
                <li class="divider"></li>
                <li class="dropdown-header">Week 8</li>
                <li><a href="#">Data Center</a></li>
                <!--<li><a href="#">Hosting Environment</a></li>
                <li><a href="#">Internal IT</a></li>-->
              </ul>
            </li>
          </ul>
        </li>
        <!--<li class="dropdown menu-large">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>          
          <ul class="dropdown-menu megamenu row">
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Web Design</li>
                <li><a href="#">HTML5</a></li>
                <li class="disabled"><a href="#">CSS</a></li>
                <li><a href="#">JavaScript</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Web Development</li>
                <li><a href="#">Websites</a></li>
                <li><a href="#">Mobile Apps</a></li>
                <li><a href="#">Responsive</a></li>
                <li><a href="#">Web Apps</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Graphic Design</li>
                <li><a href="#">PSD</a></li>
                <li><a href="#">Images</a></li>
                <li><a href="#">Logos</a></li>
                <li><a href="#"></a></li>
                <li><a href="#">Vertical variation</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Database Design</li>
                <li><a href="#">Single button dropdowns</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">UI/UX Design</li>
                <li><a href="#">User Interface</a></li>
                <li><a href="#">User Experience</a></li>
                <li><a href="#">Web Designers</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Digital Marketing</li>
                <li><a href="#">Paid</a></li>
                <li><a href="#">Social</a></li>
                <li><a href="#">Content Marketing</a></li>
              </ul>
            </li>
            <li class="col-sm-3">
              <ul>
                <li class="dropdown-header">Project Management</li>
                <li><a href="#">Initiating</a></li>
                <li><a href="#">Planning</a></li>
                <li><a href="#">Executing</a></li>
                <li><a href="#">Monitoring</a></li>
                <li><a href="#">Controlling</a></li>
                <li><a href="#">Closing</a></li>
                <li><a href="#">PM Systems</a></li>
                <li><a href="#">Best Practices</a></li>
                <li><a href="#">Project Manager</a></li>
              </ul>
            </li>
          </ul>
        </li>-->
        <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/heroku/index.php"' . ' class="'.$activePageArrayTop['heroku-resources'].'"'; ?>>Heroku Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/php/index.php"' . ' class="'.$activePageArrayTop['php-resources'].'"'; ?>>PHP Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/git/index.php"' . ' class="'.$activePageArrayTop['git-resources'].'"'; ?>>Git Resources</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/git/index.php"' . ' class="'.$activePageArrayTop['git-resources'].'"'; ?>>My GitHub Rep</a></li>
      </ul>
    </div>
  </div>
</div>