<?php

namespace ShortcutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistic
 *
 * @ORM\Table(name="statistic")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatisticRepository")
 */
class Statistic
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="link_id", type="integer")
     *
     */
    private $linkId;
    /**
     * @var string
     *
     * @ORM\Column(name="Refer", type="string", length=255)
     */
    private $refer;

    /**
     * @var string
     *
     * @ORM\Column(name="Ip", type="string", length=255)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="Browser", type="string", length=255)
     */
    private $browser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date", type="datetime")
     */
    private $date;


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
     * Set refer
     *
     * @param string $refer
     *
     * @return Statistic
     */
    public function setRefer($refer = 0)
    {
        $this->refer = $refer;

        return $this;
    }

    /**
     * @return int
     */
    public function getLinkId()
    {
        return $this->linkId;
    }

    /**
     * @param int $linkId
     */
    public function setLinkId($linkId)
    {
        $this->linkId = $linkId;
    }

    /**
     * Get refer
     *
     * @return string
     */
    public function getRefer()
    {
        return $this->refer;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Statistic
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set browser
     *
     * @param string $browser
     *
     * @return Statistic
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Statistic
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

