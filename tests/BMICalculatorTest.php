<?php


use PHPUnit\Framework\TestCase;

class BMICalculatorTest extends TestCase
{
    public function testUnderweightBMITextResult()
    {
        $BMICalculator = new BMICalculator();

        $BMICalculator->BMI= 10;

        $result = $BMICalculator->getTextResultFromBMI();
        $expected ='Underweight';

        $this->assertSame($expected,$result);
    }

    public function testNormalTextResult()
    {
        $BMICalculator = new BMICalculator();

        $BMICalculator->BMI= 22;

        $result = $BMICalculator->getTextResultFromBMI();
        $expected ='Normal';

        $this->assertSame($expected,$result);
    }

    public function testOverweightTextResult()
    {
        $BMICalculator = new BMICalculator();

        $BMICalculator->BMI= 29;

        $result = $BMICalculator->getTextResultFromBMI();
        $expected ='Overweight';

        $this->assertSame($expected,$result);
    }

    public function testCorrectBMIValue()
    {
        $expected =39.1;

        $BMICalculator =new BMICalculator();

        $BMICalculator->mass=100;
        $BMICalculator->height=1.6;
        $result =$BMICalculator->calculate();

        $this->assertEquals($expected,$result);
    }
}
