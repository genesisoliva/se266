<?php
    //title, due, assignedTo, completed
    $task = [
        "title" => "Laundry",
        "due" => "Tommorow",
        "assignedTo" => "Joe",
        "completed" => false
    ];

    //added so submission can have true and false case displayed
    $task2 = [
        "title" => "Homework",
        "due" => "Today",
        "assignedTo" => "Joe",
        "completed" => true
    ];

    require 'index.view.php';
?>