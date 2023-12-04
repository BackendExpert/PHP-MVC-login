<?php 


    function ViewError($name = '', $msg = '', $class = 'alert alert-warning alert-dismissible fade show'){
        if(!empty($name)){
            if(!empty($msg) && empty($_SESSION[$name])){
                $_SESSION[$name] = $msg;
                $_SESSION[$name.'_class'] = $class;
            }

            elseif(empty($msg) && !empty($_SESSION[$name])){
                $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : $class;
                echo "<div class='".$class."' role='alert'>
            } 
        }
    }