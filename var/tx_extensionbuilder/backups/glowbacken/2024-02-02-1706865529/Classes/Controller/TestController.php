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
 * TestController
 */
class TestController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * testRepository
     *
     * @var \GlowBackend\Glowbacken\Domain\Repository\TestRepository
     */
    protected $testRepository = null;

    /**
     * @param \GlowBackend\Glowbacken\Domain\Repository\TestRepository $testRepository
     */
    public function injectTestRepository(\GlowBackend\Glowbacken\Domain\Repository\TestRepository $testRepository)
    {
        $this->testRepository = $testRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $tests = $this->testRepository->findAll();
        $this->view->assign('tests', $tests);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \GlowBackend\Glowbacken\Domain\Model\Test $test
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\GlowBackend\Glowbacken\Domain\Model\Test $test): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('test', $test);
        return $this->htmlResponse();
    }
}
