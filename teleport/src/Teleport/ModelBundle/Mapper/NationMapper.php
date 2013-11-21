<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/10/13
 * Time: 1:38 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;


use Teleport\ModelBundle\Entity\Nation;

class NationMapper extends ModelMapper {

    /**
     * @param array $data
     * @return mixed|void
     */
    public function map($data) {
        if ($data == null) return null;

        $nation = new Nation();
        if (isset($data['_id'])) {
            $nation->setId((string) $data['_id']);
        }
        if (isset($data['name'])) {
            $nation->setName($data['name']);
        }
        if (isset($data['population'])) {
            $nation->setPopulation($data['population']);
        }

        return $nation;
    }

    /**
     * @param $nation
     * @return array|void
     */
    public function invert($nation) {
        $data = array();

        if ($nation->getId() !== null) {
            $data['_id'] = $nation->getId();
        }
        if ($nation->getName() !== null) {
            $data['name'] = $nation->getName();
        }
        if ($nation->getPopulation() !== null) {
            $data['population'] = $nation->getPopulation();
        }

        return $data;
    }
}