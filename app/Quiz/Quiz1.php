<?php
namespace  App\Quiz;

class Quiz1
{

    public function getOddOrEven($a, $b)
    {

        if (!is_numeric($a) || !is_numeric($b)) {
            throw new \InvalidArgumentException();
        }

        $a = $a + 0;
        $b = $b + 0;
        $multi = $a * $b;

        if ($multi % 2 === 0) {
            return 'Even';
        } else {
            return 'Odd';
        }
    }
}