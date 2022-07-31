<?php


namespace App\Model;

use Symfony\Component\Serializer\Annotation\Groups;


class Triangle extends Shape
{

    /**
     * @var int
     *
     * @Groups({"request"})
     */
    public int $a;

    /**
     * @var int
     *
     * @Groups({"request"})
     */
    public int $b;

    /**
     * @var int
     *
     * @Groups({"request"})
     */
    public int $c;


    /**
     * Triangle constructor.
     *
     * @param int $a
     * @param int $b
     * @param int $c
     */
    public function __construct(float $a, float $b, float $c) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

        $this->type = self::TYPE_TRIANGLE;

    }

    /**
     * Calculates surface
     *
     * @Groups({"request"})
     *
     *
     * @return float
     */
    public function getSurface() : float
    {
        $p = $this->getCircumference()/2;

        return sqrt($p*($p-$this->a)*($p-$this->b)*($p-$this->c));
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
        return $this->a + $this->b + $this->c;
    }

}
