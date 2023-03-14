<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Taxpayer;
use App\Models\HttpCode;

class TaxpayerController extends Controller
{
    public function view(Request $request)
    {
        $taxpayers = Taxpayer::all();

        return response()->json([$taxpayers]);
    }

    public function show(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'taxpayer_id' => 'required|numeric',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors(), HttpCode::BAD_REQUEST);
        }

        $taxpayer_id = $request->taxpayer_id;

        $taxpayer = Taxpayer::find($taxpayer_id);

        if (!is_null($taxpayer))
        {
            return response()->json($taxpayer);
        }
        else{
            return response()->json([
                'message' => array('The taxpayer id do not exists.')
            ], HttpCode::BAD_REQUEST);
        }

    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname'         => 'required|string|max:200',
            'lastname'          => 'required|string|max:200',
            'businessName'      => 'required|string|max:200',
            'documentTypeId'    => 'required|numeric',
            'personId'          => 'required|string|max:11',
        ]);

        if ($validator->fails())
        {
            return response()->json($validator->errors()->toJson(), Http::BAD_REQUEST);
        }

        $taxpayer = new Taxpayer();
        $taxpayer->first_name      = $request->firstname;
        $taxpayer->last_name       = $request->lastname;
        $taxpayer->business_name   = $request->businessName;
        $taxpayer->document_type_id = $request->documentTypeId;
        $taxpayer->person_id       = $request->personId;
        $taxpayer->save();

        return response()->json([
            'message'       => '¡Taxpayer registered successfully!',
            'taxpayer'      => $taxpayer
        ], HttpCode::CREATED);
    }



}
