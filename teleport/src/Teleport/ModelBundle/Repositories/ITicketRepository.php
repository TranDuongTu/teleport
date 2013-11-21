<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/12/13
 * Time: 12:30 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;


interface ITicketRepository {

    /**
     * Find in range of prices
     *
     * @param $lower
     * @param $upper
     * @return mixed
     */
    public function ticketsInRange($lower, $upper);

    /**
     * Find entity by id
     *
     * @param string $id entity's identifier
     * @return Topic|null
     */
    public function findById($id);

    /**
     * Save topic
     *
     * @param Ticket ticket
     * @return void
     */
    public function save($ticket);
}