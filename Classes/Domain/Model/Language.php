<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Language extends AbstractEntity
{
    protected $nameSr = '';

    public function getNameSr(): string
    {
        return $this->nameSr;
    }

    public function setNameSr(string $nameSr)
    {
        $this->nameSr = $nameSr;
    }
}
