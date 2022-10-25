<?php

class bubbleSort
{
    public function bubbleSortFunc(array $data): array
    {
        $iMax = count($data);
        for ($i = 0; $iMax > $i; $i++) {
            $change = 0;
            for ($j = 0; $j < count($data) - 1; $j++) {
                if ($data[$j] > $data[$j + 1]) {
                    $data = $this->swap($data, $j, $j + 1);
                    $change++;
                }
            }
            if ($change < 1) {
                break;
            }
        }

        return $data;
    }

    private function swap($array, $index1, $index2): array
    {
        $aux = $array[$index1];
        $array[$index1] = $array[$index2];
        $array[$index2] = $aux;

        return $array;
    }
}
