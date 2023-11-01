<?php
defined('TYPO3') || die;

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('record_test')) {
    \YoastSeoForTypo3\YoastSeo\Utility\RecordUtility::configureForRecord('tx_recordtest_record')
        ->setGetParameters([
            ['tx_recordtest_pi1', 'record']
        ])
        //->setAddDescriptionField('custom_description')
        //->setDescriptionField('custom_description')
        ->setFieldsPosition('after:bodytext');
}
