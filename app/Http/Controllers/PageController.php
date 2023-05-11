<?php

namespace App\Http\Controllers;

use App\Mail\ContactsForm;
use App\Models\AdminDownloadPrice;
use App\Models\Contact;
use App\Models\Gallary;
use App\Models\Page;
use App\Models\Price;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        $portfolios = Gallary::all()->where("status_gallary", "=", true);
        return view("pages.index", compact("portfolios"));
    }

    public function services($title)
    {
        $page = Page::all()->where("slug", "=", $title)->first();
        $priceUrl = AdminDownloadPrice::all()->where("page_id", "=", $page->id)->first();
        $prices = Price::all()->where("page_id", "=", $page->id);
        return view("pages.services." .$title, compact("page", "priceUrl", "prices"));
    }

    public function downloadPrice()
    {
//        $file = public_path(). "storage/downloads/prices/prices.docx";
//        return Response::download($file);
        return response(storage_path("downloads/prices/prices.pdf'"));
    }

    public function formContacts(Request $request) {
        $mail = new \stdClass();
        $mail->name = $request->name;
        $mail->phone = $request->phone;
        //CROST2020@YANDEX.RU
        if (Mail::to('CROST2020@YANDEX.RU')->send(new ContactsForm($mail))) {
            Contact::create($request->all());
            return back();
            //return response()->json(["answer" => "ok"]);
        } else {
            return response()->json(["answer" => "error"]);
        }
    }

    public function portfolio() {
        $portfolios = Gallary::all();
        return view("pages/portfolio/index", compact("portfolios"));
    }

    public function politics() {
        return view('pages.politics.index');
    }
}
