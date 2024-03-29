<?php

class FizzBuzz
{
    public function runFizzBuzz($start, $end) : array {
        $result = [];
        for ($number = $start; $number <= $end; $number++) {
            if ($number % 15 == 0) {
                $result[] = "FizzBuzz";
            } elseif ($number % 3 == 0) {
                $result[] = "Fizz";
            } elseif ($number % 5 == 0) {
                $result[] = "Buzz";
            } else {
                $result[] = $number;
            }
        }
        return $result;
    }
}