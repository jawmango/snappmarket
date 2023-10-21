<?php

namespace App\Http\Controllers;

use App\Models\Performer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PerformerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addPerformer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // get the filename of image uploaded
        $filename = $request->img->getClientOriginalName();
        // store in public folder
        $request->img->move(public_path('img'), $filename);
        $performer = Performer::create([
        'product_name' => $request['product_name'],
        'price' => $request['gig_price'],
        'size' => $request['size'],
        'product_type' => $request['product_type'],
        'phone' => $request['performer_phone'],
        'socials' => $request['performer_socials'],
        'condition' => $request['condition'],
        'img' => $filename,
        'user_id' => Auth::id()
]);
return redirect('discover');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function show(Performer $performer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function edit(Performer $performer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Performer $performer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Performer  $performer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Performer $performer)
    {
        //
    }

    
}
