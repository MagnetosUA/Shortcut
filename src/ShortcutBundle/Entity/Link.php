<?php

namespace ShortcutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Link
 *
 * @ORM\Table(name="link")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LinkRepository")
 */
class Link
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     *
     * @ORM\OneToMany(targetEntity="Statistic", mappedBy="linkId")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Original", type="string", length=500)
     */
    private $original;

    /**
     * @var string
     *
     * @ORM\Column(name="Short", type="string", length=255)
     */
    private $short;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Lifetime", type="datetime")
     */
    private $lifetime;

    /**
     * @var bool
     *
     * @ORM\Column(name="Active", type="boolean")
     */
    private $active;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set original
     *
     * @param string $original
     *
     * @return Link
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * Get original
     *
     * @return string
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * Set short
     *
     * @param string $short
     *
     * @return Link
     */
    public function setShort($short)
    {
        $this->short = $short;

        return $this;
    }

    /**
     * Get short
     *
     * @return string
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * Set lifetime
     *
     * @param \DateTime $lifetime
     *
     * @return Link
     */
    public function setLifetime($lifetime)
    {
        $this->lifetime = $lifetime;

        return $this;
    }

    /**
     * Get lifetime
     *
     * @return \DateTime
     */
    public function getLifetime()
    {
        return $this->lifetime;
    }

    /**
     * Set active
     *
     * @param boolean $active
     *
     * @return Link
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }
}

