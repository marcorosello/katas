<?php

class PrimeNumbers
{
    public function getPrimes($number)
    {
        $primes = array();
        $primeAttempt = 2;

        while($number > 1) {
            if($number % $primeAttempt == 0) {
                $primes[] = $primeAttempt;
                $number /= $primeAttempt;
                continue;
            }
            $primeAttempt++;
        }

        return $primes;

    }
}
