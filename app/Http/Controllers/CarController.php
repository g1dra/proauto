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

        $secretKey = "6Lc_H3wUAAAAAFrY5a8MEsZ40H2smUDoVIQuRSJ5";
        $secretKeyClient = $_POST['g-recaptcha-response'];
        $remoteip = $_SERVER['REMOTE_ADDR'];

        $respons = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$secretKeyClient."&remoteip=".$remoteip);

        $respons = json_decode($respons);

        if($respons->success && $respons->score > 0.5)
        {
            var_dump($respons);
            $user = new \stdClass();
            $user->email= "reservationsproauto@europe.com";
            $user2 = new \stdClass();
            $user2->email = $_POST['email'];
            $confirmationEmail = $_POST['email'];
            \Mail::to($user)->send(new contactmail($comment));
            \Mail::to($user2)->send(new contactmail($comment));
            return "uspjelo";
        }
        else
        {
            var_dump($respons);
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
