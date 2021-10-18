<?php
    include __DIR__ . '\..\include\header.php';
    if (isset($_POST['add_numbers'])) {
        $firstName = filter_input(INPUT_POST, 'first_name');
        $lastName = filter_input(INPUT_POST, 'last_name');
        $married = filter_input(INPUT_POST, 'married');
        //$age = filter_input(INPUT_POST, 'birth_date');
        $bDate = $_POST['birth_date'];
        $ft = filter_input(INPUT_POST, 'ft', FILTER_VALIDATE_INT);
        $inches = filter_input(INPUT_POST, 'inches', FILTER_VALIDATE_INT);
        $weight = filter_input(INPUT_POST, 'weight', FILTER_VALIDATE_FLOAT);
        //$number_1 = filter_input(INPUT_POST, 'number_1', FILTER_VALIDATE_FLOAT);
        //$number_2 = filter_input(INPUT_POST, 'number_2', FILTER_VALIDATE_FLOAT);
        
    } else {
        $number_1 = 12;
        $number_2 = 25;
    }
    $error = "";
    //if (!is_numeric($number_1)) {
     //   $error .= "<li>Number 1 must be a valid number</li>";
    //}
    //if (!is_numeric($number_2)) {
      //  $error .= "<li>Number 2 must be a valid number</li>";
    //}
    if ($firstName == '') {
        $error .= "<li>Please provide first name";
    }
    if ($lastName == '') {
        $error .= "<li>Please provide last name";
    }
    if($married == ''){

        $error .= "<li>Please provide marital status</li>";
    }
    if($bDate == 0)
    {
        $error .= "<li>Please provide valid birth date</li>";
    }
    if($ft == ''  || $inches == ''){

        $error .= "<li>Please provide valid height</li>";
    }
    if($weight == ''){

        $error .= "<li>Please provide valid weight</li>";

    }

    if ($error != "") {
        $error = "<ul>$error</ul>";
    }else {
            
        $bmi = round(bmi($ft, $inches, $weight),1);
        $bmiClass = bmiDescription($bmi);
    }

    function age ($bdate) {
        $date = new DateTime($bdate);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval->y;
    }
    function isDate($dt){
        try {
            $d = new DateTime($dt);
            return(true);
        } catch(Exception $e) {
            return false;
        }
    }
    function bmi ($ft, $inch, $weight){
        //convert to metric
        $kg = $weight / 2.20462;
        $cFt = $ft * 12;
        $height = ($cFt + $inch) * 0.0254; //meters

        $bmi = $kg / ($height * $height);

        return $bmi;
    }
    function bmiDescription ($bmi) {

        if ($bmi < 18.5){

            $classification = 'underweight';

        } elseif ($bmi <= 24.9){

            $classification = 'normal weight';

        } elseif ($bmi <= 29.9){

            $classification = 'overweight';

        } else {

            $classification = 'obese';
        }

        return $classification;
    }
    include './01forms_inc.php';

?>