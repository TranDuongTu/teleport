<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 10:59 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Entity;


class Ticket {
    protected $_id;

    protected $flight;

    protected $type;

    protected $price;

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->_id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->_id;
    }

    /**
     * @param mixed $flight
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;
    }

    /**
     * @return mixed
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }


}