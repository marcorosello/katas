# Arabic numerals

The purpose of this exercise is to convert arabic numerals to roman numbers.

Arabic numerals are common numbers 1, 5, 12, these need to be converted to roman numbers, I, V, XII.


## 1. Install dependencies

composer update

## 2. Create your specification phpspec

bin/phpspec desc RomanNumerals

## 3. Run phpspec

bin/phpspec run

Start testing you application

## 4. Test

1. Test that number 1 = I

    ```php
        $this->convertArabicToRoman(1)->shouldBe('I');
    ```

2. Do the same for the  following numbers: 3, 5, 6, 4, 9, 10, 40, 50, 90
