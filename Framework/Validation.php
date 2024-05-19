<?php

namespace Framework;

class Validation {

    /**
     * Validate a string
     * 
     * @param string $value
     * @param int $min
     * @param int $max
     * @return bool 
     */
    public static function string($value,$min = 1,$max){
        if(is_string($value)){
            $value = trim($value);
            $lenght = strlen($value);
            return $lenght>= $min && $lenght <= $max;
        }
        return false;
    } 

    /**
     * Validate an E-mail address
     * 
     * @param string $value
     * @return 
     * 
     */
    public static function email($value){
        $value = trim($value);

        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    /**
     * Match a value against an other
     * @param string $value
     * @return bool
     */

     public static function match($value1,$value2) {
         $value1 = trim($value1);
         $value2 = trim($value2);
     }
}