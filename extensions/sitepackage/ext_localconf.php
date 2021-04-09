<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(static function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
        "@import 'EXT:sitepackage/Configuration/TypoScript/setup.typoscript'"
    );
}, 'sitepackage');