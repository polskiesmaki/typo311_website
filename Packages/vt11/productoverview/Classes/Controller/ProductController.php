<?php

declare(strict_types=1);

namespace ProductOverwiew\Productoverview\Controller;


/**
 * This file is part of the "Product Overview" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Dennis Glowacki
 */

/**
 * ProductController
 */
class ProductController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * productRepository
     *
     * @var \ProductOverwiew\Productoverview\Domain\Repository\ProductRepository
     */
    protected $productRepository = null;

    /**
     * @param \ProductOverwiew\Productoverview\Domain\Repository\ProductRepository $productRepository
     */
    public function injectProductRepository(\ProductOverwiew\Productoverview\Domain\Repository\ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $products = $this->productRepository->findAll();
        $this->view->assign('products', $products);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \ProductOverwiew\Productoverview\Domain\Model\Product $product
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\ProductOverwiew\Productoverview\Domain\Model\Product $product): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('product', $product);
        return $this->htmlResponse();
    }
}
