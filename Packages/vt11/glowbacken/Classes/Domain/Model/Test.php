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
 * Test
 */
class Test extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * products
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GlowBackend\Glowbacken\Domain\Model\Products>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $products = null;

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->products = $this->products ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Products
     *
     * @param \GlowBackend\Glowbacken\Domain\Model\Products $product
     * @return void
     */
    public function addProduct(\GlowBackend\Glowbacken\Domain\Model\Products $product)
    {
        $this->products->attach($product);
    }

    /**
     * Removes a Products
     *
     * @param \GlowBackend\Glowbacken\Domain\Model\Products $productToRemove The Products to be removed
     * @return void
     */
    public function removeProduct(\GlowBackend\Glowbacken\Domain\Model\Products $productToRemove)
    {
        $this->products->detach($productToRemove);
    }

    /**
     * Returns the products
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GlowBackend\Glowbacken\Domain\Model\Products>
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Sets the products
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\GlowBackend\Glowbacken\Domain\Model\Products> $products
     * @return void
     */
    public function setProducts(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $products)
    {
        $this->products = $products;
    }
}
