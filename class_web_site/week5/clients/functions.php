<?php
    function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }
    function calcAge($birthday)
    {
        $today = new DateTime('today');
        return date_diff(date_create($birthday), $today);
    }