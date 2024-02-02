<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_productoverview_domain_model_product', 'EXT:productoverview/Resources/Private/Language/locallang_csh_tx_productoverview_domain_model_product.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_productoverview_domain_model_product');

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_productoverview_domain_model_category', 'EXT:productoverview/Resources/Private/Language/locallang_csh_tx_productoverview_domain_model_category.xlf');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_productoverview_domain_model_category');
})();
