<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Glowbacken',
        'web',
        'glowbacken',
        '',
        [
            \GlowBackend\Glowbacken\Controller\TestController::class => 'list, show',
            \GlowBackend\Glowbacken\Controller\ProductsController::class => 'list, show',
            
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:glowbacken/Resources/Public/Icons/user_mod_glowbacken.svg',
            'labels' => 'LLL:EXT:glowbacken/Resources/Private/Language/locallang_glowbacken.xlf',
        ]
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_glowbacken_domain_model_test', 'EXT:glowbacken/Resources/Private/Language/locallang_csh_tx_glowbacken_domain_model_test.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_glowbacken_domain_model_test');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_glowbacken_domain_model_products', 'EXT:glowbacken/Resources/Private/Language/locallang_csh_tx_glowbacken_domain_model_products.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_glowbacken_domain_model_products');
})();
