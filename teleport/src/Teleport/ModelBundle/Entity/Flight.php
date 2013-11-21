<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 10:52 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Entity;


class Flight {

    protected $_id;

    protected $from;

    protected $to;

    protected $enroll;

    protected $available;

    protected $airline;

    protected $time;

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
     * @param mixed $airline
     */
    public function setAirline($airline)
    {
        $this->airline = $airline;
    }

    /**
     * @return mixed
     */
    public function getAirline()
    {
        return $this->airline;
    }

    /**
     * @param mixed $available
     */
    public function setAvailable($available)
    {
        $this->available = $available;
    }

    /**
     * @return mixed
     */
    public function getAvailable()
    {
        return $this->available;
    }

    /**
     * @param mixed $enroll
     */
    public function setEnroll($enroll)
    {
        $this->enroll = $enroll;
    }

    /**
     * @return mixed
     */
    public function getEnroll()
    {
        return $this->enroll;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

}//End class