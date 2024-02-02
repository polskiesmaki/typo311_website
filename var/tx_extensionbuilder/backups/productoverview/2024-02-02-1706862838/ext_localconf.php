<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Productoverview',
        'Products',
        [
            
        ],
        // non-cacheable actions
        [
            
        ]
    );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    products {
                        iconIdentifier = productoverview-plugin-products
                        title = LLL:EXT:productoverview/Resources/Private/Language/locallang_db.xlf:tx_productoverview_products.name
                        description = LLL:EXT:productoverview/Resources/Private/Language/locallang_db.xlf:tx_productoverview_products.description
                        tt_content_defValues {
                            CType = list
                            list_type = productoverview_products
                        }
                    }
                }
                show = *
            }
       }'
    );
})();
