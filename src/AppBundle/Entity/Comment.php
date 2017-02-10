<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment", indexes={@ORM\Index(name="id", columns={"blogid"})})
 * @ORM\Entity
 */
class Comment
{
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=240, nullable=true)
     */
    private $content = '';

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=24, nullable=true)
     */
    private $nickname = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createtime", type="datetime", nullable=true)
     */
    private $createtime = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="replyid", type="integer", nullable=true)
     */
    private $replyid = '0';

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
     * Set content
     *
     * @param string $content
     *
     * @return Comment
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
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Comment
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set createtime
     *
     * @param \DateTime $createtime
     *
     * @return Comment
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
     * Set replyid
     *
     * @param integer $replyid
     *
     * @return Comment
     */
    public function setReplyid($replyid)
    {
        $this->replyid = $replyid;

        return $this;
    }

    /**
     * Get replyid
     *
     * @return integer
     */
    public function getReplyid()
    {
        return $this->replyid;
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
     * @return Comment
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
