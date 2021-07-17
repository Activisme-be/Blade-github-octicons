<?php

return [
    [
        'source' => __DIR__.'/../dist/icons',
        'destination' => __DIR__.'/../resources/svg',
        'after' => static function (string $tempFilepath, array $iconSet) {
            $doc = new DOMDocument();
            $doc->load($tempFilepath);
            /**
             * @var DOMNode|DOMElement $svgElement
             */
            $svgElement = $doc->getElementsByTagName('svg')[0];
            $svgElement->removeAttribute('width');
            $svgElement->removeAttribute('height');
            $viewBox = $svgElement->getAttribute('viewBox');
            $svgElement->removeAttribute('viewBox');
            $svgElement->setAttribute('fill', 'currentColor');
            $svgElement->setAttribute('viewBox', $viewBox);
            $doc->save($tempFilepath);

            $fileLines = file($tempFilepath);
            array_shift($fileLines);

            file_put_contents($tempFilepath, $fileLines);
        },
        'safe' => true,
    ],
];
