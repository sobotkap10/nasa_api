<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class AssetController extends Controller
{
  public function show(Request $request, $id)
  {
    $response = Http::get('https://images-api.nasa.gov/search?q='.$id)->json();

    if (isset($response['collection']['items']) && count($response['collection']['items'][0]) > 0) {

        switch ($response['collection']['items'][0]['data'][0]['media_type']) {
            case 'audio':
                $audioLink = Http::get($response['collection']['items'][0]['href'])->json()[0];
                $response['collection']['items'][0]['data'][0]['audio_link'] = $audioLink;
                return view('asset-audio', ['data' => $response['collection']['items'][0]['data'][0]]);    
                break;

            case 'image':
                return view('asset-image', ['data' => $response['collection']['items'][0]]);
                break;
        }

    }

    return abort(404);

  }
}
