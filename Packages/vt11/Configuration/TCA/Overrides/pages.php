<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['pages']['ctrl']['useColumnsForDefaultValues'] = 'doktype,fe_group';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile('vt11', 'Configuration/TSconfig/BackendLayouts.tsconfig', 'Default Backendlayouts');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile('vt11', 'Configuration/TSconfig/Page_general.tsconfig', 'Default PageTSconfig');