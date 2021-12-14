<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MathController extends AbstractController {
    /**
    * @Route("/math/{argument1<\d+>}/{operation<add|sub|div|mul>}/{argument2<\d+>}", name="app_math", methods="POST")
     */
    public function doMath($argument1, $operation, $argument2, LoggerInterface $logger)
    {

        if($operation === 'add')
        {
            $logger->info("addition");
            $answer = $argument1 + $argument2;
        }
        else if($operation === 'sub')
        {
            $logger->info("subtraction");
            $answer = $argument1 - $argument2;
        }
        else if($operation === 'mul')
        {
            $logger->info("multiplication");
            $answer = $argument1 * $argument2;
        }
        else if($operation === 'div')
        {
            if($argument2 != 0)
            {
                $logger->info("division");
                $answer = $argument1 / $argument2;
            }
            else
            {
                $logger->error("division by zero");
                $answer = "You will implode the universe if you divide by 0! STOOOOP";
            }
        }
        else
        {
            $logger->info("Unknown operantion");
            $answer = "unknown operation";
        }
        return $this->json(['answer' => $answer]);
    }
}