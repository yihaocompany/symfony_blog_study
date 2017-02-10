<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Say
 *
 * @ORM\Table(name="say")
 * @ORM\Entity
 */
class Say
{
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=480, nullable=false)
     */
    private $content = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createtime", type="datetime", nullable=false)
     */
    private $createtime = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="imgs", type="string", length=480, nullable=false)
     */
    private $imgs = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set content
     *
     * @param string $content
     *
     * @return Say
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set createtime
     *
     * @param \DateTime $createtime
     *
     * @return Say
     */
    public function setCreatetime($createtime)
    {
        $this->createtime = $createtime;

        return $this;
    }

    /**
     * Get createtime
     *
     * @return \DateTime
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set imgs
     *
     * @param string $imgs
     *
     * @return Say
     */
    public function setImgs($imgs)
    {
        $this->imgs = $imgs;

        return $this;
    }

    /**
     * Get imgs
     *
     * @return string
     */
    public function getImgs()
    {
        return $this->imgs;
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
