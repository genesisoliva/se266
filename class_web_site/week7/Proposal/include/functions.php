<?php

    function isPostRequest() {
        return ( filter_input(INPUT_SERVER, 'REQUEST_METHOD') === 'POST' );
    }

    function itemSize ($num) {

        if ($num == 0) {

    
            return 'Sml';
    
        } else {
    
            return 'Lrg';
    
        }
    };


    function itemPrice ($val) {

        if ($val == 0) {

            return '$2.00';
    
        }else{

            return '$3.00';
        
        }
    };