<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_Scrabble()
        {
            //Arrange
            $test_Scrabble = new Scrabble;
            $input = "z";

            //Act
            $result = $test_Scrabble->score($input);

            //Assert

            $this->assertEquals($result, "10");
        }
    }

?>
