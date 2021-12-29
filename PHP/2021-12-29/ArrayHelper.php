<?php
class ArrayHelper {
    public static function arraySummer($arr) {
        return array_sum($arr);
    }
    public static function arrayAvg($arr) {
        return (float)(self::arraySummer($arr)/count($arr));
    }
}


?>