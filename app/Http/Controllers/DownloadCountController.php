<?php
/**
 * Created by PhpStorm.
 * User: phyochan
 * Date: 10/6/15
 * Time: 12:25 AM
 */

namespace App\Http\Controllers;


use App\Download;

class DownloadCountController extends Controller{



    public function show(){

        $downloads = Download::all();



        return view('mobile.index') -> with('downloads',$downloads);
    }

    public function showId(){

        $downloads = Download::all();

        return ($downloads);
    }


    public function uploadshow(){

        return view('mobile.upload');
    }


    public function ApkUpdate($id){

        $downloads = Download::findOrNew($id);



        $downloads -> link = \Input::get('link');


        $downloads -> save();


        return view('mobile.upload');



    }

    public function downloadApp($id){

        $downloads = Download::findOrNew($id);

        $downloads -> count = $downloads -> count + 1 ;

        $downloads -> save();

        return \Redirect::to($downloads -> link);
    }
}