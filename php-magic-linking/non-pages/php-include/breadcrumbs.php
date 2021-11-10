
    <section class="breadcrumbs">
        <?php
            if($folderCount != 0)
            {
                //echo $tempBreadLink = http://localhost/
                $tempBreadLink = $domain . '/';

                for($i = 0; $i < $folderCount; $i++)
                {
                    $tempBreadLink .= $split_url_adjusted[$i] .'/';
                    echo '<a href="' . $tempBreadLink . '" >' . ($i== 0 ? 'Home' : convFolder2PgTitle($split_url_adjusted[$i]) ) .'</a> > ';    
                }

                echo '<strong>' . $pageTitle . '</strong>';
            }
        ?>
    </section>

    <main>
