<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 10:56 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Entity;


class Nation {
    protected $_id;

    protected $name;

    protected $population;

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
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $population
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }


}