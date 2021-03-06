<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\RequestOptions;

/**
 * FareMasterPricerTbSearch
 *
 * @package Amadeus\Client\RequestOptions
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class FareMasterPricerTbSearch extends Base
{
    const FLIGHTTYPE_DIRECT = "D";
    const FLIGHTTYPE_NONSTOP = "N";
    const FLIGHTTYPE_CONNECTING = "C";

    const CABIN_ECONOMY = "Y";
    const CABIN_ECONOMY_STANDARD = "M";
    const CABIN_ECONOMY_PREMIUM = "W";
    const CABIN_BUSINESS = "C";
    const CABIN_FIRST_SUPERSONIC = "F";


    /**
     * @var int
     */
    public $nrOfRequestedPassengers;
    /**
     * @var int
     */
    public $nrOfRequestedResults;

    /**
     * @var bool
     */
    public $doTicketabilityPreCheck = true;

    /**
     * List of airline codes that the search is restricted to.
     *
     * e.g. ['LH', 'BA']
     * @var array
     */
    public $mandatoryAirlines = [];

    /**
     * Itinerary-level flight options
     *
     * Choose from self::FLIGHTTYPE_*
     *
     * @var array
     */
    public $requestedFlightOptions = [];

    /**
     * self::CABIN_*
     *
     * @var
     */
    public $cabinClass;
    /**
     * Passenger info
     *
     * @var Fare\MPPassenger[]
     */
    public $passengers = [];
    /**
     * Requested flight itinerary
     *
     * @var Fare\MPItinerary[]
     */
    public $itinerary = [];
}
