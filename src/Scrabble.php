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

                $score = 0;
                foreach($split_input as $letter){
                    if(in_array($letter, $score1)){
                        $score = $score+1;
                    }
                    elseif(in_array($letter, $score2)){
                        $score = $score+2;
                    }
                    elseif(in_array($letter, $score3)){
                        $score = $score+3;
                    }
                    elseif(in_array($letter, $score4)){
                        $score = $score+4;
                    }
                    elseif(in_array($letter, $score5)){
                        $score = $score+5;
                    }
                    elseif(in_array($letter, $score8)){
                        $score = $score+8;
                    }
                    elseif(in_array($letter, $score10)){
                        $score = $score+10;
                    }
                }
                return $score;

            }
        }

?>
