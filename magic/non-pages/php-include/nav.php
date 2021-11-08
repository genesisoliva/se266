<nav>
        <div id="logo"><a href="<?php echo $upFolderPlaceholder ?>index.php"><img src="<?php echo $upFolderPlaceholder;?>images/logo/logo.png" alt="Your Logo"><span class="logoLink">Your Tagline</span></a></div>
            <label for="drop" class="toggle">Show/Hide Menu</label>
            <input type="checkbox" id="drop" />
            <ul class="menu">
                
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'index.php"' . ' class="'.$activePageArrayTop[$ROOT_DIRECTORY].'"'; ?>>Home</a></li>
                <li>
                    <label for="drop-2" class="toggle">Portfolio +</label>
                    <a href="#" <?php echo 'class="'.$activePageArrayTop['portfolio'].'"'; ?>>Portfolio</a>

                    <input type="checkbox" id="drop-2"/>
                    <ul>
                        <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/portfolio_1/index.php"' . ' class="'.$activePageArrayDropDown1['portfolio_1'].'"'; ?>>Portfolio 1</a></li>
                        <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/portfolio_2/index.php"' . ' class="'.$activePageArrayDropDown1['portfolio_2'].'"'; ?>>Portfolio 2</a></li>
                        <li>
                            <label for="drop-3" class="toggle">Examples +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['examples'].'"'; ?>>Examples</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/examples/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

<li>
                    <label for="drop-2" class="toggle">Portfolio +</label>
                    <a href="#" <?php echo 'class="'.$activePageArrayTop['portfolio'].'"'; ?>>Portfolio</a>

                    <input type="checkbox" id="drop-2"/>
                    <ul>
                        <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/portfolio_1/index.php"' . ' class="'.$activePageArrayDropDown1['portfolio_1'].'"'; ?>>Portfolio 1</a></li>
                        <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/portfolio_2/index.php"' . ' class="'.$activePageArrayDropDown1['portfolio_2'].'"'; ?>>Portfolio 2</a></li>
                        <li>
                            <label for="drop-3" class="toggle">Examples +</label>
                            <a href="#" <?php echo 'class="'.$activePageArrayDropDown1['examples'].'"'; ?>>Examples</a>
                            <input type="checkbox" id="drop-3"/>
                            <ul>
                                <li><a <?php echo 'href="'.$upFolderPlaceholder.'portfolio/examples/example_1/index.php"' . ' class="'.$activePageArrayDropDown2['example_1'].'"'; ?>>Example 1</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                
                <li>
                    <label for="drop-4" class="toggle">Tests +</label>
                    <a href="#" <?php echo 'class="'.$activePageArrayTop['tests'].'"'; ?>>Tests</a>
                    <input type="checkbox" id="drop-4"/>
                    <ul>
                        <li><a <?php echo 'href="'.$upFolderPlaceholder.'tests/test_1/index.php"' . ' class="'.$activePageArrayDropDown1['test_1'].'"'; ?>>Test 1</a></li>
                        <li><a <?php echo 'href="'.$upFolderPlaceholder.'tests/test_2/index.php"' . ' class="'.$activePageArrayDropDown1['test_2'].'"'; ?>>Test 2</a></li>
                    </ul>
                </li>

                <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"' . ' class="'.$activePageArrayTop['about'].'"'; ?>>About</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/heroku/index.php"' . ' class="'.$activePageArrayTop['heroku'].'"'; ?>>Heroku</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/php/index.php"' . ' class="'.$activePageArrayTop['php'].'"'; ?>>PHP</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'resources/git/index.php"' . ' class="'.$activePageArrayTop['git'].'"'; ?>>Git</a></li>
                <li><a <?php echo 'href="'.$upFolderPlaceholder.'about/index.php"' . ' class="'.$activePageArrayTop['about'].'"'; ?>>Repo</a></li>
            </ul>
    </nav>

