<?php
declare(strict_types = 1);
namespace SJBR\StaticInfoTables\Domain\Model;

/***
 *
 * This file is part of the "Static Info Tables (SR)" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/

class Currency extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameSr = '';

    /**
     * @var string
     */
    protected $subdivisionNameSr = '';

    /**
     * @return string
     */
    public function getNameSr(): string
    {
        return $this->nameSr;
    }

    /**
     * @param string $nameSr
     */
    public function setNameSr(string $nameSr)
    {
        $this->nameSr = $nameSr;
    }

    /**
     * @return string
     */
    public function getSubdivisionNameSr(): string
    {
        return $this->subdivisionNameSr;
    }

    /**
     * @param string $subdivisionNameSr
     */
    public function setSubdivisionNameSr(string $subdivisionNameSr)
    {
        $this->subdivisionNameSr = $subdivisionNameSr;
    }
}
