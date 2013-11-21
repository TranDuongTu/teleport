<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/21/13
 * Time: 6:13 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;


use Teleport\ModelBundle\Entity\Stop;

class StopMapper extends ModelMapper {

    /**
     * Map data from database to model
     *
     * @param array $data
     * @return mixed mapped model
     */
    public function map($data)
    {
        if ($data === null) return null;

        $stop = new Stop();
        $stop->setId((string) $data['_id']);

        if (isset($data['flight'])) {
            $stop->setFlight((string) $data['flight']);
        }

        if (isset($data['order'])) {
            $stop->setOrder($data['order']);
        }

        if (isset($data['airport'])) {
            $stop->setAirport((string) $data['airport']);
        }

        return $stop;
    }

    /**
     * Inverse model back to data to store to database
     *
     * @param $model
     * @return array inverse data
     */
    public function invert($model)
    {
        $data = array();
        if ($model->getId() !== null) {
            $data['_id'] = new \MongoId($model->getId());
        }
        if ($model->getFlight() !== null) {
            $data['flight'] = $model->getFrom();
        }
        if ($model->getOrder() !== null) {
            $data['order'] = $model->getOrder();
        }
        if ($model->getAirport() !== null) {
            $data['airport'] = $model->getAirport();
        }

        return $data;
    }
}