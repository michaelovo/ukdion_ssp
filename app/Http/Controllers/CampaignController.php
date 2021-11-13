<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;

class CampaignController extends Controller
{
    public function index()
    {
        //$campaigns= Campaign::get();
        return view('layouts.campaigns.create');//,compact('campaigns'));
    }


    public function view()
    {
        $campaigns= Campaign::get();
        return view('layouts.campaigns.view',compact('campaigns'));

    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|string|unique:campaigns',
            'total_budget'=>'required|string',
            'daily_budget'=>'required|string',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:28',

        ]);

        $campaign = new Campaign;
        $campaign->name = $request->name;
        $campaign->total_budget = $request->total_budget;
        $campaign->daily_budget = $request->daily_budget;
        $campaign->start_date = $request->start_date;
        $campaign->end_date = $request->end_date;
        $image_url = cloudinary()->upload($request->file('image')->getRealPath(),['folder'=>'ukdion'],)->getSecurePath(); // save image to Cloudinary
        $campaign->image = $image_url;
        $campaign->save();
        return back()->with('success','Saved Successfully!');
    }

    public function edit($id)
    {
        $campaign = Campaign::where(['id'=>$id])->firstOrFail();
        return view('layouts.campaigns.edit',compact('campaign'));
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'name'=>['required','string',Rule::unique('campaigns', 'name')->ignore($id)],
            'total_budget'=>'required|string',
            'daily_budget'=>'required|string',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:28',

        ]);

        $campaign = campaign::findOrFail($id);
        $campaign->name = $request->name;
        $campaign->total_budget = $request->total_budget;
        $campaign->daily_budget = $request->daily_budget;
        $campaign->start_date = $request->start_date;
        $campaign->end_date = $request->end_date;
        
        // Start ---- check if image is change before updating
        if ($request->hasFile('image')) {
            $oldProfileImage =  $campaign->image; // get previous image from folder
            if (($campaign->image != null) && (File::exists($oldProfileImage))) { // remove previous image from folder
              unlink($oldProfileImage);
            }
            $image_tmp = $request->file('image');
            if ($image_tmp->isValid()) {
                $image_url = cloudinary()->upload($request->file('image')->getRealPath(),['folder'=>'ukdion'],)->getSecurePath(); // save image to Cloudinary
            }
        }
        else {
          $image_url = $request->current_image;
        }
        // End ---- image update
        $campaign->image = $image_url;
        $campaign->update();
        return redirect('campaign/view')->with('success','Upadted Successfully!!');

    }


    public function api_store_campaigns(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|string|unique:campaigns',
            'total_budget'=>'required|string',
            'daily_budget'=>'required|string',
            'start_date'=>'required|date',
            'end_date'=>'required|date',
            'image.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:28',

        ]);

        $campaign = new Campaign;
        $campaign->name = $request->name;
        $campaign->total_budget = $request->total_budget;
        $campaign->daily_budget = $request->daily_budget;
        $campaign->start_date = $request->start_date;
        $campaign->end_date = $request->end_date;
        $image_url = cloudinary()->upload($request->file('image')->getRealPath(),['folder'=>'ukdion'],)->getSecurePath(); // save image to Cloudinary
        $campaign->image = $image_url;
        $campaign->save();
        return response()->json(['message' => 'Saved Successfully!']);
    }


    public function api_view_campaigns()
    {
        $campaigns = Campaign::all();
        return $campaigns;
    }


    public function softDeleteCampaign($id){
        Campaign::where(['id' => $id])->delete();
        return back()->with('success','Campaign Deleted Successful');

      }

}
