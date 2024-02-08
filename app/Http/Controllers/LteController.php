<?php

namespace App\Http\Controllers;

use App\Models\Lte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LteController extends Controller
{
    // Show all lte orders
    public function index(){
        return view("ltes.index", [
                'information' => Lte::latest()->filter(request(['id', 'lteordertype', 'vendor', 'opco', 'street', 'city', 'state', 'zip', 'search']))->paginate(10),
                'totalnewstatic' => Lte::all()->where('lteordertype', '=', 'New LTE Static IP'),
                'totalnewdynamic' => Lte::all()->where('lteordertype', '=', 'New LTE Dynamic IP'),
                'totalupdate' => Lte::all()->where('lteordertype', '=', 'Update Existing LTE'),
                'totaldisconnect' => Lte::all()->where('lteordertype', '=', 'Disconnect LTE'),
        ]);
    }
    public function dashboard(){
        // $info = Lte::latest()->filter(request(['id']))->get();
        // dd($info);
        return view("dashboard", [
            'totalorders' => Lte::all()
        ]);
    }
    // Show single task
    public function show(Lte $lte){
        return view('ltes.show', [
            'information' => $lte
        ]);
    }

    // Show Create Form
    public function create(){
        return view('ltes.create');
    }
    
    // Store Lte Data
    public function store(Request $request){
        $formFields = $request->validate([
            'lteordertype' => 'nullable',
            'vendor' => 'nullable',
            'iptype' => 'nullable',
            'pnsip' => 'nullable',
            'devicetype' => 'nullable',
            'deviceid' => 'nullable',
            'areacode' => 'required',
            'simid' => 'nullable',
            'opco' => 'nullable',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'customerdiv' => 'nullable',
            'mobilenumber' => 'nullable'
        ]);

        $formFields['user_id'] = auth()->id();

        Lte::create($formFields);
        
        // Flash Message below
        // session()->flash('message', 'Task was successful!');
        return redirect('/lte')->with('message', 'Order Added Successfully!');
    }

    public function edit(Lte $lte){
        return view('ltes.edit', ['information' => $lte]);
    }

    // Update Lte Data
    public function update(Request $request, Lte $lte){
        $formFields = $request->validate([
            'lteordertype' => 'nullable',
            'vendor' => 'nullable',
            'iptype' => 'nullable',
            'pnsip' => 'nullable',
            'devicetype' => 'nullable',
            'deviceid' => 'nullable',
            'areacode' => 'required',
            'simid' => 'nullable',
            'opco' => 'nullable',
            'street' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'customerdiv' => 'nullable',
            'mobilenumber' => 'nullable'
        ]);
        
        $lte->update($formFields);
        
        // Flash Message below
        // session()->flash('message', 'Task was successful!');
        return redirect('/lte')->with('message', 'Order Updated Successfully!');
    }

    // Delete Task
    public function destroy(Lte $lte){
        $lte->delete();

        return redirect('/lte')->with('message', 'Order Deleted Successfully!');
    }
}
