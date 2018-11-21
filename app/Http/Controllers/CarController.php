<?php

namespace App\Http\Controllers;
use App\Mail\contactmail;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Car;
use Illuminate\Support\Facades\Mail;
use PhpParser\Comment;


class CarController extends Controller
{
    public function index(){
        $cars = Car::all();
        $posts = DB::table('posts')->orderBy('created_at', 'desc')->paginate(5);
        $cities = ["Airport Podgorica","Airport Tivat","Podgorica", "Nikšić","Pljevlja",
            "BijeloPolje", "Cetinje",
            "HercegNovi", "Berane",
            "Budva", "Ulcinj", "Tivat",
            "Rožaje", "Kotor", "Danilovgrad",
            "Mojkovac", "Plav", "Kolašin",
            "Žabljak","Plužine","Andrijevica","Šavnik"
        ];
        return view('pages.home', compact(['cars','cities', 'posts']));
    }

    public function fleet(){
        $cars = Car::all();
        return view('pages.fleet', compact('cars'));
    }

    public function show($id){
        $car = Car::find($id);
        return view('pages.details', compact('car'));
    }

    public function steps(){
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
        return view('pages.steps', compact(['cars','car','cities']));
    }

    public function stepsCar($id){
        $cars = Car::all();
        $car = Car::find($id);
        $cities = ["Airport Podgorica","Airport Tivat","Podgorica", "Nikšić","Pljevlja",
            "BijeloPolje", "Cetinje",
            "HercegNovi", "Berane",
            "Budva", "Ulcinj", "Tivat",
            "Rožaje", "Kotor", "Danilovgrad",
            "Mojkovac", "Plav", "Kolašin",
            "Žabljak","Plužine","Andrijevica","Šavnik"
        ];

        return view('pages.steps', compact(['cars','car','cities']));
    }
    public function contacts(){
        return view('pages.contacts');
    }

    public function sendMail()
    {
        $comment = (object) [
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'text' => $_POST['Comment']
        ];

        function getUserIP()
        {
            // Get real visitor IP behind CloudFlare network
            if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            }
            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = $_SERVER['REMOTE_ADDR'];

            if(filter_var($client, FILTER_VALIDATE_IP))
            {
                $ip = $client;
            }
            elseif(filter_var($forward, FILTER_VALIDATE_IP))
            {
                $ip = $forward;
            }
            else
            {
                $ip = $remote;
            }

            return $ip;
        }
        $user_ip = getUserIP();

        $secretKey = "6Lc_H3wUAAAAAFrY5a8MEsZ40H2smUDoVIQuRSJ5";
        $secretKeyClient = $_POST['g-recaptcha-response'];

        $respons = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$secretKeyClient."&remoteip=".$user_ip);
        $respons = json_decode($respons);

        if($respons->success && $respons->score > 0.5)
        {
            $user = new \stdClass();
            $user->email= "mneproauto2018@gmail.com";
            $user2 = new \stdClass();
            $user2->email = $_POST['email'];
            $confirmationEmail = $_POST['email'];
//            \Mail::to($user)->send(new contactmail($comment));
//            \Mail::to($user2)->send(new contactmail($comment));
            return "uspjelo";
        }
        else
        {
            return "fail";
        }
    }

    public function modal($id){
        return redirect('/modal');
    }

    public function services(){
        return view('pages.services');
    }

    public function longTerm(){
        return view('pages.long-term');
    }
    public function test(){

        $cities = ["Airport Podgorica","Airport Tivat","Podgorica", "Nikšić","Pljevlja",
            "BijeloPolje", "Cetinje",
            "HercegNovi", "Berane",
            "Budva", "Ulcinj", "Tivat",
            "Rožaje", "Kotor", "Danilovgrad",
            "Mojkovac", "Plav", "Kolašin",
            "Žabljak","Plužine","Andrijevica","Šavnik"
        ];

        sort($cities);

        return view('pages.test', compact(['cities','car','cars']));
    }

    public function faq(){
        return view('pages.faq');
    }

    public function rentalTerms(){
        return view('pages.rentalTerms');
    }


}
