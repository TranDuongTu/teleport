<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/10/13
 * Time: 1:24 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;
use Teleport\ModelBundle\Entity\Airline;


/**
 * Class AirlineMapper
 * @package Teleport\ModelBundle\Mapper
 * @author Fredy
 */
class AirlineMapper extends ModelMapper {

    /**
     * @param array $data
     * @return mixed|void
     */
    public function map($data) {
        if ($data === null) return null;

        $airline = new Airline();
        if (isset($data['_id'])) {
            $airline->setId((string) $data['_id']);
        }
        if (isset($data['name'])) {
            $airline->setName($data['name']);
        }
        if (isset($data['nation'])) {
            $airline->setNation((string) $data['nation']);
        }
        if (isset($data['reputation'])) {
            $airline->setReputation($data['reputation']);
        }

        return $airline;
    }

    /**
     * @param $airline
     * @return array|void
     */
    public function invert($airline) {
        $data = array();

        if ($airline->getId() !== null) {
            $data['_id'] = $airline->getId();
        }
        if ($airline->getName() !== null) {
            $data['name'] = $airline->getName();
        }
        if ($airline->getNation() !== null) {
            $data['nation'] = $airline->getNation();
        }
        if ($airline->getReputation() !== null) {
            $data['reputation'] = $airline->getReputation();
        }

        return $data;
    }
}