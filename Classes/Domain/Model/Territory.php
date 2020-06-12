<?php

declare(strict_types=1);

/*
 * This file is part of the "Static Info Tables (SR)" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace SJBR\StaticInfoTables\Domain\Model;

class Territory extends AbstractEntity
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
