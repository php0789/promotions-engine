<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\SerializerInterface;
use App\Service\Serializer\DTOSerializer;
use App\DTO\LowestPriceEnquiry;

class ProductsController extends AbstractController
{
    #[Route('/products/{id}/lowest-price', name: 'lowest-price', methods:'POST')]

    public function lowestPrice(Request $request, int $id, DTOSerializer $serializer): Response
    {
        if($request->headers->has('force_fail')){
            return new JsonResponse(['error' => 'promotion engine failure'], $request->headers->has('force_fail'));
        }
        $lowestPriceEnquiry = $serializer->deserialize($request->getContent(), LowestPriceEnquiry ::class, 'json',[
            'skip_null_values' => false
        ]);
        $lowestPriceEnquiry->setDiscountedPrice(50);
        $lowestPriceEnquiry->setPrice(100);
        $lowestPriceEnquiry->setPromotionId(3);
        $lowestPriceEnquiry->setPromotionName('Black Friday half price sale');

        $responseContent = $serializer->serialize($lowestPriceEnquiry, 'json');
        //$responseContent = $serializer->serialize($lowestPriceEnquiry, 'json');
        return new Response($responseContent, 200);
    }
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ProductsController.php',
        ]);
    }
}
