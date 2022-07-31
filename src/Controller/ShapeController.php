<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Model\Triangle;
use App\Model\Circle;
use Symfony\Component\Serializer\Context\Normalizer\ObjectNormalizerContextBuilder;
use Symfony\Component\Serializer\SerializerInterface;


class ShapeController extends AbstractController
{

    /**
     *
     * @Route("/triangle/{a}/{b}/{c}", methods={"GET"}, name="app_triangle", requirements={"a"="\d+","b"="\d+","c"="\d+"})
     *
     * @param int $a
     * @param int $b
     * @param int $c
     * @return JsonResponse
     */
    public function triangle(SerializerInterface $serializer, int $a, int $b, int $c){

        $triangle = new Triangle($a, $b, $c);

        $context = (new ObjectNormalizerContextBuilder())
            ->withGroups('request')
            ->toArray();

        $json = $serializer->serialize($triangle, 'json', $context);

        return new Response($json);

    }


    /**
     *
     * @Route("/circle/{radius}", methods={"GET"}, name="app_circle", requirements={"radius"="\d+"})
     *
     * @param int $radius
     *
     * @return JsonResponse
     */
    public function circle(SerializerInterface $serializer, int $radius){

        $circle = new Circle($radius);

        $context = (new ObjectNormalizerContextBuilder())
            ->withGroups('request')
            ->toArray();

        $json = $serializer->serialize($circle, 'json', $context);

        return new Response($json);


    }


}
