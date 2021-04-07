<?php
/**
 * The HelloWorld class file.
 *
 * @package Skeleton
 */

namespace Teqnomaze\Skeleton;

/**
 * The HelloWorld class.
 */
class HelloWorld
{
    /**
     * The id
     *
     * @var int $id
     */
    private $id = null;

    /**
     * THe name
     *
     * @var string $name
     */
    private $name = null;

    /**
     * Initiate class object.
     */
    public function __construct()
    {
    }

    /**
     * Get the id
     *
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Set the id
     *
     * @param int $id The id.
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get the name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Set the name
     *
     * @param string $name The name.
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
}
