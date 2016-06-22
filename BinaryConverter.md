# Binary Converter

The purpose of this exercise is to convert numbers from binary to base of 10.



## 1. Install dependencies

composer update

## 2. Create your specification phpspec

bin/phpspec desc BinaryConvertor

## 3. Run phpspec

bin/phpspec run

Start testing you application

## 4. Test

1. Test that 0 is 0 and 1 is 1.

    ```php
        $this->convertBinary(0)->->shouldBe(0);
        $this->convertBinary(1)->->shouldBe(1);
    ```

2.  Test multiple numbers like, 11, 10, 1100 etc.

