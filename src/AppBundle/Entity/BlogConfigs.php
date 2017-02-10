<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlogConfigs
 *
 * @ORM\Table(name="blog_configs")
 * @ORM\Entity
 */
class BlogConfigs
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=36, nullable=false)
     */
    private $name = '';

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=360, nullable=false)
     */
    private $value = '';

    /**
     * @var boolean
     *
     * @ORM\Column(name="ext", type="boolean", nullable=false)
     */
    private $ext = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=360, nullable=true)
     */
    private $comment = '';

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
     * @return BlogConfigs
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
     * Set value
     *
     * @param string $value
     *
     * @return BlogConfigs
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set ext
     *
     * @param boolean $ext
     *
     * @return BlogConfigs
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return boolean
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return BlogConfigs
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
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
