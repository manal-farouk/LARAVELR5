<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
class ClientController extends Controller

{
    private $columns = ['clientName','phone' ,'email' , 'website','city' , 'active', 'image'];
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

    $messages = $this->errMsg();    
    $data = $req->validate([
        'clientName' => 'required|max:100,min:5',
        'phone' => 'required|min:11',
        'email' => 'required|email:rfc',
        'website' => 'required',
        'city' => 'required|max:30',
        'image' => 'required',
        ],$messages);
        $imgExt = $req->image->getClientOriginalExtension();
        $fileName = time() . '.' . $imgExt;
        $path = 'assets/images';
        $req->image->move($path, $fileName);
        $data['image'] = $fileName;
        $data['active'] = isset($req->active) ;
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
    $messages = $this->errMsg();
    $request->validate([
        'clientName' => 'required|max:100|min:5',
        'phone' => 'required|min:11',
        'email' => 'required|email',
        'website' => 'required',
        'city' => 'required|max:30',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validation for image
    ], $messages);

    // Find the client by ID
    $client = Client::find($id);

    // Handle image upload
    if ($request->hasFile('image')) {
        $imgExt = $request->image->getClientOriginalExtension();
        $fileName = time() . '.' . $imgExt;
        $path = 'assets/images'; // Specify the storage path
        $request->image->move($path, $fileName);
        $data['image'] = $fileName;
    } else {
        // Handle case where no image is uploaded
        // Option 1: Keep the existing image filename (assuming 'client' has an 'image' property)
        $data['image'] = $client->image; // Assuming 'image' is a property in the Client model

        // Option 2: Set a default image filename (if applicable)
        // $data['image'] = 'default_image.jpg';
    }

    // Determine if the client is active
    $data['active'] = isset($request->active);

    // Update specific client fields
    Client::where('id', $id)->update([
        'clientName' => $request->clientName,
        'phone' => $request->phone,
        'email' => $request->email,
        'website' => $request->website,
        'city' => $request->city,
        'image' => isset($data['image']) ? $data['image'] : null, // Update image only if set
        'active' => $data['active'],
    ]);
    $client->save();
    return redirect('clients'); // Redirect to the appropriate route
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

    // error custom messages
    public function errMsg(){
        return [
            'clientName.required' => 'The client name is missed, please insert',
            'clientName.min' => 'length less than 5, please insert more chars',
        ];
    }

}
