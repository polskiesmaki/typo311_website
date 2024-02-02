<?php

declare(strict_types=1);

namespace GlowBackend\Glowbacken\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Dennis Glowacki 
 */
class ProductsTest extends UnitTestCase
{
    /**
     * @var \GlowBackend\Glowbacken\Domain\Model\Products|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GlowBackend\Glowbacken\Domain\Model\Products::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getProductReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getProduct()
        );
    }

    /**
     * @test
     */
    public function setProductForStringSetsProduct(): void
    {
        $this->subject->setProduct('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('product'));
    }
}
