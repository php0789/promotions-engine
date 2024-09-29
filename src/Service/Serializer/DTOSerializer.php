<?php 
namespace App\Service\Serializer;

use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\NameConverter\CamelCaseToSnakeCaseNameConverter;

class DTOSerializer implements SerializerInterface{

    private SerializerInterface $serializer;

    function __construct(){
        $this->serializer = new Serializer(
            [new ObjectNormalizer(nameConverter: new CamelCaseToSnakeCaseNameConverter())],
            [new JsonEncoder()]
        );
    }
    
    function serialize($data, $format, array $context = array()): string{
        return $this->serializer->serialize($data, $format, $context);
    }

    function deserialize($data, $type, $format, array $context = array()): mixed{
        return $this->serializer->deserialize($data, $type, $format, $context);
    }

}