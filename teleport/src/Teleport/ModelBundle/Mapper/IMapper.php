<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 11:03 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Mapper;
use Iterator;


/**
 * Interface for mapping between model and data store in database
 *
 * @author Fredy <tranduongtu92@gmail.com>
 */
interface IMapper extends Iterator {

    /**
     * Map data from database to model
     *
     * @param array $data
     * @return mixed mapped model
     */
    public function map($data);

    /**
     * Inverse model back to data to store to database
     *
     * @param $model
     * @return array inverse data
     */
    public function invert($model);
}