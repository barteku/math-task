<?php

namespace App\Model;


use Symfony\Component\Serializer\Annotation\Groups;


/**
 * Class Circle
 *
 * @package App\Model
 */
class Circle extends Shape
{

    /**
     * @var int
     *
     * @Groups({"request"})
     */
    public int $radius;


    /**
     * Circle constructor.
     *
     * @param int $radius
     */
    public function __construct(int $radius){
        $this->radius = $radius;

        $this->type = self::TYPE_CIRCLE;
    }


    /**
     * Calculates diameter
     *
     * @return float
     */
    public function getDiameter() : float
    {
        return 2 * $this->radius;
    }

    /**
     * Calculates circumference
     *
     * @Groups({"request"})
     *
     * @return float
     */
    public function getCircumference() : float
    {
        return 2 * M_PI * $this->radius;
    }

    /**
     * Calculates surface
     *
     * @Groups({"request"})
     *
     * @return float
     */
    public function getSurface() : float
    {
        return M_PI*pow($this->radius, 2);
    }

}
