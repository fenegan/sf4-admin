<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WeaponRepository")
 */
class Weapon
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $power;

    /**
     * @ORM\ManyToOne(targetEntity="Character", inversedBy="weapons")
     * @ORM\JoinColumn(name="character_id", referencedColumnName="id")
     */
    private $character;


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
     *
     * @return Weapon
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
     * Set power
     *
     * @param integer $power
     *
     * @return Weapon
     */
    public function setPower($power)
    {
        $this->power = $power;

        return $this;
    }

    /**
     * Get power
     *
     * @return integer
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * Set character
     *
     * @param \App\Entity\Character $character
     *
     * @return Weapon
     */
    public function setCharacter(\App\Entity\Character $character = null)
    {
        $this->character = $character;

        return $this;
    }

    /**
     * Get character
     *
     * @return \App\Entity\Character
     */
    public function getCharacter()
    {
        return $this->character;
    }
}

