<?php

    function validate_fn($POST){
        if(strlen(trim($POST['firstName']))<1){
            return false;
        }else{
            return true;
        }
    }

    function validate_ln($POST){
        if(strlen(trim($POST['lastName']))<1){
            return false;
        }else{
            return true;
        }
    }

    function validate_cp($POST){
        $p = htmlentities($POST['password']);
        $cp = htmlentities($POST['confirmPassword']);
        if(strcmp($p, $cp) == 0){
            return true;
        }else{
            return false;
        }
    }

?>