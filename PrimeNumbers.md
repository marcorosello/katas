# Prime numbers

Prime number is any natural number greater that 1 and that can't be divided by another number (without fractions).

## 1. Install dependencies

composer update

## 2. Create your specification phpspec

bin/phpspec desc PrimeNumbers

## 3. Run phpspec

bin/phpspec run

Start testing you application

## 4. Test

1. Test that 0 is 0 and 1 is 1.

    ```php
        $this->getPrimes(1)->->shouldBe([]);
        $this->getPrimes(2)->->shouldBe([2]);
    ```

2.  Test multiple numbers like, 11, 10, 1100 etc.

