<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PriceRequest;
use App\Models\AdminDownloadPrice;
use App\Models\Page;
use App\Models\Price;
use Illuminate\Http\Request;

class AdminPriceController extends Controller
{
    public function index() {
        $page = Page::all()->where("slug", "=", "services")->first();
        $categories = Page::all()->where("parent_id", "=", $page->id);
        $prices = Price::all();
        return view("admin.pages.price.index", compact("prices", "categories"));
    }

    public function create() {
        $page = Page::all()->where("slug", "=", "services")->first();
        $categories = Page::all()->where("parent_id", "=", $page->id);
        return view("admin.pages.price.create", compact("categories", "page"));
    }

    public function store(PriceRequest $request)
    {
        $validete = $request->validated();
        if (Price::create($validete)) {
            return redirect()->route('price.index');
        }
    }

    public function show(Price $price)
    {
        $page = Page::all()->where("slug", "=", "services")->first();
        $categories = Page::all()->where("parent_id", "=", $page->id);
        return view("admin.pages.price.edit", compact("price", "categories"));
    }

    public function update(PriceRequest $request, Price $price) {
        $validete = $request->validated();
        if ($price->update($validete)) {
            return redirect()->route('price.index');
        }
    }

    public function destroy(Price $price) {
        if ($price->delete()) {
            return redirect()->route('price.index');
        }
    }

    public function downloadPrice(Request $request, Page $page) {
        $price = AdminDownloadPrice::all()->where("page_id", "=", $page->id)->first();
        $request->validate(["file" => "required|file|mimes:pdf,docx,xlsx"]);
        $file = $request->file("file");
        $filename = $file->getClientOriginalName();
        $array = explode(".", $filename);
        $ext = array_pop($array);
        $newFileName = $page->slug . "." . $ext;
        if ($request->file('file')->storeAs("uploads/downloads/prices", $newFileName, "public")) {
            $price->update(["file" => $newFileName]);
        }
        return redirect()->route('price.index');
    }
}
