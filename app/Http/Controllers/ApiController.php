<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{

    /**
     * used to Get the movies of X-men information
     *
     * @return Array
     */
    public function GetXmen(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.nytimes.com/svc/movies/v2/reviews/search.json?query=X-Men&api-key=qWqd1uVRGLN0KyeTxeBaTlI13uoQIeAM');
        $data = json_decode($response->getBody()->getContents(), true);

        $movies = [];
        foreach($data['results'] as $movie){
            if(isset($movie['multimedia'])){
                $movies[] = [
                    'name' => $movie['display_title'],
                    'summary' => $movie['summary_short'],
                    'publication_date' => $movie['publication_date'],
                    'multimedia' => $movie['multimedia']['src']
                ];
            }
        }
        return $movies;
    }

    /**
     * used to Get the movies of Deadpool information
     * 
     * @return Array
     */
    public function GetDeadPool(){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://api.nytimes.com/svc/movies/v2/reviews/search.json?query=Deadpool&api-key=qWqd1uVRGLN0KyeTxeBaTlI13uoQIeAM');
        $data = json_decode($response->getBody()->getContents(), true);

        $movies = [];
        foreach($data['results'] as $movie){
            if(isset($movie['multimedia'])){
                $movies[] = [
                    'name' => $movie['display_title'],
                    'summary' => $movie['summary_short'],
                    'publication_date' => $movie['publication_date'],
                    'multimedia' => $movie['multimedia']['src']
                ];
            }
        }
        return $movies;
    }
}
