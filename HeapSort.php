<?php

class HeapSort
{
    public function heapfy(array $array): array
    {
        $newArray = [];
        $length = count($array);
        for ($i = 0; $length > $i; $i++) {
            $left = 2 * $i + 1;
            $right = 2 * $i + 2;
            $father = abs(($left - 1)/2);

            if ($array[$left] > $array[$i]) {
                $aux = $array[$i];
                $array[$i] = $array[$left];
                $array[$left] = $aux;
            }

            if ($array[$right] > $array[$i]) {
                $aux = $array[$i];
                $array[$i] = $array[$right];
                $array[$right] = $aux;
            }

            array_push($newArray,$array[$father], $array[$left], $array[$right]);
        }

        return $newArray;
    }
}