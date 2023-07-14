<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Apropos;
use App\Models\Avis;
use App\Models\Service;

class HomeController extends Controller
{
    public function index(){
        $apropos = Apropos::all();
        if ($apropos->isEmpty()) {
            $apropos = new Apropos();
            $apropos->email = "examplegmailcom";
            $apropos->telephone = "+00012345688";
            $apropos->sous_titre = "Amazing Company";
            $apropos->titre = "Nos consultants experts vous accompagnent au quotidie";
            $apropos->description = "Sed ut perspiciatis unde omnis iste natus sit voluptatem accusantium doloremque laudanti totam aperiam eaquecy epsa abillo inventore veritatis architecto beatae";
            $apropos->element_1 = "Best Insurance Agency";
            $apropos->element_2 = "Trusted & Experience Insurance";
            $apropos->element_3 = "Dedicated Support & Security";
            $apropos->annees_experience = "25";
            $apropos->image = "";
            $apropos->chiffre_1 = 8563;
            $apropos->titre_1 = "Helath Insurance";
            $apropos->chiffre_2 = 263;
            $apropos->titre_2 = "Experience Team";
            $apropos->chiffre_3= 93;
            $apropos->titre_3 = "Awards Winning";
            $apropos->save();
        }
        $apropos = Apropos::find(1);
        $avis = Avis::all();
        $services = Service::all();
        return view('Home', ["avis" => $avis, "apropos" => $apropos, "services" => $services]);
    }
}
