<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

class Currency extends AbstractEntity
{
    protected $nameSr = '';

    protected $subdivisionNameSr = '';

    public function getNameSr(): string
    {
        return $this->nameSr;
    }

    public function setNameSr(string $nameSr)
    {
        $this->nameSr = $nameSr;
    }

    public function getSubdivisionNameSr(): string
    {
        return $this->subdivisionNameSr;
    }

    public function setSubdivisionNameSr(string $subdivisionNameSr)
    {
        $this->subdivisionNameSr = $subdivisionNameSr;
    }
}
