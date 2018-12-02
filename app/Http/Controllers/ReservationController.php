<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reservation;
use App\Mail\reservationMail;
use App\Mail\reservationEmail;
use App\Car;

class ReservationController extends Controller
{
    public function createReservation(Request $request)
    {

        // --- Counts numbers of days

        /*$pickUpDate = $request->date;
        $pickUpTime = $request->time;
        $pickUpDate = str_replace('/', '-', $pickUpDate);


        $dropOfDate = $request->date1;
        $dropOfTime = $request->time1;
        $dropOfDate = str_replace('/', '-', $dropOfDate);

        $datetime1 = new \DateTime($pickUpDate." ".$pickUpTime);
        $datetime2 = new \DateTime($dropOfDate." ".$dropOfTime);

        $interval= $datetime2->diff($datetime1);
        $days = $interval->format('%a');
        //var_dump($interval,$days);

        // --- make reservation object;
        $reservatin = new Reservation();
        $reservatin->fill([
            'number_of_days' => $days,
            'total_price' => $days,
            'start_date' => $days,
            'end_date' => $days,
            'start_location' => $days,
            'end_location' => $days
            ]);
           */
        // reservationsproauto@europe.com
        // darko.vucetic7@gmail.com

        $reservation = (object)($request);
        $user = new \stdClass();
        $user->email = "reservationsproauto@europe.com";

        $secretKey = "6Lc_H3wUAAAAAFrY5a8MEsZ40H2smUDoVIQuRSJ5";
        $secretKeyClient = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];
        var_dump('reponse je ',$secretKeyClient);
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array('secret' => $secretKey, 'response' => $secretKeyClient, 'remoteip' => $remoteip);

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data)
            )
        );
        $context  = stream_context_create($options);
        $respons = file_get_contents($url, false, $context);
        //$respons = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$secretKeyClient."&remoteip=".$remoteip);
        var_dump($respons);
        $respons = json_decode($respons);
        // TODO $respons->score > 0.5 DODATI
        if($respons->success)
        {
            var_dump($respons);
            \Mail::to($user)->send(new reservationEmail($request));
            return "uspjelo";
        }
        else
        {
            var_dump($respons);
            return "fail";
        }
    }

    public function orderForm(){
        $cars = Car::all();
        $cities = ["Airport Podgorica","Airport Tivat","Podgorica", "Nikšić","Pljevlja",
            "BijeloPolje", "Cetinje",
            "HercegNovi", "Berane",
            "Budva", "Ulcinj", "Tivat",
            "Rožaje", "Kotor", "Danilovgrad",
            "Mojkovac", "Plav", "Kolašin",
            "Žabljak","Plužine","Andrijevica","Šavnik"
        ];
        $car = 0;
        sort($cities);
        $orderForm = (object) $_POST;
        return view('pages.steps', compact(['orderForm','cities','car','cars']));
    }
}


/*
 * date:
 * date1:
 * time:
 * time1:
 * email:
 * firstname:
 * lastname:
 * location1:
 * location2:
 * phone:
 * specialrequests:
 *
 *
 *
 *
 *
 *
 *
 * */