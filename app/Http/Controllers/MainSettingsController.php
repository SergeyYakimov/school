<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainSettings;
use App\Goal;
use App\Format;
use App\Profession;
use App\About;
use App\Achievement;
use App\Abc;
use App\TargetCategory;
use App\Price;
use App\Video;
use Mail;

class MainSettingsController extends Controller
{
    //
    function index(){
    		$modules = [];
    		$modules["MainSettings"] = MainSettings::get()[0];

    		$goal = [];
    		$goal["Goal"] = Goal::get()[0];

    		$format = [];
    		$format["Format"] = Format::get()[0];

    		$profession = [];
    		$profession["Profession"] = Profession::get()[0];

    		$about = [];
    		$about["About"] = About::get()[0];

    		$achievements = Achievement::all();

    		$abcs = Abc::all();

    		$targets = TargetCategory::all();

    		$prices = Price::all();

            $videos = Video::all();

    		return view('welcome', array(
    			'modules' => $modules, 
    			'goal' => $goal,
    			'format' => $format,
    			'profession' => $profession,
    			'about' => $about,
    			'achievements' => $achievements,
    			'abcs' => $abcs,
    			'targets' => $targets,
    			'prices' => $prices,
                'videos' => $videos
    		)
    	);
		//return $view1;
    }
}
