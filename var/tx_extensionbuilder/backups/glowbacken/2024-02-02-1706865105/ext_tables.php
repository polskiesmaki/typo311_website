<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
        'Glowbacken',
        'web',
        'glowbacken',
        '',
        [
            
        ],
        [
            'access' => 'user,group',
            'icon'   => 'EXT:glowbacken/Resources/Public/Icons/user_mod_glowbacken.svg',
            'labels' => 'LLL:EXT:glowbacken/Resources/Private/Language/locallang_glowbacken.xlf',
        ]
    );

})();
