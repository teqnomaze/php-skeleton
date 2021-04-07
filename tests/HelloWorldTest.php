<?php
/**
 * The HelloWorldTest class file.
 *
 * @package    Skeleton
 * @subpackage Test
 */

namespace Teqnomaze\Skeleton\Test;

/**
 * The HelloWorldTest class.
 */
class HelloWorldTest extends \PHPUnit\Framework\TestCase
{
    /**
     * The class object
     *
     * @var \Teqnomaze\Skeleton\HelloWorld $object
     */
    protected $object;

    /**
     * Initialize TestCase
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        // Iitialize the object.
        $this->object = new \Teqnomaze\Skeleton\HelloWorld();
    }

    /**
     * Release TestCase
     *
     * @return void
     */
    protected function tearDown(): void
    {
        // Release the object.
        unset($this->object);

        parent::tearDown();
    }

    /**
     * Run unit testing for $id var
     *
     * @return void
     */
    public function testId(): void
    {
        $id = rand();
        static::assertInstanceOf(
            \Teqnomaze\Skeleton\HelloWorld::class,
            $this->object->setId($id)
        );
        static::assertEquals($id, $this->object->getId());
    }

    /**
     * Run unit testing for $id var
     *
     * @return void
     */
    public function testName(): void
    {
        $name = uniqid();
        static::assertInstanceOf(
            \Teqnomaze\Skeleton\HelloWorld::class,
            $this->object->setName($name)
        );
        static::assertEquals($name, $this->object->getName());
    }
}
