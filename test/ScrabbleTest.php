<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_Scrabble()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = array("a");

            //Act
            $result = $test_Scrabble->score($input);

            //Assert

            $this->assertEquals(1, $result);
        }

        function test_Scrabble2()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = array("aa");

            //Act
            $result = $test_Scrabble->score($input);

            //Assert

            $this->assertEquals(2, $result);
        }
    }

?>
