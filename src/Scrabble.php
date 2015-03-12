<?php

        class Scrabble
      {

            function score($split_input)
          {

                $score1 = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
                $score2 = array("d", "g");
                $score3 = array("b", "c", "m", "p");
                $score4 = array("f", "h", "v", "w", "y");
                $score5 = array("k");
                $score8 = array("j", "x");
                $score10 = array("q", "z");

                foreach($split_input as $letter){

                    if(in_array($letter, $score1)){
                        return (1);
                    }
                    elseif(in_array($letter, $score2)){
                        return(2);
                    }
                    $score = $score+$eachscore"
                    return $score;
                }
            }
        }

?>
