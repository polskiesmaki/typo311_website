<?php

declare(strict_types=1);

namespace YoastSeoForTypo3\YoastSeo\Utility;

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class JavascriptUtility
{
    public static function loadJavascript(PageRenderer $pageRenderer = null): void
    {
        if ($pageRenderer === null) {
            $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);
        }

        if (YoastUtility::inProductionMode() === true) {
            $pageRenderer->loadRequireJsModule('TYPO3/CMS/YoastSeo/dist/plugin');
        } else {
            $pageRenderer->addHeaderData(
                '<script type="text/javascript" src="https://localhost:3333/typo3conf/ext/yoast_seo/Resources/Public/JavaScript/dist/plugin.js" async></script>'
            );
        }
    }
}
