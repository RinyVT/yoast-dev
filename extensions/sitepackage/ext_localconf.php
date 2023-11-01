<?php
defined('TYPO3') || die('Access denied.');

call_user_func(static function ($extKey) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $extKey,
        'constants',
        "@import 'EXT:" . $extKey . "/Configuration/TypoScript/constants.typoscript'"
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $extKey,
        'setup',
        "@import 'EXT:" . $extKey . "/Configuration/TypoScript/setup.typoscript'"
    );
}, 'sitepackage');
