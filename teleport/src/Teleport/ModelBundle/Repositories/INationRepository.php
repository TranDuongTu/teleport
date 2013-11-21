<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/10/13
 * Time: 1:21 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;


interface INationRepository {
    function findById($id);
    function save($nation);
}