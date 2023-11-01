<?php

declare(strict_types=1);

namespace RinyVT\RecordTest\Controller;

use RinyVT\RecordTest\Domain\Model\Record;
use RinyVT\RecordTest\Domain\Repository\RecordRepository;
use TYPO3\CMS\Core\Information\Typo3Version;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class RecordController extends ActionController
{
    protected RecordRepository $recordRepository;

    public function __construct(RecordRepository $recordRepository)
    {
        $this->recordRepository = $recordRepository;
    }

    public function listAction()
    {
        $this->view->assign('records', $this->recordRepository->findAll());
        if (GeneralUtility::makeInstance(Typo3Version::class)->getMajorVersion() > 10) {
            return $this->htmlResponse();
        }
    }

    public function detailAction(Record $record)
    {
        $this->view->assign('record', $record);
        if (GeneralUtility::makeInstance(Typo3Version::class)->getMajorVersion() > 10) {
            return $this->htmlResponse();
        }
    }
}
