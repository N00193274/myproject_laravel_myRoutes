<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:manager');
    }

    /**
     * resource list
     * 
     * @return \illuminate\Http\Response
     */

    public function index()
    {
        $businesses = Business::all();
        return view('manager.businesses.index' , [ 'businesses' => $businesses ]);
    }

    /**
     * 
     * 
     * @return \illuminate\Http\Response
     */

    public function create()
    {
        return view('manager.busniesses.create');
    }

    /**
    * 
    * 
    * @param \illuminate\Http\Request
    * @return \illuminate\Http\Response
    */

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'Contact_phone' => 'required',
            'Contact_email' => 'required|max:500'
        ]);

        $business = new Business();
        $business->name = $request->input('name');
        $business->location = $request->input('location');
        $business->Contact_phone = $request->input('Contact_phone');
        $business->Contact_email = $request->input('Contact_email');
        $business->save();

        return redirect()->route('manager.businesses.index');
    }

    /**
    * 
    * 
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function show($id)
    {
        $business = Business::findorFail($id);

       return view('manager.businesses.show', [
           'business' => $business
       ]);
    }

     /**
    * 
    * 
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function edit($id)
    {
        $business = Business::findorFail($id);

        return view('manager.businesses.edit', [ 'business' => $business]);
    }

    /**
    * 
    * 
    * @param \illuminate\Http\Request
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function update(Request $request, $id)
    {
        $business = Business::findorFail($id);
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'Contact_phone' => 'required',
            'Contact_email' => 'required|max:500'
        ]);

        $business = new Business();
        $business->name = $request->input('name');
        $business->location = $request->input('location');
        $business->Contact_phone = $request->input('Contact_phone');
        $business->Contact_email = $request->input('Contact_email');
        $business->save();

        return redirect()->route('manager.businesses.index');
    }

    /**
    * 
    * 
    * @param int $id
    * @return \illuminate\Http\Response
    */

    public function destroy($id)
    {
        $business = Business::findorFail($id);
        $business->delete();

        return redirect()->route('manager.businesses.index');
    }
}
