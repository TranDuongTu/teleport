<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 11:31 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;
use Teleport\ModelBundle\Entity\Flight;


/**
 * TopicMapper
 *
 * @author Fredy <tranduongtu92@gmail.com>
 */
class FlightMapper extends ModelMapper {

    /**
     * {@inheritDoc}
     */
    public function map($data) {
        if ($data === null) return null;

        $flight = new Flight();
        $flight->setId((string) $data['_id']);

        if (isset($data['from'])) {
            $flight->setFrom((string) $data['from']);
        }

        if (isset($data['to'])) {
            $flight->setTo((string) $data['to']);
        }

        if (isset($data['airline'])) {
            $flight->setAirline((string) $data['airline']);
        }

        if (isset($data['time'])) {
            $flight->setTime($data['time']);
        }

        return $flight;
    }

    /**
     * {@inheritDoc}
     */
    public function invert($flight) {
        $data = array();
        if ($flight->getId() !== null) {
            $data['_id'] = new \MongoId($flight->getId());
        }
        if ($flight->getFrom() !== null) {
            $data['from'] = $flight->getFrom();
        }
        if ($flight->getTo() !== null) {
            $data['to'] = $flight->getTo();
        }
        if ($flight->getAirline() !== null) {
            $data['airline'] = $flight->getAirline();
        }
        if ($flight->getTime() !== null) {
            $data['time'] = $flight->getTime();
        }

        return $data;
    }
}