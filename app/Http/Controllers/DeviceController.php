<?php

namespace App\Http\Controllers;



class DeviceController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){

        $objeto = 'objeto';

        return response()->json([
            'dispositivo' => $objeto
        ]);
    }
}
