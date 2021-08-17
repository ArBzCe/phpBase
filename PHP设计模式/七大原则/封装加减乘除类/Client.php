<?php

    Class Client{
        public Addition $addition;
        public Subtraction $subtraction;
        public Multiplication $multiplication;
        public Division $division;
        private Array $num;

        public function __construct($num){
            $this->addition = new Addition();
            $this->subtraction = new Subtraction();
            $this->multiplication = new Multiplication();
            $this->division = new Division();
            $this->num = $num;

        }

    }

    Interface CalculationRule{
        public  function operation($numOne,$numTow);
    }

    Class Addition implements CalculationRule {
            public function operation($numOne,$numTow)
            {
                return $numOne+$numTow;
            }
    }
    Class Subtraction implements CalculationRule {
        public function operation($numOne,$numTow)
        {
            return $numOne-$numTow;
        }
    }

    Class Multiplication implements CalculationRule {
        public function operation($numOne,$numTow)
        {
            return $numOne*$numTow;
        }
    }

    Class Division implements CalculationRule {
        public function operation($numOne,$numTow)
        {
            return $numOne/$numTow;
        }
    }



