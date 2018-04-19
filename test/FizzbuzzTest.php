<?php

    include_once(dirname(__FILE__) . '../../src/Fizzbuzz.php');
    

    class FizzbuzzTests extends PHPunit\Framework\Testcase
    
    {
        private $fizzbuzz;

        protected function setUp()
        {
            $this->fizzbuzz = new Fizzbuzz();
        }

        public function testFizz()
        {
            $result = $this->fizzbuzz->fizz(3);
            $this->assertEquals("fizz", $result);
            $result = $this->fizzbuzz->fizz(5);
            $this->assertEquals("buzz", $result);
        }



    }