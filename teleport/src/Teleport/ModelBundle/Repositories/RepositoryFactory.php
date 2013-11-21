<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/9/13
 * Time: 11:25 PM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\ModelBundle\Repositories;
use Teleport\ModelBundle\Repositories\Mapper\AirlineRepository;
use Teleport\ModelBundle\Repositories\Mapper\AirportRepository;
use Teleport\ModelBundle\Repositories\Mapper\FlightRepository;
use Teleport\ModelBundle\Repositories\Mapper\NationRepository;
use Teleport\ModelBundle\Repositories\Mapper\StopRepository;
use Teleport\ModelBundle\Repositories\Mapper\TicketRepository;


/**
 * RepositoryFactory
 *
 * @author Fredy <tranduongtu92@gmail.com>
 */
class RepositoryFactory {

    /**
     * @var LoggableConnection|\MongoDB
     */
    protected $db;

    /**
     * @var ServiceContainer
     */
    protected $container;

    /**
     * Constructor
     *
     * @param $env
     * @param $container
     */
    public function __construct($env, $container) {
        $client = new \MongoClient();
        $this->container = $container;

        $this->db = $client->teleport;
    }

    /**
     * Get repository
     *
     * @param $collection
     * @return mixed
     */
    public function getRepository($collection) {
        switch ($collection) {
            case 'Flight':
                $flight = new FlightRepository($this->db, $collection);
                $flight->setContainer($this->container);
                return $flight;
            case 'Airline':
                $airline = new AirlineRepository($this->db, $collection);
                $airline->setContainer($this->container);
                return $airline;

            case 'Airport':
                $airport = new AirportRepository($this->db, $collection);
                $airport->setContainer($this->container);
                return $airport;

            case 'Nation':
                $nation = new NationRepository($this->db, $collection);
                $nation->setContainer($this->container);
                return $nation;

            case 'Ticket':
                $ticket = new TicketRepository($this->db, $collection);
                $ticket->setContainer($this->container);
                return $ticket;
            case 'Stop':
                $stop = new StopRepository($this->db, $collection);
                $stop->setContainer($this->container);
                return $stop;
        }
    }
}