<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blogtype
 *
 * @ORM\Table(name="blogtype")
 * @ORM\Entity
 */
class Blogtype
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=24, nullable=false)
     */
    private $name = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="topid", type="integer", nullable=false)
     */
    private $topid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Blogtype
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set topid
     *
     * @param integer $topid
     *
     * @return Blogtype
     */
    public function setTopid($topid)
    {
        $this->topid = $topid;

        return $this;
    }

    /**
     * Get topid
     *
     * @return integer
     */
    public function getTopid()
    {
        return $this->topid;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}
