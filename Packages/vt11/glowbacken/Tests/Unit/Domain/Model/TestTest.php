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
class TestTest extends UnitTestCase
{
    /**
     * @var \GlowBackend\Glowbacken\Domain\Model\Test|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \GlowBackend\Glowbacken\Domain\Model\Test::class,
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
    public function getProductsReturnsInitialValueForProducts(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getProducts()
        );
    }

    /**
     * @test
     */
    public function setProductsForObjectStorageContainingProductsSetsProducts(): void
    {
        $product = new \GlowBackend\Glowbacken\Domain\Model\Products();
        $objectStorageHoldingExactlyOneProducts = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneProducts->attach($product);
        $this->subject->setProducts($objectStorageHoldingExactlyOneProducts);

        self::assertEquals($objectStorageHoldingExactlyOneProducts, $this->subject->_get('products'));
    }

    /**
     * @test
     */
    public function addProductToObjectStorageHoldingProducts(): void
    {
        $product = new \GlowBackend\Glowbacken\Domain\Model\Products();
        $productsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $productsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($product));
        $this->subject->_set('products', $productsObjectStorageMock);

        $this->subject->addProduct($product);
    }

    /**
     * @test
     */
    public function removeProductFromObjectStorageHoldingProducts(): void
    {
        $product = new \GlowBackend\Glowbacken\Domain\Model\Products();
        $productsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $productsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($product));
        $this->subject->_set('products', $productsObjectStorageMock);

        $this->subject->removeProduct($product);
    }
}
