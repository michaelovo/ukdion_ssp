<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CampaignController extends Controller
{
    public function index()
    {
        $campaigns= Campaign::get();
        return view('campaigns.view',compact('campaigns'));
    }


    public function create()
    {

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
        $response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath(); // save image to Cloudinary
        $campaign->save();
        return back()->with('message','Saved Successfully!');
    }

    public function edit(Campaign $id)
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
        //$response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath(); // save image to Cloudinary
        $campaign->update();
        return back()->with('message','Saved Successfully!');
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
        $response = cloudinary()->upload($request->file('image')->getRealPath())->getSecurePath(); // save image to Cloudinary
        $campaign->save();
        return response()->json(['message' => 'Saved Successfully!']);
    }


    public function api_view_campaigns()
    {
        $campaigns = Campaign::all();
        return $campaigns;
    }


    public function destroy(Campaign $campaign)
    {
        //
    }

}
