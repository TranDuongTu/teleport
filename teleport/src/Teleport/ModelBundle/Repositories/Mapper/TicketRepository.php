<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/12/13
 * Time: 12:31 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories\Mapper;


use Teleport\ModelBundle\Repositories\AbstractRepository;
use Teleport\ModelBundle\Repositories\ITicketRepository;

class TicketRepository extends AbstractRepository implements ITicketRepository {

    /**
     * @param $lower
     * @param $upper
     * @return array|mixed
     */
    public function ticketsInRange($lower, $upper) {
        //Query database
        $data = null;
        $query = array(
            "price" => array('$gt' => intval($lower), '$lt' => intval($upper))
        );
        $data = $this->collection->find($query);

        //Return bunch of tickets
        $tickets = array();
        foreach ($data as $ticket) {
            $tickets[] = $this->mapper->map($ticket);
        }

        return $tickets;

    }//End method
}//End class