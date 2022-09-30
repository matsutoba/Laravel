<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Tweet;
use App\Services\TweetService;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        //return view('tweet.index', ['name' => 'laravel']);
        
        // return View::make('tweet.index', ['name' => 'larabel']);

        // $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        //dd($tweets);

        // $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();

        return View::make('tweet.index', ['name' => 'larabel', 'version' => '8', 'tweets' => $tweets]);

    }
}
