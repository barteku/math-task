<?php
namespace App\Model;


interface ShapeInterface
{

    const TYPE_CIRCLE = 'circle';
    const TYPE_TRIANGLE = 'triangle';


    /**
     * Calculates shape surface
     *
     * @return float
     */
    public function getSurface() : float;

    /**
     * Calculates shape circumference
     *
     * @return float
     */
    public function getCircumference() : float;


}
