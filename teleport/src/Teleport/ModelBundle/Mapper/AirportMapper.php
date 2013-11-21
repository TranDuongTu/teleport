<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/10/13
 * Time: 1:32 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;


use Teleport\ModelBundle\Entity\Airport;

class AirportMapper extends ModelMapper {
    /**
     * @param array $data
     * @return mixed|void
     */
    public function map($data) {
        if ($data === null) return null;
        $airport = new Airport();

        if (isset($data['_id'])) {
            $airport->setId((string) $data['_id']);
        }
        if (isset($data['code'])) {
            $airport->setCode($data['code']);
        }
        if (isset($data['name'])) {
            $airport->setName($data['name']);
        }
        if (isset($data['reputation'])) {
            $airport->setReputation($data['reputation']);
        }

        return $airport;
    }

    /**
     * @param $airport
     * @internal param $model
     * @return array|void
     */
    public function invert($airport) {
        $data = array();

        if ($airport->getId() !== null) {
            $data['_id'] = $airport->getId();
        }
        if ($airport->getCode() !== null) {
            $data['code'] = $airport->getCode();
        }
        if ($airport->getName() !== null) {
            $data['name'] = $airport->getName();
        }
        if ($airport->getReputation() !== null) {
            $data['reputation'] = $airport->getReputation();
        }

        return $data;
    }
}