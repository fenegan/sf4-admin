<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Service\MessageGenerator;

class DefaultController extends Controller
{
    /**
     * @Route("/happy")
     */
    public function happy(MessageGenerator $messageGenerator)
    {
        $message = $messageGenerator->getHappyMessage();

        return new Response(
            '<html><body>'.$message.'</body></html>'
        );
    }
    /**
     * @Route("/lucky/number")
     */
    public function number()
    {
        $number = mt_rand(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
}