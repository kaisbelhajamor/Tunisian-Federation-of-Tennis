<?php

namespace Ftt\FrontOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * Contact
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ftt\FrontOfficeBundle\Entity\ContactRepository")
 */
class Contact
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    protected $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=1000)
     */
    protected $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    protected $date;

    /**
     * @var boolean
     *
     * @ORM\Column(name="readed", type="boolean")
     */
    protected $readed;
    /**
     * @var boolean
     *
     * @ORM\Column(name="reply", type="boolean")
     */
    protected $reply;

    /**
     * @return boolean
     */
    public function isReply()
    {
        return $this->reply;
    }

    /**
     * @param boolean $reply
     */
    public function setReply($reply)
    {
        $this->reply = $reply;
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
     * Set name
     *
     * @param string $name
     * @return Contact
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
     * Set mail
     *
     * @param string $mail
     * @return Contact
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Contact
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

    /**
     * Set readed
     *
     * @param boolean $readed
     * @return Contact
     */
    public function setReaded($readed)
    {
        $this->readed = $readed;

        return $this;
    }

    /**
     * Get readed
     *
     * @return boolean 
     */
    public function getReaded()
    {
        return $this->readed;
    }
}
