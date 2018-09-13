<?php

namespace App\Http\Controllers;

use App\Services;
use Illuminate\Http\Request;
use App\User;

class ServicesController extends Controller
{

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::with('client')->orderBy('created_at', 'dec')->paginate(10);
        // $services = Services::with('client')->get();
        // $services = Services::with('user')->get();
        // $services = Services::where('user_id', $user_id)->with('User')->get();
        return view('services.index')->with('services', $services);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
        // echo "Services create";

        // Steps
        // 1 Customer Selects Address | Currently its just their home address
        // 2 Use the address to create a geolocation lat/lon of their address
        // 3 Store the service request info with a value of assigned set to false
        
        // 4 While Assigned == false { queue a task to continue to find a contractor}
        // 5 when contractor accepts job, have the running queue task assign the Assign varaible to true

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    // public function show(Services $services)
    public function show($id)
    {
        $service = Service::find($id);
        if(!$service){
            return redirect('/services')->with('error', 'Service request not found');
        }

        if(auth()->user()->id !== $service->user_id){
            return redirect('services')->with('error', 'You are not authorized to view this page');
        }

        return view('services.show')->with('service', $service);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function edit(Services $services)
    {
        echo "Service edit page";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Services $services)
    {
        echo "Service update page";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy(Services $services)
    {
        echo "Service destroy";
    }
}
