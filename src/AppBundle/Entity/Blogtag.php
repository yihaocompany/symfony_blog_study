<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Blogtag
 *
 * @ORM\Table(name="blogtag", indexes={@ORM\Index(name="blogid", columns={"blogid"}), @ORM\Index(name="tagid", columns={"tagid"})})
 * @ORM\Entity
 */
class Blogtag
{
    /**
     * @var integer
     *
     * @ORM\Column(name="tagid", type="integer", nullable=true)
     */
    private $tagid = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Blog
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Blog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blogid", referencedColumnName="id")
     * })
     */
    private $blogid;



    /**
     * Set tagid
     *
     * @param integer $tagid
     *
     * @return Blogtag
     */
    public function setTagid($tagid)
    {
        $this->tagid = $tagid;

        return $this;
    }

    /**
     * Get tagid
     *
     * @return integer
     */
    public function getTagid()
    {
        return $this->tagid;
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

    /**
     * Set blogid
     *
     * @param \AppBundle\Entity\Blog $blogid
     *
     * @return Blogtag
     */
    public function setBlogid(\AppBundle\Entity\Blog $blogid = null)
    {
        $this->blogid = $blogid;

        return $this;
    }

    /**
     * Get blogid
     *
     * @return \AppBundle\Entity\Blog
     */
    public function getBlogid()
    {
        return $this->blogid;
    }
}
