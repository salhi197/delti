<?php



namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;

use App\Wilaya;



class StaticDataController extends Controller

{
    public function dairas(Wilaya $wilaya)
    {
        $dairas = $wilaya->dairas()->orderBy('name')->get();
        $data = [];
        foreach ($dairas as $daira) {
            $data[] = [
                'id' => $daira->id,
                'name' => $daira->name,
            ];
        }
        return response()->json($data);
    }

    public function communes(Wilaya $wilaya)
    {
        $communes = $wilaya->communes()->orderBy('name')->get();
        $data = [];
        foreach ($communes as $commune) {
            $data[] = [
                'id' => $commune->id,
                'name' => $commune->name,
            ];
        }
        return response()->json($data);
    }

}

