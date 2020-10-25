<?php 
    function checkInput($value, $type = 'email'){
        switch($type){
            case 'email':
                $pattern = "#^[a-z][0-9]_\.{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,4}){1,2}$#";
            break;
            case 'userName':
                $pattern = "#^[a-z_][a-z0-9_\.\s]{4,31}$#";
            break;
            case 'passWord':
                $pattern = "#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,8}$#";
            break;
        }
        $flag =preg_match($pattern,$value);
        return $flag;
    }
    echo checkInput('abc@gmail.com','email');
?>