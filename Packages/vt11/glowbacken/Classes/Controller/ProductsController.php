<?php

declare(strict_types=1);

namespace GlowBackend\Glowbacken\Controller;


/**
 * This file is part of the "Glowacki Backendext" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Dennis Glowacki
 */

/**
 * ProductsController
 */
class ProductsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $products = $this->productsRepository->findAll();
        $this->view->assign('products', $products);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \GlowBackend\Glowbacken\Domain\Model\Products $products
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\GlowBackend\Glowbacken\Domain\Model\Products $products): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('products', $products);
        return $this->htmlResponse();
    }
}
