<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/21/13
 * Time: 6:10 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories\Mapper;


use Teleport\ModelBundle\Repositories\AbstractRepository;
use Teleport\ModelBundle\Repositories\IStopRepository;

class StopRepository extends AbstractRepository implements IStopRepository {

    /**
     * @param $flightId
     * @return array|null
     */
    public function findByFlight($flightId) {
        $items = $this->collection->find(array(
            'flight' => new \MongoId($flightId)
        ));
        $returnArray = array();

        if ($items === null)
            return null;

        foreach ($items as $item) {
            $returnArray[] = $this->mapper->map($item);
        }
        return $returnArray;
    }
}