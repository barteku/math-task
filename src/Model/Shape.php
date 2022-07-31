<?php

namespace App\Model;

use Symfony\Component\Serializer\Annotation\Groups;


abstract class Shape implements ShapeInterface
{

    /**
     * @var string $type
     *
     * @Groups({"request"})
     *
     */
    public string $type;





}
