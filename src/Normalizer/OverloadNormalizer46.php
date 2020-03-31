<?php

declare(strict_types=1);

namespace PhpBenchmarks\SymfonyJsonSerializer\Normalizer;

use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class OverloadNormalizer46 implements NormalizerInterface
{
    public function supportsNormalization($data, string $format = null, array $context = [])
    {
        return $data instanceof UnknownObject;
    }

    public function normalize($object, string $format = null, array $context = [])
    {
        throw new \Exception(__CLASS__ . '::' . __FUNCTION__ . ' should not be called.');
    }
}
