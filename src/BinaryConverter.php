<?php

class BinaryConverter
{
    public function convertBinary($binary)
    {
        $number = 0;
        $binaryArray  = array_reverse(str_split($binary));
        for($i = 0; $i < count($binaryArray); $i++) {
            if($binaryArray[$i]) {
                $number += pow(2, $i);
            }
        }
        return $number;
    }

    public function convertDecimal($decimal)
    {
        $digits = (int) ceil(sqrt($decimal));
        $binary = [];
        for($i = ($digits - 1); $i >= 0; $i--) {
            $maxPossibleValue = pow(2, $i);
            if($decimal >= $maxPossibleValue) {
                $binary[$i] = 1;
                $decimal -= $maxPossibleValue;
            } else {
                $binary[$i] = 0;
            }
        }
        return (int) implode('', $binary);
    }

}
