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
//        var_dump($respons);
        $respons = json_decode($respons);

/*
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, array(
            'secret' => $secretKey,
            'response' => $secretKeyClient,
            'remoteip' => $remoteip
        ));
        $curlData = curl_exec($curl);
        var_dump($curlData);
        var_dump("<br>");
        $respons = json_decode($curlData);
*/
        // TODO && $respons->score > 0.5 DODATI
        if($respons->success )
        {
//            var_dump($respons);
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
//            var_dump($respons);
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
