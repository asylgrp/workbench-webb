<?php 

declare(strict_types = 1);

namespace workbench\webb\Http;

/**
 * NOTE: This file was auto-generated by inroute 1.0.0 and should not be edited directly.
 */
final class HttpRouter implements \inroutephp\inroute\Runtime\HttpRouterInterface
{
    use \inroutephp\inroute\Runtime\Aura\HttpRouterTrait;

    protected function loadRoutes(\Aura\Router\Map $map): void
    {
        \inroutephp\inroute\Package::validateVersion('1.0.0');

        $mapper = new \inroutephp\inroute\Runtime\Aura\RouteMapper($map);

$mapper->mapRoute(\Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
    $o = [
        clone (\Symfony\Component\VarExporter\Internal\Registry::$prototypes['inroutephp\\inroute\\Runtime\\Route'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('inroutephp\\inroute\\Runtime\\Route')),
    ],
    null,
    [
        'inroutephp\\inroute\\Runtime\\Route' => [
            'name' => [
                'index',
            ],
            'routable' => [
                true,
            ],
            'httpMethods' => [
                [
                    'GET',
                ],
            ],
            'path' => [
                '/',
            ],
            'serviceId' => [
                'workbench\\webb\\Http\\Route\\Index',
            ],
            'serviceMethod' => [
                'index',
            ],
        ],
    ],
    $o[0],
    []
));
    }
}
