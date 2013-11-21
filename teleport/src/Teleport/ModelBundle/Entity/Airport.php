<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 10:55 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Entity;


class Airport {
    protected $_id;

    protected $nation;

    protected $code;

    protected $name;

    protected $reputation;

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
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
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
     * @param mixed $nation
     */
    public function setNation($nation)
    {
        $this->nation = $nation;
    }

    /**
     * @return mixed
     */
    public function getNation()
    {
        return $this->nation;
    }

    /**
     * @param mixed $reputation
     */
    public function setReputation($reputation)
    {
        $this->reputation = $reputation;
    }

    /**
     * @return mixed
     */
    public function getReputation()
    {
        return $this->reputation;
    }


}