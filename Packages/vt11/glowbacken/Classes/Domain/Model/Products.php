<?php

declare(strict_types=1);

namespace GlowBackend\Glowbacken\Domain\Model;


/**
 * This file is part of the "Glowacki Backendext" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Dennis Glowacki
 */

/**
 * Products
 */
class Products extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * product
     *
     * @var string
     */
    protected $product = '';

    /**
     * Returns the product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Sets the product
     *
     * @param string $product
     * @return void
     */
    public function setProduct(string $product)
    {
        $this->product = $product;
    }
}
