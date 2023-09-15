<?php

namespace PhpLeetCode\Medium\SpiralMatrix;

class SpiralMatrix
{
    /**
     * @param int[][] $matrix
     * @return int[]
     */
    public function spiralOrder(array $matrix): array
    {
        $xStartPosition = 0;
        $yStartPosition = 0;
        $xEndPosition = count($matrix) - 1;
        $yEndPosition = count($matrix[0]) - 1;
        $spiralMatrixInterpretation = [];

        while ($xStartPosition <= $xEndPosition && $yStartPosition <= $yEndPosition) {
            for ($i = $yStartPosition; $i <= $yEndPosition; $i++) {
                $spiralMatrixInterpretation[] = $matrix[$xStartPosition][$i];
            }
            $xStartPosition++;

            for ($i = $xStartPosition; $i <= $xEndPosition; $i++) {
                $spiralMatrixInterpretation[] = $matrix[$i][$yEndPosition];
            }
            $yEndPosition--;

            if ($xStartPosition <= $xEndPosition) {
                for ($i = $yEndPosition; $i >= $yStartPosition; $i--) {
                    $spiralMatrixInterpretation[] = $matrix[$xEndPosition][$i];
                }
                $xEndPosition--;
            }

            if ($yStartPosition <= $yEndPosition) {
                for ($i = $xEndPosition; $i >= $xStartPosition; $i--) {
                    $spiralMatrixInterpretation[] = $matrix[$i][$yStartPosition];
                }
                $yStartPosition++;
            }
        }

        return $spiralMatrixInterpretation;
    }
}
