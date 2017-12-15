<?php

namespace App\Entity;

/**
 * Character
 */
class Character
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var integer
     */
    private $level;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $weapons;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->weapons = new \Doctrine\Common\Collections\ArrayCollection();
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
     *
     * @return Character
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
     * Set level
     *
     * @param integer $level
     *
     * @return Character
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Add weapon
     *
     * @param \App\Entity\Weapon $weapon
     *
     * @return Character
     */
    public function addWeapon(\App\Entity\Weapon $weapon)
    {
        $this->weapons[] = $weapon;

        return $this;
    }

    /**
     * Remove weapon
     *
     * @param \App\Entity\Weapon $weapon
     */
    public function removeWeapon(\App\Entity\Weapon $weapon)
    {
        $this->weapons->removeElement($weapon);
    }

    /**
     * Get weapons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWeapons()
    {
        return $this->weapons;
    }
}

