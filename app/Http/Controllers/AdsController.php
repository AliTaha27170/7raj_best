<?php

namespace App\Http\Controllers;

use App\Models\ads;
use App\Models\category;
use Illuminate\Http\Request;

class AdsController extends Controller
{  
   
    //*START* >>>>>>>>>>
    public function show() 
    {
        $ads = ads::paginate(10);
        return response()->json($ads);
    }
    //*END*               >>>>>>>>>>           >>>>>>>>>          >>>>>>>>>>> 


    
    //*START* >>>>>>>>>>
    public function add() 
    {
        # code...
    }
    //*END*               >>>>>>>>>>           >>>>>>>>>          >>>>>>>>>>> 

   
    //*START* >>>>>>>>>>
    public function store(Request $request) 
    {
        # code...
    }
    //*END*               >>>>>>>>>>           >>>>>>>>>          >>>>>>>>>>> 



       
    //*START* >>>>>>>>>>
    public function edit(Request $request, $id) 
    {
        # code...
    }
    //*END*               >>>>>>>>>>           >>>>>>>>>          >>>>>>>>>>> 



       
    //*START* >>>>>>>>>>
    public function update(Request $request,$id)
    {
        # code...
    }
    //*END*               >>>>>>>>>>           >>>>>>>>>          >>>>>>>>>>> 

      //*START* >>>>>>>>>>


      public function delete(Request $request,$id)
      {
          # code...
      }
      //*END*               >>>>>>>>>>           >>>>>>>>>          >>>>>>>>>>> 

}
