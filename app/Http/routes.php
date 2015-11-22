<?php
use kamranahmedse\Geocode;
use League\Csv\Reader;
use App\Incident;


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


    return view('welcome');

});

Route::get('data', function(){
    $incidents = Cache::remember('incidents', 60, function() {
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
        $reader = Reader::createFromString($csv, "\n");
        $data = $reader->fetchAssoc();

        $incidents = [];

        foreach ($data as $index => $row) {
            $incident = new Incident();
            $incident->description = $row['Incident description'];
            $incident->date = $row['Incident date'];
            $incident->created_at = $row['Timestamp'];
            $incident->city = $row['Incident city'];
            $incident->country = $row['Incident country'];
            $incident->type = $row['Type of Incident'];
            $incident->link = $row['LINK TO ARTICLE OR SOURCE OF INFORMATION'];
            $incident->victimCountry = $row['Victim\'s country of origin'];
            $incident->victimGender = $row['Victim\'s gender'];
            $incident->reporterType = $row['Who is reporting?'];
            $incident->reporterContact = $row['Your contact information (Optional)'];

            //get geocode
            $geocode = new Geocode($incident->address());
            $incident->lat = $geocode->getLatitude();
            $incident->long = $geocode->getLongitude();

            $incidents[] = $incident;


            //dump($incident);

        }
        return $incidents;
    });




    // dd($categoriesCount);
    return $incidents;
});



// $categoriesCount = [];
// $categoriesCount[0] = 0; //    Others
// $categoriesCount[1] = 0; //    Verbal Harrassment
// $categoriesCount[2] = 0; //    Physical Harrassment
// $categoriesCount[3] = 0; //    Destruction of property
// $categoriesCount[4] = 0; //    Physical attack on the victim
// $categoriesCount[5] = 0; //    Exclusion
//
// foreach($incidents as $i=>$item ){
//     switch($item['Type of Incident']) {
//          case "Verbal Harrassment":
//              $categoriesCount[1]++;
//              break;
//          case "Physical Harrassment":
//              $categoriesCount[2]++;
//              break;
//          case "Destruction of property":
//              $categoriesCount[3]++;
//              break;
//
//          case "Physical attack on the victim":
//              $categoriesCount[4]++;
//              break;
//          case " Exclusion":
//              $categoriesCount[5]++;
//              break;
//          default:
//              $categoriesCount[0]++;
//      }
//  }
