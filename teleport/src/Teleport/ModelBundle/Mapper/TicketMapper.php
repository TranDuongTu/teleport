<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/12/13
 * Time: 12:23 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;


use Teleport\ModelBundle\Entity\Ticket;

class TicketMapper extends ModelMapper {

    /**
     * @param array $data
     * @return mixed|void
     */
    public function map($data) {
        if ($data == null) return null;

        $ticket = new Ticket();
        if (isset($data['_id'])) {
            $ticket->setId((string) $data['_id']);
        }
        if (isset($data['flight'])) {
            $ticket->setFlight((string) $data['flight']);
        }
        if (isset($data['type'])) {
            $ticket->setType($data['type']);
        }
        if (isset($data['price'])) {
            $ticket->setPrice($data['price']);
        }

        return $ticket;
    }

    /**
     * @param $ticket
     * @internal param $nation
     * @return array|void
     */
    public function invert($ticket) {
        $data = array();

        if ($ticket->getId() !== null) {
            $data['_id'] = $ticket->getId();
        }
        if ($ticket->getType() !== null) {
            $data['type'] = $ticket->getType();
        }
        if ($ticket->getFlight() !== null) {
            $data['flight'] = $ticket->getFlight();
        }
        if ($ticket->getPrice() !== null) {
            $data['price'] = $ticket->getPrice();
        }

        return $data;
    }
}