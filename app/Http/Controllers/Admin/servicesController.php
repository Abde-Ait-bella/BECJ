<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class servicesController extends Controller
{
    public function store(Request $request){
        Service::whereNotIn('id', $request->id ?: [])->delete();
        foreach ($request->titre as $index => $titre) {
            $id = @$request->id[$index];
            $icone = $request->icone[$index];
            $titre = $request->titre[$index];
            $description = $request->description[$index];
            if (!$titre) {
                continue;
            }
            if ($id) {
                $services = Service::find($id);
            }else{
                $services = new Service();
            }
            $services->icone = $icone;
            $services->titre = $titre;
            $services->description = $description;
            $services->save();
        }
        return redirect('/admin/dashbord');
    }
}
