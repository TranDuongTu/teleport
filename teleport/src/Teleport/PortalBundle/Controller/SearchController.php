<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Fredy
 * Date: 11/10/13
 * Time: 1:46 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Teleport\PortalBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SearchController extends Controller {

    /**
     * Detail information of a particular flight
     *
     * @param $flightId
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function flightDetailAction($flightId) {
        //Get the flight record
        $flight = $this->get('teleport.flight')->findById($flightId);
        if ($flight === null) {
            return new Response('{}');
        }

        //Convert flight object to an array
        $json = array();
        $json['_id'] = $flight->getId();
        $json['airline'] = $flight->getAirline();
        $json['from'] = $flight->getFrom();
        $json['to'] = $flight->getTo();
        $json['time'] = $flight->getTime();

        return new Response(json_encode($json));
    }

    /**
     * Response to request about nation
     *
     * @param $nationId
     * @return Response
     */
    public function nationDetailAction($nationId) {
        //Get nation
        $nation = $this->get('teleport.nation')->findById($nationId);
        if ($nation === null) {
            return new Response('{}');
        }

        //Convert to array object
        $json = array();
        $json['_id'] = $nation->getId();
        $json['name'] = $nation->getName();

        return new Response(json_encode($json));
    }


    /**
     * Query base on airline's id
     *
     * @param $airlineId
     * @return Response
     */
    public function airlineDetailAction($airlineId) {
        //Get airline
        $airline = $this->get('teleport.airline')->findById($airlineId);
        if ($airline === null) {
            return new Response('{}');
        }

        //Convert to array
        $json = array();
        $json['_id'] = $airline->getId();
        $json['name'] = $airline->getName();
        $json['nation'] = $airline->getNation();
        $json['reputation'] = $airline->getReputation();

        return new Response(json_encode($json));
    }

    /**
     * Request a airport
     *
     * @param $airportId
     * @return Response
     */
    public function airportDetailAction($airportId) {
        //Get airport
        $airport = $this->get('teleport.airport')->findById($airportId);
        if ($airport === null) {
            return new Response('{}');
        }

        //Convert to array
        $json = array();
        $json['_id'] = $airport->getId();
        $json['name'] = $airport->getName();
        $json['code'] = $airport->getCode();
        $json['nation'] = $airport->getNation();
        $json['reputation'] = $airport->getReputation();

        return new Response(json_encode($json));
    }

    /**
     * Search in a range of price
     *
     * @param $from
     * @param $to
     * @param $lowerPrice
     * @param $upperPrice
     * @param $maxStops
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function ticketSearchAction($from, $to, $lowerPrice, $upperPrice, $maxStops) {
        //Get all tickets
        $tickets = $this->get('teleport.ticket')->findAll();

        //Flight repository to filter
        $flights = $this->get('teleport.flight');

        // Airport for destinations
        $airports = $this->get('teleport.airport');

        //Stop repository
        $stops = $this->get('teleport.stop');

        //Filter
        $okTickets = array();
        foreach ($tickets as $ticket) {
            //Price condition
            if ($ticket->getPrice() < $lowerPrice || $ticket->getPrice() > $upperPrice)
                continue;

            //Destination conditions
            $ticketFlight = $flights->findById($ticket->getFlight());
            $fromAirport = $airports->findById($ticketFlight->getFrom());
            $toAirport = $airports->findById($ticketFlight->getTo());
            if ($fromAirport->getCode() != $from || $toAirport->getCode() != $to)
                continue;

            //Stops condition
            $ticketStops = $stops->findByFlight($ticket->getFlight());
            if (count($ticketStops) > $maxStops)
                continue;

            $okTickets[] = $ticket;
        }

        //Construct JSON
        $jsonArray = array();
        foreach ($okTickets as $ticket) {
            $json = array();
            $json['_id'] = $ticket->getId();
            $json['flight'] = $ticket->getFlight();
            $json['price'] = $ticket->getPrice();
            $json['type'] = $ticket->getType();
            $jsonArray[] = $json;
        }

        return new Response(json_encode($jsonArray));
    }

}//End controller