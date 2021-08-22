<?php

namespace App\Http\Controllers;

use App\Models\Annotation;
use App\Models\Day;
use Illuminate\Http\Request;

class AnnotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {           
        return Annotation::
            join('days', 'annotations.day_id', '=', 'days.id')           
            ->join('recycling_materials', 'recycling_materials.id', '=', 'annotations.recycling_material_id')
            ->orderBy('annotations.day_id', 'asc')
            ->orderBy('annotations.start_hour', 'asc')
            ->select(
                'annotations.id', 
                'annotations.day_id', 
                'days.day_name', 
                'annotations.recycling_material_id', 
                'recycling_materials.material', 
                'annotations.start_hour', 
                'annotations.end_hour',
                'annotations.created_at',         
                'annotations.updated_at')          
            ->get();

        // return Annotation::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'day_id' => 'required',
            'recycling_material_id' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required'
        ]);
        return Annotation::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Annotation  $annotation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return Annotation::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Annotation  $annotation
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Annotation::destroy($id);
    }

    public function todayAnnotations() 
    {
        $todayNumber = date('N');
        
        return Annotation::where('day_id', $todayNumber)
            ->join('days', 'annotations.day_id', '=', 'days.id')           
            ->join('recycling_materials', 'recycling_materials.id', '=', 'annotations.recycling_material_id')
            ->orderBy('annotations.day_id', 'asc')
            ->orderBy('annotations.start_hour', 'asc')
            ->select(
                'annotations.id', 
                'annotations.day_id', 
                'days.day_name', 
                'annotations.recycling_material_id', 
                'recycling_materials.material', 
                'annotations.start_hour', 
                'annotations.end_hour',
                'annotations.created_at',         
                'annotations.updated_at')
            ->get();
    }
}
