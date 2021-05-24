<?php


class BMICalculator
{
    public $BMI;

    public $height;

    public $mass;

    public function calculate()
    {
        if($this-> <=0 || $this->height <= 0) throw new WrongBmiException('error message');
        return round($this->mass / pow($this->height,2),1);
    }

    public function getTextResultFromBMI()
    {
        if($this->BMI <18){
            return 'Underweight';
        }
        elseif($this->BMI >=18 && $this->BMI<=25)
        {
            return 'Normal';
        }
        else{
            return 'Overweight';
        }

    }
}