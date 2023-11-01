<?php

declare(strict_types=1);

namespace RinyVT\RecordTest\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

class Record extends AbstractEntity
{
    protected string $title = '';
    protected string $bodytext = '';

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Record
    {
        $this->title = $title;
        return $this;
    }

    public function getBodytext(): string
    {
        return $this->bodytext;
    }

    public function setBodytext(string $bodytext): Record
    {
        $this->bodytext = $bodytext;
        return $this;
    }
}
