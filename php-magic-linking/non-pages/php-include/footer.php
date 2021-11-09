<footer style="margin-top:20px;">
<hr />
<p>          
    <?php       
        $file = basename($_SERVER['PHP_SELF']);
        $mod_date=date("F d Y h:i:s A", filemtime($file));
        echo "<p style='margin-top:0px;'>File last updated $mod_date </p>";
        //date.timezone = "Europe/Athens"
    ?>
    </p>
 <footer>
</body>

</html>