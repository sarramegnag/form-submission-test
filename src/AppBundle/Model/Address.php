<?php

namespace AppBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Address
{
    /**
     * @Assert\NotBlank()
     */
    private $city;

    public function __construct($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }
}