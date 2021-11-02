<footer style="margin-top:20px;">
<hr />          
    <?php       
        $file = basename($_SERVER['PHP_SELF']);
        $mod_date=date("F d Y h:i:s A", filemtime($file));
        echo "<p style='margin-top:0px;'>File last updated $mod_date </p>";
        //date.timezone = "Europe/Athens"
    ?>
 <footer>
 <script data-src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script defer data-src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
</body>

</html>