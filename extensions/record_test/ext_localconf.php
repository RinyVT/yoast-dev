<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'RecordTest',
    'Pi1',
    [
        \RinyVT\RecordTest\Controller\RecordController::class => 'list,detail'
    ]
);
