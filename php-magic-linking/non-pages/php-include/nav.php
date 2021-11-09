    <nav>
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
                    <!-- First Tier Drop Down -->
                    <label for="drop-2" class="toggle">Assignments +</label>
                    <a href="#" <?php echo 'class="'.$activePageArrayTop['assignments'].'"'; ?>>Assignments</a>
                    <input type="checkbox" id="drop-2"/>
                    <ul>
                        <li>
                            <!-- Second Tier Drop Down -->
                            <label for="drop-3" class="toggle">Week 1 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week1'].'"'; ?>>Week 1</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/basic_PHP_and_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Basic PHP and Arrays</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/associative_arrays/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Associative Arrays</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/booleans_and_conditionals/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Booleans and Conditionals</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/functions/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Functions</a></li>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_1/tasks/fizz_buzz/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Fizz Buzz</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 2 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week2'].'"'; ?>>Week 2</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_2/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Patient Intake Form</a></li>
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
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_6/school_reference_database/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>School Reference Database</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 7 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week7'].'"'; ?>>Week 7</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_7/patient_search/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Patient Search</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 8 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week8'].'"'; ?>>Week 8</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_8/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>


                        <li>
                            <label for="drop-3" class="toggle">Week 9 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week9'].'"'; ?>>Week 9</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_9/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 10 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week2'].'"'; ?>>Week 10</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week_10/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/heroku/index.php"' . ' class="'.$activePageArrayTop['heroku-resources'].'"'; ?>>Heroku Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/php/index.php"' . ' class="'.$activePageArrayTop['php-resources'].'"'; ?>>PHP Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/git/index.php"' . ' class="'.$activePageArrayTop['git-resources'].'"'; ?>>Git Resources</a></li>

            </ul>
    </nav>