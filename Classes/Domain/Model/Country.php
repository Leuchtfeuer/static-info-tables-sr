<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class Country extends AbstractEntity
{
    /**
     * @var string
     */
    protected $shortNameSr = '';

    public function getShortNameSr(): string
    {
        return $this->shortNameSr;
    }

    public function setShortNameSr(string $shortNameSr)
    {
        $this->shortNameSr = $shortNameSr;
    }
}