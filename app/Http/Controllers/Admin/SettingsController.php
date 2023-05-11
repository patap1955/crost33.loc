<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends AdminController
{
    public function index()
    {
        if (Setting::find(1)) {
            $settings = Setting::find(1);
        } else {
            $settings = new Setting();
            $settings->save();
        }
        return view("admin.pages.settings.index", compact("settings"));
    }

    public function update(Request $request, Setting $setting)
    {
        $setting->update($request->all());
        return back();
    }
}
