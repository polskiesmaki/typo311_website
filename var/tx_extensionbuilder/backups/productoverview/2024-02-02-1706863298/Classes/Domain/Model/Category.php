<?php

declare(strict_types=1);

namespace ProductOverwiew\Productoverview\Domain\Model;


/**
 * This file is part of the "Product Overview" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Dennis Glowacki
 */

/**
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * category
     *
     * @var string
     */
    protected $category = '';

    /**
     * Returns the category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param string $category
     * @return void
     */
    public function setCategory(string $category)
    {
        $this->category = $category;
    }
}
