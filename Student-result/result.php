<?php

function subjectmarks($bangla, $english, $math, $physics, $chemistry)
{
    if ($bangla <= 100 && $english <= 100 && $math <= 100 && $physics <= 100 && $chemistry <= 100 && $bangla >= 0 && $english >= 0 && $math >= 0 && $physics >= 0 && $chemistry >= 0) {
        if ($bangla > 33 && $english > 33 && $math > 33 && $physics > 33 && $chemistry > 33) {
            $totalMark = ($bangla + $english + $math + $physics + $chemistry);
            echo "$totalMark \n ";
            $average = ($totalMark / 5);
            echo "$average \n ";
            switch (true) {
                case ($average >= 80 && $average <= 100):
                    echo "A+";
                    break;
                case ($average >= 70 && $average < 80):
                    echo "A";
                    break;
                case ($average >= 60 && $average < 70):
                    echo "A-";
                    break;
                case ($average >= 50 && $average < 60):
                    echo "B";
                    break;
                case ($average >= 40 && $average < 50):
                    echo "C";
                    break;
                case ($average >= 33 && $average < 40):
                    echo "D";
                    break;

                default:
                    echo "F";
                    break;
            }
        } else {
            echo "You Are Failed";
        }

    } else {
        echo "Invaild Mark ";
    }


    
}

subjectmarks(78, 83, 77, 95, 80);



?>