<?php


namespace App\Model;

use Symfony\Component\Serializer\Annotation\Groups;


class Triangle extends Shape
{

    /**
     * @var int $a
     *
     * @Groups({"request"})
     */
    public int $a;

    /**
     * @var int $b
     *
     * @Groups({"request"})
     */
    public int $b;

    /**
     * @var int $c
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
    public function __construct(int $a, int $b, int $c) {
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
