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
        //$user->email = "darko.vucetic7@gmail.com";

        \Mail::to($user)->send(new reservationEmail($request));
        return "test";

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