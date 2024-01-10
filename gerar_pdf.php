<?php

require __DIR__ . "/vendor/autoload.php";

use HeadlessChromium\BrowserFactory;

$html = file_get_contents("arquivo.html");

$browser = (new BrowserFactory())->createBrowser([
    'windowSize' => [1920, 1080]
]);

$page = $browser->createPage();

$page->setHtml($html);

file_put_contents("arquivo.pdf",
    base64_decode(
        $page->pdf([
            'printBackground' => true,
            'landscape' => true,
        ])->getBase64()
    )
);
