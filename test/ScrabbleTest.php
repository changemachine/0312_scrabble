<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_Scrabble()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "a";
            $split_input = str_split($input);

            //Act
            $result = $test_Scrabble->score($split_input);

            //Assert

            $this->assertEquals(1, $result);
        }

        function test_Scrabble2()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "ad";
            $split_input = str_split($input);

            //Act
            $result = $test_Scrabble->score($split_input);

            //Assert

            $this->assertEquals(3, $result);
        }
    }

?>
