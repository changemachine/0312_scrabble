<?php

        class Scrabble
      {

            function score($input)
          {

                $score1 = array("A", "E", "I", "O", "U", "L", "N", "R", "S", "T");
                $score2 = array("D", "G");
                $score3 = array("B", "C", "M", "P");
                $score4 = array("F", "H", "V", "W", "Y");
                $score5 = array("K");
                $score8 = array("J", "X");
                $score10 = array("Q", "Z");


                $dictionary = file_get_contents(__DIR__."/../src/sowpods.txt");
                $dictionary = explode("\n", $dictionary);
                $array = array();
                foreach($dictionary as $line){
                  $holder = trim($line);
                  array_push($array, $holder);
                }
                



                $uc_input = strtoupper($input);
                $split_input = str_split($uc_input);
                $score = 0;

                if (in_array($uc_input, $array)){

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


                } else {

                $score = "That was not a real word";
              }
              return $score;

            }
        }

?>
