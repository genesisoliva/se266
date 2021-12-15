<!DOCTYPE html>
<?php if ($_SESSION['lang']) { ?>
<html lang="es" dir="ltr">
<?php } else { ?>
<html lang="en" dir="ltr">
<?php } ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo language("dashboard", $_SESSION['lang']); ?>">
    <meta name="author" content="Genesis J. Oliva">
    <link rel="shortcut icon" href="<?php echo $ico; ?>settings.png">

    <title><?php echo language("dashboard", $_SESSION['lang']); ?></title>

    <link href="<?php echo $css; ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $css; ?>font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>custom.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>datatables.min.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>parsley.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>bootstrap-datepicker3.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>bootstrap-iso.css" rel="stylesheet" />
    <link href="<?php echo $css; ?>bootstrap-datetimepicker.min.css" rel="stylesheet" />

    <?php if (isset($dashboard)) { ?>
        <!--CUSTOM DASHBOARD STYLE-->
        <link href="<?php echo $css; ?>dashboard.css" rel="stylesheet" />
    <?php } ?>

</head>
<body>
