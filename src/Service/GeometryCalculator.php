<?php

namespace App\Service;

use App\Model\ShapeInterface;


/**
 * Class GeometryCalculator
 *
 * Service used to sum areas and circumferences
 *
 * @package App\Service
 */
class GeometryCalculator
{

    /**
     * returns sum or areas of given objects
     *
     * @param ShapeInterface $shape1
     * @param ShapeInterface $shape2
     * @return float
     */
    public function calculateSumOfAreas(ShapeInterface $shape1, ShapeInterface $shape2) : float
    {
        $areaShape1 = $shape1->getSurface();
        $areaShape2 = $shape2->getSurface();

        return $areaShape1 + $areaShape2;
    }

    /**
     * returns sum or Circumferences of given objects
     *
     * @param ShapeInterface $shape1
     * @param ShapeInterface $shape2
     * @return float
     */
    public function calculateSumOfCircumference(ShapeInterface $shape1, ShapeInterface $shape2) : float
    {
        $circumferenceShape1 = $shape1->getCircumference();
        $circumferenceShape2 = $shape2->getCircumference();

        return $circumferenceShape1 + $circumferenceShape2;

    }





}
