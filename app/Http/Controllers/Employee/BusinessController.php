<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Business;

class BusinessController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:employee, manager');
    }

    /**
     * resource list
     * 
     * @return \illuminate\Http\Response
     */

    public function index()
    {
        $businesses = Business::all();
        return view('employee.businesses.index' , [ 'businesses' => $businesses ]);
    }

 

    /**
     * 
     * 
     * @return \illuminate\Http\Response
     */

     public function create()
     {
         //
     }

     /**
     * 
     * 
     * @param \illuminate\Http\Request
     * @return \illuminate\Http\Response
     */

     public function store(Request $request)
     {
         //
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

        return view('employee.businesses.show', [
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
         //
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
         //
     }

     /**
     * 
     * 
     * @param int $id
     * @return \illuminate\Http\Response
     */

     public function destroy($id)
     {
         //
     }

}
