<?php
    $fName = $lName = "";
    $married = false;
    $birthDate= null;
    $feet = $inches = $weight = -1;

    function age ($bdate) 
    {
        $date = new DateTime($bdate);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }

    function isDate($dt) 
    {
        try {
            $d = new DateTime($dt);
            return (true);
        } catch(Exception $e) {
            return false;
        }
    }

    function bmi ($ft, $inch, $weight)
    {
        $heightInMeters = (($ft * 12) + $inch) * 0.0254;
        $weightInKilos = $weight / 2.20462;
        return $weightInKilos / ($heightInMeters * $heightInMeters);
    }

    function bmiDescription ($bmi) 
    {
        if($bmi < 18.5)
            return "Underwieght";
        else if($bmi < 25)
            return "Normal Weight";
        else if($bmi < 30)
            return "Overweight";
        else
            return "Obese";
    }

    function isEmpty($str)
    {
        return $str == null || $str == "";
    }

    function isMarriedEmpty()
    {
        return !isset($_POST["married"]);
    }

    function isValidWeight($num)
    {
        return $num != null && $num > 0;
    }

    function isValidHeight($num)
    {
        return $num > -1 && $num < 12;
    }

    function submitClick()
    {
        $flag = true;
        $temp = $_POST["birth_date"];
        if($_POST["birth_date"] != "" && isDate($temp))
            $birthDate = $temp;
        else
            $flag = false;
        $temp = $_POST["first_name"];
        if(!isEmpty($temp))
            $fName = $temp;
        else
            $flag = false;
        $temp = $_POST["last_name"];
        if(!isEmpty($temp))
            $lName = $temp;
        else
            $flag = false;

        if(!isMarriedEmpty())
            $married = $_POST["married"];
        else
            $flag = false;


        $temp = $_POST["ft"];
        if(isValidHeight($temp))
            $feet = $temp;
        else
            $flag = false;
        $temp = $_POST["inches"];
        if(isValidHeight("inches"))
            $inches = $temp;
        else
            $flag = false;
        $temp = $_POST["weight"];
        if(isValidWeight($temp))
            $weight = $temp;
        else
            $flag = false;

        if($flag)
        {
            ?> 
                <script type="text/javascript">
                    document.getElementById('inputForm').style.display = 'none';
                </script>
            <?php

            echo "Name: " . $fName . " ";
            echo $lName . "<br /><br />";
            echo ($married == "no" ? "Not " : "") . "Married<br /><br />";

            echo "Born: " . $birthDate . "<br />";
            echo age($birthDate) . " Years Old<br /><br />";

            echo "Height: ";
            echo $feet . " Feet & ";
            echo $inches . " Inches<br /><br />";

            echo "Weight: " . $weight . " lb<br /><br />";
            
            $tempBMI = round(bmi($feet, $inches, $weight), 2);
            echo "BMI: " . $tempBMI . " || Description: " . bmiDescription($tempBMI);

            echo "<hr />Other Conditions: <br /><br />";
            
            if(isset($_POST["conditions"]))
                foreach($_POST["conditions"] as $value)
                    echo $value . "<br />";
            else
                echo "None";
        }
        else
        {
            echo "There is missing information";
        }
    }