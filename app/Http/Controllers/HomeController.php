<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    //
    public function dasboard()
    {

        $client = new Client(); //GuzzleHttp\Client
        $url = "https://newsapi.org/v2/top-headlines?country=id&apiKey=aa57a3f8ea8e43e19010f755fd0caa19";
        $urlBBC = "https://newsapi.org/v2/top-headlines?sources=bbc-news&apiKey=aa57a3f8ea8e43e19010f755fd0caa19";
        $response = $client->request('GET', $url);
        $responseBBC = $client->request('GET', $urlBBC);

        $responseBody = json_decode($response->getBody());
        $responseBodyBBC = json_decode($responseBBC->getBody());

        return view('home', ['artikel' => $responseBody->articles, 'bbc' =>$responseBodyBBC->articles]);
    }
    public function gameNews()
    {
        $client = new Client();

        $urlHead = "https://the-lazy-media-api.vercel.app/api/detail/2021/01/28/balan-wonderworld-preview";
        $urlGamesNews = "https://the-lazy-media-api.vercel.app/api/games?page=1";
        $urlGameConsoleNews = "https://the-lazy-media-api.vercel.app/api/games/console-game?page=1";
        $urlGameESportNews = "https://the-lazy-media-api.vercel.app/api/games/e-sport/?page=1";
        $urlUpdateGameNews = "https://the-lazy-media-api.vercel.app/api/games/news/?page=1";

        $responseHead = $client->request('GET',$urlHead);
        $responseGamesNews = $client->request('GET',$urlGamesNews);
        $responseGameConsoleNews = $client->request('GET',$urlGameConsoleNews);
        $responseGameESportNews = $client->request('GET',$urlGameESportNews);
        $responseUpdateGameNews = $client->request('GET',$urlUpdateGameNews);

        $responseHeadBody = json_decode($responseHead->getBody());
        $responseGamesNewsBody = json_decode($responseGamesNews->getBody());
        $responseGameConsoleNewsBody = json_decode($responseGameConsoleNews->getBody());
        $responseGameESportNewsBody = json_decode($responseGameESportNews->getBody());
        $responseUpdateGameNewsBody = json_decode($responseUpdateGameNews->getBody());

        return view('game', ['responseHead' => $responseHeadBody->results,
            'responseGameNews' => $responseGamesNewsBody, 'responseGameConsoleNews' => $responseGameConsoleNewsBody,
            'responseGameESportNews' => $responseGameESportNewsBody, 'responseUpdateGameNews' => $responseUpdateGameNewsBody]);
    }

    public function techNews()
    {
        $client = new Client();

        $urlTechNews = "https://the-lazy-media-api.vercel.app/api/tech?page=1";
        $urlTechUpdateNews = "https://the-lazy-media-api.vercel.app/api/tech/news?page=1";
        $urlTechTip = "https://the-lazy-media-api.vercel.app/api/tech/tip?page=1";

        $responseTechNews = $client->request('GET',$urlTechNews);
        $responseTechUpdateNews = $client->request('GET',$urlTechUpdateNews);
        $responseTechTip = $client->request('GET',$urlTechTip);

        $responseTechNewsBody = json_decode($responseTechNews->getBody());
        $responseTechUpdateNewsBody = json_decode($responseTechUpdateNews->getBody());
        $responseTechTipBody = json_decode($responseTechTip->getBody());

        return view('tech', ['responseTechNews' => $responseTechNewsBody,
            'responseTechUpdateNews' => $responseTechUpdateNewsBody,
            'responseTechTips' => $responseTechTipBody]);

    }
}
