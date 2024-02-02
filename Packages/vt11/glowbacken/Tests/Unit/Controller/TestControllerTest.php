<?php

declare(strict_types=1);

namespace GlowBackend\Glowbacken\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Dennis Glowacki 
 */
class TestControllerTest extends UnitTestCase
{
    /**
     * @var \GlowBackend\Glowbacken\Controller\TestController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\GlowBackend\Glowbacken\Controller\TestController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllTestsFromRepositoryAndAssignsThemToView(): void
    {
        $allTests = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $testRepository = $this->getMockBuilder(\GlowBackend\Glowbacken\Domain\Repository\TestRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $testRepository->expects(self::once())->method('findAll')->will(self::returnValue($allTests));
        $this->subject->_set('testRepository', $testRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('tests', $allTests);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenTestToView(): void
    {
        $test = new \GlowBackend\Glowbacken\Domain\Model\Test();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('test', $test);

        $this->subject->showAction($test);
    }
}
