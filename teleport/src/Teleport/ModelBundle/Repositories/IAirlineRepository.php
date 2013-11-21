<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/10/13
 * Time: 1:20 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;


interface IAirlineRepository {
    /**
     * @param $id
     * @return mixed
     */
    function findById($id);

    /**
     * @param $airline
     * @return mixed
     */
    function save($airline);
}