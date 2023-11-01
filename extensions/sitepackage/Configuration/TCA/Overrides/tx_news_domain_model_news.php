<?php

if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('news')) {
    \YoastSeoForTypo3\YoastSeo\Utility\RecordUtility::configureForRecord('tx_news_domain_model_news')
        ->setGetParameters([
            ['tx_news_pi1', 'news'],
            ['tx_news_pi1', 'news_preview']
        ])
        ->setSitemapFields(false)
        ->setOverrideTca([
            'columns' => [
                'seo_title' => [
                    'config' => [
                        'max' => 50
                    ]
                ]
            ]
        ])
        ->setFieldsPosition('after:bodytext');
}
