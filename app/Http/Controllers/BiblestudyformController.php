<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biblestudyform;

class BiblestudyformController extends Controller
{

    public function bsform (Request $request)
    {
        $biblerequest = new Biblestudyform;
        return view('bsform', compact('biblerequest'));
    }

    public function bscreateform (Request $request)
    {
        $biblerequest = new Biblestudyform;
        $biblerequest-> complete_name = $request -> complete_name;
        $biblerequest-> email_address = $request -> email_address;
        $biblerequest-> contact_number = $request -> contact_number;
        $biblerequest-> birthdate = $request -> birthdate;
        $biblerequest-> religious_affiliation = $request -> religious_affiliation;
        $biblerequest-> bible_study_date = $request -> cbible_study_date;
        $biblerequest-> bible_study_time = $request -> bible_study_time;
        $biblerequest-> bible_study_address = $request -> bible_study_address;
            if ($biblerequest ->save()){
                 return redirect ('/thank-you');
                }
                return redirect('/thank-you');
            }
        
            public function bstable (Request $request)
            {
                $biblerequest = Biblestudyform::all();
                return view('bstable', compact('biblerequest'));
            }
            public function bsthankyou (Request $request)
            {
                $biblerequest = new Biblestudyform;
                return view('bsthankyou');
            }
        }