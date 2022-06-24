<?php

    function funcFibo($number){
        /**
         * Check if Number is between 1 - 20
         */
        if(!($number >= 1 && $number <= 20)){
            echo "Number Invalid";
            return 0;
        }
        $firstNumber = 0;
        $secondNumber = 1;

        $iterateCounter = 0;
        /**
         * Initialize Loop
         * 
         */
        while($iterateCounter < $number){
            echo $firstNumber;
            /**
             * Check if output is last
             * for adding/removing comma
             */
            $checkLast = $iterateCounter + 1;

            if($checkLast < $number){
                echo ", ";
            }
            /**
             * $thirdNumber is the sum
             * of the second and first number
             * (thirdNumber is updated everyloop - same is true for
             * the other numbers)
             */
            $thirdNumber = $secondNumber + $firstNumber;
            /**
             * Swap values of the second number as
             * the first and the second number as the
             * thirdnumber
             */
            $firstNumber = $secondNumber;
            $secondNumber = $thirdNumber;
            /**
             * Increase value by to iterate
             * loop.
             */
            $iterateCounter+=1;
        }

    }

    /**
     * Execution
     */
    $initNumber = 21; // change value for test cases
    echo "Input : " . $initNumber . "\n";
    echo "Output : ";
    funcFibo($initNumber);