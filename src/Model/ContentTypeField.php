<?php
declare(strict_types=1);

namespace SeamsCMS\Delivery\Model;

class ContentTypeField
{
    use HydratorTrait;

    /** @var string */
    private $name;
    /** @var string */
    private $description;
    /** @var string */
    private $type;
    /** @var bool */
    private $isLocalized;
    /** @var bool */
    private $isRequired;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function isLocalized(): bool
    {
        return $this->isLocalized;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->isRequired;
    }
}