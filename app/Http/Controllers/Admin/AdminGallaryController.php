<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreImageRequest;
use App\Models\Gallary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminGallaryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallary::all()->sortByDesc("id");
        return view("admin.pages.gallery.index", compact("galleries"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $galleries = Gallary::all();
        return view("admin.pages.gallery.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->file('img'));
        //$file = time() . "_" . $request->file('img')->getClientOriginalName();
        $file = $request->file('img')->getClientOriginalName();
        $filePath = $request->file('img')->storeAs("uploads/portfolio", $file, "public");
        $gallery = Gallary::create(["img" => $filePath]);
        return response()->json($gallery);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function show($id)
//    {
//        //
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function edit($id)
//    {
//        //
//    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallary $gallery)
    {
        $validated = $request->validate([
            'status_gallary' => 'boolean',
            'alt' => '',
        ]);
        if ($gallery->update($validated)) {
            return response()->json($gallery);
        } else {
            return response()->json(["error" => "Ошибка"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallary $gallery)
    {
        try {
            Storage::disk("public")->delete($gallery->img);
            $id = $gallery->id;
            $gallery->delete();
            return response()->json(["success" => "ok", "id" => $id]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
