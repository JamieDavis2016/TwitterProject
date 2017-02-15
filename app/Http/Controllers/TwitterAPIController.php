<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class TwitterAPIController extends Controller
{
public function __construct() {
        require_once ('C:\xampp\htdocs\TwitterProject\vendor\jublonet\codebird-php\src\codebird.php');
        \Codebird\Codebird::setConsumerKey(env('TwitterKey'), env('TwitterSecret'));
        $this->api = \Codebird\Codebird::getInstance();
}
    
    public function TwitterData(Request $search) {
        if($search->search == null) {
            $search->search = "#technology";
        }
        $cb = \Codebird\Codebird::getInstance();
        $cb->setToken(env('AccessToken'), env('AccessTokenSecret'));
        $params = array('q'=>$search->search,'lang'=>'en'); 
        $reply = (array) $cb->search_tweets($params); 
        $data = (array) $reply['statuses'];
        $params2 = array('q'=>'@google');
        $test = $cb->search_tweets($params2);
        $data2 = $cb->search_tweets($params2);
        //dd($params);
/*        $s = count($reply['statuses']); 
        for ($a = 0; $a < $s; $a++) {

        $status = $data[$a];
              $b = $status;
              $b->text;
          }*/
        $fp = fopen('results.json', 'w');
        fwrite($fp, json_encode($data2));
        fclose($fp);
        return View::make('welcome', compact('data'));
    }
    
    public function create() {
        return 'create';
    }
    
    public function AdvancedTwitterData(Request $request) {
        if($request->advsearch == null) {
            $request->advsearch == "#computerscience";
        }
        $cb = \Codebird\Codebird::getInstance();
        $params = array();
    }
}
//searches the tweets
//changing the $params to SearchCriteria()  //paramaters of what is being searched and in what language