<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (SR)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Max Rösch <m.roesch@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class CountryZone extends AbstractEntity
{
    /**
     * @var string
     */
    protected $nameSr = '';

    /**
     * @return string
     */
    public function getNameSr(): string
    {
        if ($this->nameSr === '') {
            return $this->getNameLocalized();
        }

        return $this->nameSr;
    }

    /**
     * @param string $nameSr
     */
    public function setNameSr(string $nameSr)
    {
        $this->nameSr = $nameSr;
    }
}
