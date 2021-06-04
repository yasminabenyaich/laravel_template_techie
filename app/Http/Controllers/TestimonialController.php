<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonials = Testimonial::all();
        return view("backoffice.testimonial.all",compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("backoffice.testimonial.create");
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
        $testimonial = new Testimonial();
        $testimonial->description = $request->description;
        $testimonial->pdp = $request->pdp;
        $testimonial->nom = $request->nom;
        $testimonial->job = $request->job;
        $testimonial->created_at = now();

        $testimonial->save;
        return redirect()->route('testimonial.index')->with('successMessage', "Votre testimonial a bien été ajouté");
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
        return view('backoffice.testimonial.show', compact('testimonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        //
        return view('backoffice.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        //
        $testimonial->description = $request->description;
        $testimonial->pdp = $request->pdp;
        $testimonial->nom = $request->nom;
        $testimonial->job = $request->job;
        $testimonial->updated_at = now();

        $testimonial->save();
        return view('backoffice.testimonial.edit', compact('testimonial'));  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        //
        $testimonial->delete();
        return redirect()->back()->with("sucessMessage", "Votre testimonial a été supprimé");
    }
}
