<?php

/**
 * Class RomanNumbers for transforming arabic to roman symbols
 */
class RomanNumbers {

    //arabic value => Roman symbol
    private $arabicToRoman = [
        1 => 'I',
        5 => 'V',
        10 => 'X',
        50 => 'L',
        100 => 'C',
        500 => 'D',
        1000 => 'M'
    ];

    /** @var array allow extracting values */
    private $romanExtractingValues = [1, 10, 100, 1000];

    /**
     * @param $arabic Number normal number like 4
     * @return string Roman number IV
     */
    public function convertArabicToRoman($arabicNumber) {
        $romanNumber = '';
        $arabicValues = array_keys($this->arabicToRoman);
        $arabicIterator = count($arabicValues) - 1;
        $remainingArabic = $arabicNumber;

        //while we haven't fully decode to roman keep looking for symbols
        while ($remainingArabic > 0) {
            $greatestArabicValue = $arabicValues[$arabicIterator];
            //if the remaining value equal or greater of maximum arabic
            if ($remainingArabic >= $greatestArabicValue) {
                $romanNumber .= $this->arabicToRoman[$greatestArabicValue];
                $remainingArabic -= $greatestArabicValue;
                continue;
            }

            //try to find cases like 4, IV where the symbol has a extracting value in front
            $extractingRomanValue = $this->getExtractingValue($greatestArabicValue);
            if ($arabicNumber == $extractingRomanValue) {
                $romanNumber .= $this->getExtractingSymbol($greatestArabicValue);
                $romanNumber .= $this->arabicToRoman[$greatestArabicValue];
                $remainingArabic -= $extractingRomanValue;
            }

            //nothing found, move to the next possible value
            $arabicIterator--;
        }

        return $romanNumber;
    }

    /**
     * @param int $currentArabicValue for example 100, the function will return 10
     * @param int $divideBy
     * @return mixed
     */
    private function getExtractingSymbol($currentArabicValue, $divideBy = 5) {
        $extractingValue = $currentArabicValue / $divideBy;
        if (in_array($extractingValue, $this->romanExtractingValues)) {

            return $this->arabicToRoman[$extractingValue];
        }

        return $this->getExtractingSymbol($currentArabicValue, 10);
    }

    /**
     * @param int $currentArabicValue for example 50 will return X
     * @param int $divideBy
     * @return mixed
     */
    private function getExtractingValue($currentArabicValue, $divideBy = 5) {
        //first try dividing by 5 like to 5, 50, 500..
        $extractingValue = $currentArabicValue / $divideBy;
        if (in_array($extractingValue, $this->romanExtractingValues)) {

            return $currentArabicValue - $extractingValue;
        }

        //if not is one of the extracting values divide the previous number 10 like 100 case, 10.
        return $this->getExtractingValue($currentArabicValue, 10);
    }
}
