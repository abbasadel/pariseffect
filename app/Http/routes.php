<?php
use kamranahmedse\Geocode;
use League\Csv\Reader;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */

Route::get('/', function () {

    $data = Cache::remember('incidents', 60, function() {
        $link = 'https://docs.google.com/spreadsheets/d/1pgSMWiUYHPJYhWELkexpszeNmRhO2rGna4GUB-5y_5M/pub?output=csv';
        $geocodeURL = 'https://maps.googleapis.com/maps/api/geocode/json?key=AIzaSyCEM3edAHanZa360b3hPAsLbuXs-s8KAqc&address=';

        $csv = $content = file_get_contents($link);
        /*
            Timestamp
            Incident description
            Type of Incident
            Incident date
            Incident city
            Victim's gender
            Victim's country of origin
            LINK TO ARTICLE OR SOURCE OF INFORMATION
            Your contact information (Optional)
            Incident country
            Who is reporting?
         */
        $data = Reader::createFromString($csv, "\n")->fetchAssoc();

        foreach ($data as $index => &$row) {
            $address = $row['Incident city'] . ', ' . $row['Incident country'];
            $geocode = new Geocode($address);
            $row['lat'] = $geocode->getLatitude(); // returns the latitude of the address
            $row['lng'] = $geocode->getLongitude(); // returns the longitude of the address

            // dump($row);

        }
        // dd($data);
        return $data;
    });

    dd($data);

});
