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
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week1/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 2 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week2'].'"'; ?>>Week 2</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week2/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 3 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week3'].'"'; ?>>Week 3</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week3/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 4 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week4'].'"'; ?>>Week 4</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week4/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 5 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week5'].'"'; ?>>Week 5</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week5/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 6 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week6'].'"'; ?>>Week 6</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week6/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 7 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week7'].'"'; ?>>Week 7</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week7/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 8 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week8'].'"'; ?>>Week 8</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week8/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>


                        <li>
                            <label for="drop-3" class="toggle">Week 9 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week9'].'"'; ?>>Week 9</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week9/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                        <li>
                            <label for="drop-3" class="toggle">Week 10 +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['week2'].'"'; ?>>Week 10</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'assignments/week10/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>

                    </ul>
                </li>
            
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'heroku/index.php"' . ' class="'.$activePageArrayTop['heroku-resources'].'"'; ?>>Heroku Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'php/index.php"' . ' class="'.$activePageArrayTop['php-resources'].'"'; ?>>PHP Resources</a></li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'git/index.php"' . ' class="'.$activePageArrayTop['git-resources'].'"'; ?>>Git Resources</a></li>

            </ul>
    </nav>