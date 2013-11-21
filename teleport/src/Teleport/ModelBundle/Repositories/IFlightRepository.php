<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 11:28 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;
use Teleport\ModelBundle\Entity\Topic;


/**
 * ITopicRepository
 *
 * @author Fredy <tranduongtu92@gmail.com>
 */
interface IFlightRepository {

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
     * @param Flight $flight
     * @return void
     */
    public function save($flight);
}