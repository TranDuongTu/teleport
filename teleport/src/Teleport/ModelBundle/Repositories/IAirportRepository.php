<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/10/13
 * Time: 1:20 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;


interface IAirportRepository {
    function findById($id);
    function save($airport);
}