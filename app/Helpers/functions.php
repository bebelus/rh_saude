<?php

if(! function_exists('isEmail')) { 

    function isEmail($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}