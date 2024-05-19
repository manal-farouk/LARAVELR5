<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller

{
    private $columns = ['clientName','phone' ,'email' , 'website'];
    /*Display a listing of the resource.*/
    public function index()
    {
        $clients = Client::get();
        return view('clients', compact('clients'));
    }

    /* Show the form for creating a new resource.*/
    public function create()
    {
        return view('addClient');
    }

    /*Store a newly created resource in storage.*/

    public function store(Request $req)
    {
    // $client = new Client() ;
    // $client->clientName =$req->clientName;
    // $client->phone = $req->phone;
    // $client->email=$req->email;
    // $client->website =$req->website;
    // $client->save ();
    $data = $req->validate([
        'clientName' => 'required|max:100,min:5',
        'phone' => 'required|min:11',
        'email' => 'required|email:rfc',
        'website' => 'required'
        ]);
        Client::create($data);
        return redirect('clients');
        
// return 'inserted Successfully';
    }


    /*Display the specified resource.*/
    public function show(string $id)
    {
        $client = Client::findOrFail($id);
        return view('showClient', compact('client'));
    }
    public function edit(string $id)
    {
    
        $client = Client::findOrFail($id);
    
        return view('editClients', compact('client'));
    }

    /*Update the specified resource in storage.*/
    public function update(Request $request, string $id)
{
    $request->validate([
        'clientName' => 'required|max:100|min:5',
        'phone' => 'required|min:11',
        'email' => 'required|email',
        'website' => 'required'
    ]);

    // Update the client data in storage
    Client::where('id', $id)->update($request->only($this->columns));

    return redirect('clients');
}

    /*Remove the specified resource from storage.*/
    public function destroy(Request $request)
    {
        $id = $request->id;
       
        Client::where('id', $id)->delete();
        
        return redirect('clients');
    }

     /*trash.*/
    public function trash()
    {
    $trashed = Client::onlyTrashed()->get();
    return view('trashClient', compact('trashed'));
    }

    /*Resrore.*/
    public function restore(string $id)
    {
    Client::where('id', $id)->restore();
        
    return redirect('clients');
    }

     /*force delet.*/
    public function forceDelete(Request $request)
    {
    $id = $request->id;
       
    Client::where('id', $id)->forceDelete();
    
    return redirect('trashClient');
    }


}
