<?php

/*
 * This file is part of the Monofony demo.
 *
 * (c) Monofony
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Entity\Animal;

use App\Entity\IdentifiableTrait;
use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @ORM\Entity
 * @ORM\Table(name="app_animal")
 */
class Animal implements ResourceInterface
{
    use IdentifiableTrait;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string")
     */
    private $slug;

    /**
     * @var string|null
     *
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @var float|null
     *
     * @ORM\Column(type="decimal", nullable=true)
     */
    private $size;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $sizeUnit;

    /**
     * @var string|null
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $mainColor;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(?string $slug): void
    {
        $this->slug = $slug;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getSize(): ?float
    {
        return $this->size;
    }

    public function setSize(?float $size): void
    {
        $this->size = $size;
    }

    public function getSizeUnit(): ?string
    {
        return $this->sizeUnit;
    }

    public function setSizeUnit(?string $sizeUnit): void
    {
        $this->sizeUnit = $sizeUnit;
    }

    public function getMainColor(): ?string
    {
        return $this->mainColor;
    }

    public function setMainColor(?string $mainColor): void
    {
        $this->mainColor = $mainColor;
    }
}
