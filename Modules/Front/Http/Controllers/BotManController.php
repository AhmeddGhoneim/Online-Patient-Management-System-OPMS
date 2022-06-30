<?php

namespace Modules\Front\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use BotMan\BotMan\Messages\Incoming\Answer;

class BotManController extends Controller
{
    
    public function handle()
    {
        $botman = app('botman');   
        $botman->hears('{message}', function($botman, $message) {

            $message=strtolower($message);
            $text=explode(" ", $message);
            $department=$this->department($text);

            if ($message == 'hi') {
                $this->askName($botman);
            }elseif(str_contains($message, 'doctor')){
                $this->DoctorKeyWord($botman);
            }elseif($department){
                $botman->reply("Get well soon &#128519");
                $botman->reply("After analyzing the symptoms, we advise you to visit the doctors of the " . $department );

            }else{
                $botman->reply("Hello Explain to me how I can help you &#128519");
            }
   
        });
   
        $botman->listen();
    }
   
    /**
     * Place your BotMan logic here.
     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
   
            $name = $answer->getText();
            $this->say('Nice to meet you '.$name);
            $this->say('how can I help you &#128512');
        });
    }
    public function DoctorKeyWord($botman){
        $botman->reply("We have doctors of the highest level &#128519");
        $botman->reply("Tell me about some of the symptoms you are experiencing so that you can find the right doctor &#128519");
    }

    public function department($text)
    {
         $departments=[];
        foreach($text as $symptom)
        {
            if(isset(config('symptoms')[$symptom])){
               
                array_push($departments,config('symptoms')[$symptom]);

            }
        }
        $result = array_count_values($departments);
        asort($result);
        end($result);
        $department = key($result);
       return $department;
        
    }


 
}
