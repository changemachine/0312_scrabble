<?php

        class Scrabble
      {

            function score($input)
          {

                $score1 = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
                $score2 = array("d", "g");
                $score3 = array("b", "c", "m", "p");
                $score4 = array("f", "h", "v", "w", "y");
                $score5 = array("k");
                $score8 = array("j", "x");
                $score10 = array("q", "z");

                if(in_array($input[0], $score1))
                {
                    return (1);
                }
            }
        }

?>
