<?php

namespace AppBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Person
{
    /**
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @Assert\Type(type="AppBundle\Model\Address")
     * @Assert\Valid()
     */
    private $address;

    public function __construct($name, $city)
    {
        $this->name = $name;
        $this->address = new Address($city);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return Person
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return Person
     */
    public function setAddress(Address $address)
    {
        $this->address = $address;

        return $this;
    }
}