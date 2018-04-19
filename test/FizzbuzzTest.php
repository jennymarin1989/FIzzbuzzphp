<?php

    include_once(dirname(__FILE__) . '../../src/Fizzbuzz.php');
    

    class FizzbuzzTests extends PHPunit\Framework\Testcase
    
    {
        private $fizzbuzz;

        protected function setUp()
        {
            $this->fizzbuzz = new Fizzbuzz();
        }
        protected function tearDown()
        {
            $this->fizzbuzz = NULL;
        }

        public function testFizz()
        {
            $result = $this->fizzbuzz->fizz(3);
            $this->assertEquals("fizz", $result);
            $result = $this->fizzbuzz->fizz(5);
            $this->assertEquals("buzz", $result);
            $result = $this->fizzbuzz->fizz(15);
            $this->assertEquals("fizzbuzz", $result);

        }

        public function testPrint()
        {
            $result = $this->fizzbuzz->Print(6);
            $this->assertEquals([ 1, 2,"fizz", 4,"buzz","fizz"]);
        }



    }