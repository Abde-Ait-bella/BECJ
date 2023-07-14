<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avis;

class AvisController extends Controller
{
    public function store(Request $request)
    {
        Avis::whereNotIn('id' , $request->id ?: [])->delete();
        foreach ($request->titre as $index => $title) {
            $id = @$request->id[$index];
            $sous_titre = $request->sous_titre[$index];
            $texte = $request->texte[$index];
            if (!$title) {
                break;
            }
            if ($id) {
                $avis = Avis::find($id);
            }else{
                $avis = new Avis();
            }
            $avis->titre = $title;
            $avis->sous_titre = $sous_titre;
            $avis->texte = $texte;
            $avis->save();
        }
     return redirect('/admin/dashbord');
    }
}
