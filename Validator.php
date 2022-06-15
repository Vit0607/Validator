<?php

class Validator
{
    // Является электронной почтой?:
    public function isEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    // Является номером телефона?:
    public function isPhone($phone){
        if(preg_match('/^(?:\+7|8)\d{10}$/', $phone)){
            return true;
        } else {
            return false;
        }
    }

    // Является числом?:
    public function isInt($int){
        if(filter_var($int, FILTER_VALIDATE_INT)){
            return false;
        } else {
            return true;
        }
    }

    // Является строкой?:
    public function isString($str){
        if(!preg_match('/[^а-яА-Яa-zA-Z0-9 \@\.\,\-\_\!\#\$\%\^\&\*\(\)\+\|\"\«\»]/u', $str)){
            return true;
        } else {
            return false;
        }
    }

}
