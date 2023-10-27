<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Storage;
use App\Models\Kat;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}

class KatController extends Controller
{
    public function index() {
        return view('kat');
    }

    public function new(Request $request) {
        $data = $request->all();

        
        $this.validate($request, [
            'nome' => 'required|string',
            'idade' => 'required|numeric',
            'sexo' => 'required|string',
            'raca' => 'required|string',
            'resumo' => 'required|string',
        ]);

        $kat = new Kat();
        $kat->nome = $data['nome'];
        $kat->idade = $data['idade'];
        $kat->sexo = $data['sexo'];
        $kat->raca = $data['raca'];
        $kat->resumo = $data['resumo'];
        $kat->save();


        if (!$data['foto'] === null) {
            $image = file_get_contents($data['foto']);
        }
        if (!empty($image)) {
            Storage::put("storage/kat_images/profile.jpg", $image);
        }
    }
}
