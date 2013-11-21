<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 11:13 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;
use Teleport\ModelBundle\Mapper\IMapper;


/**
 * AbstractRepository
 *
 * @author Fredy <tranduongtu92@gmail.com>
 */
abstract class AbstractRepository {

    /**
     * @var \MongoCollection
     */
    protected $collection;

    /**
     * @var IMapper
     */
    protected $mapper;

    /**
     * @var
     */
    protected $container;

    /**
     * Constructor
     *
     * @param \MongoDB $db
     * @param string $collection
     */
    public function __construct($db, $collection) {
        $this->collection = $db->$collection;
    }

    /**
     * @param $container
     */
    public function setContainer($container) {
        $this->container = $container;
    }

    /**
     * Set mapper for this repository
     *
     * @param $mapper
     */
    public function setMapper($mapper) {
        $this->mapper = $mapper;
    }

    /**
     * Find entity by id
     *
     * @param $id
     * @return mixed
     * @return mixed|null
     */
    public function findById($id) {
        $data = $this->collection->findOne(array(
            "_id" => new \MongoId($id),
        ));
        return $data ? $this->mapper->map($data) : null;
    }

    /**
     * Find all items in this collection
     *
     * @return array|null
     */
    public function findAll() {
        $items = $this->collection->find(array());
        $returnArray = array();

        if ($items === null)
            return null;

        foreach ($items as $item) {
            $returnArray[] = $this->mapper->map($item);
        }
        return $returnArray;
    }

    /**
     * Save entity
     *
     * @param $model
     */
    public function save($model) {
        $data = $this->mapper->invert($model);
        $this->colleciton->save($data);

        $model->setId($data['_id']);
    }
}