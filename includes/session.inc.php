<?php 

    if(!isset($_SESSION)){
        session_start();
    }

    function ViewError($name = '', $msg = '', $class = 'alert alert-danger alert-dismissible fade show'){
        if(!empty($name)){
            if(!empty($msg) && empty($_SESSION[$name])){
                $_SESSION[$name] = $msg;
                $_SESSION[$name.'_class'] = $class;
            }

            elseif(empty($msg) && !empty($_SESSION[$name])){
                $class = !empty($_SESSION[$name.'_class']) ? $_SESSION[$name.'_class'] : $class;
                echo "<div class='".$class."' role='alert'>
                        <strong>ERROR : </strong>". $_SESSION[$name] . "
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                unset($_SESSION[$name]);
                unset($_SESSION[$name . '_class']);
            } 
        }
    }

    //function to redirect

    function redirect($location){
        header("location: ".$location);
        exit;
    }