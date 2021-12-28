<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Korisnik;

class KorisnikController extends Controller
{

    public function addKorisnika()
    {
        return view("welcome");
    }

    public function selectData()
    {
        $korisnici = Korisnik::all();
        return view("list-data", [
            "korisnici" => $korisnici
        ]);
    }

    public function storeKorisnika(Request $request)
    {
        $korisnik_obj = new Korisnik;
        //set values
        $korisnik_obj->name = $request->name;
        $korisnik_obj->lastname = $request->lastname;
        $korisnik_obj->mobile = $request->mobile;
        $korisnik_obj->home = $request->home;


        //save
        $korisnik_obj->save();

        //flash msg
        $request->session()->flash("success");

        //redirect
        return redirect("dashboard");
    }
}
