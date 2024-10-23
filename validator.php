<?php

Class Validator{
    public static function string($input, $min = 1, $max = INF)
    {
        $input = trim($input);
        return strlen($input) >= $min && strlen($input) <= $max;
    }
}
