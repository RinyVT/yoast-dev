<?php
defined('TYPO3') || die;

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('sf_event_mgt')) {
    \YoastSeoForTypo3\YoastSeo\Utility\RecordUtility::configureForRecord('tx_sfeventmgt_domain_model_event')
        ->setGetParameters([
            ['tx_sfeventmgt_pieventdetail', 'event']
        ])
        ->setSitemapFields(false)
        ->setAddDescriptionField(true)
        ->setDescriptionField('seo_description')
        ->setFieldsPosition('after:custom_text')
        ->setOverrideTca([
            'palettes' => [
                'seo' => [
                    'showitem' => '--linebreak--, tx_yoastseo_snippetpreview,
                        --linebreak--, seo_title;LLL:EXT:seo/Resources/Private/Language/locallang_tca.xlf:pages.seo_title,
                        --linebreak--, seo_description,
                        --linebreak--, tx_yoastseo_cornerstone,'
                ]
            ]
        ]);
}
