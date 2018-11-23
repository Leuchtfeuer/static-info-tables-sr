<?php
declare(strict_types=1);

namespace SJBR\StaticInfoTables\Domain\Model;

class CountryZone extends AbstractEntity
{
    protected $nameSr = '';

    public function getNameSr(): string
    {
        if ($this->nameSr === '') {
            return $this->getNameLocalized();
        }

        return $this->nameSr;
    }

    public function setNameSr(string $nameSr)
    {
        $this->nameSr = $nameSr;
    }
}