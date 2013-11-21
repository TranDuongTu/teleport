<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/21/13
 * Time: 6:09 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;


interface IStopRepository {
    public function findByFlight($flightId);
}