<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Content
 *
 * @ORM\Table(name="content")
 * @ORM\Entity
 */
class Content
{
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=true)
     */
    private $content;

    /**
     * @var \AppBundle\Entity\Blog
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Blog")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="blogid", referencedColumnName="id")
     * })
     */
    private $blogid;



    /**
     * Set content
     *
     * @param string $content
     *
     * @return Content
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
     * Set blogid
     *
     * @param \AppBundle\Entity\Blog $blogid
     *
     * @return Content
     */
    public function setBlogid(\AppBundle\Entity\Blog $blogid)
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
