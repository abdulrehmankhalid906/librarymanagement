<?php

namespace App\Http\Controllers;

use App\Models\Theme;
use Illuminate\Http\Request;

class ThemeController extends Controller
{

    public function index()
    {
        // $theme = Theme::where('deleted_at', NULL)->first();
        $theme = Theme::first();

        return view('theme.general', [
            'theme' => $theme
        ]);
    }

    public function generalsetting(Request $request)
    {
        $request->validate([
            'app_name' => 'required|string|max:255',
            'app_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'navbar_toggler' => 'required|string|max:255',
            'logged_toggler' => 'required|string|max:255',
            'loggin_message' => 'required|string|max:255',
            'menu_name' => 'required|array',
            'theme_front_color' => 'required|string|max:7',
            'theme_background_color' => 'required|string|max:7',
            'footer_front_color' => 'required|string|max:7',
            'footer_background_color' => 'required|string|max:7',
            'footer_title' => 'required|string|max:255',
            'footer_year' => 'required|integer',
        ]);

        $theme = Theme::find($request->id);

        if(!$theme)
        {
            $theme = new Theme();
        }

        $theme->app_name = $request->app_name;
        $theme->navbar_toggler = $request->navbar_toggler;
        $theme->logged_toggler = $request->logged_toggler;
        $theme->loggin_message = $request->loggin_message;
        $theme->menu_name = json_encode($request->menu_name);
        $theme->theme_front_color = $request->theme_front_color;
        $theme->theme_background_color = $request->theme_background_color;
        $theme->footer_front_color = $request->footer_front_color;
        $theme->footer_background_color = $request->footer_background_color;
        $theme->footer_title = $request->footer_title;
        $theme->footer_year = $request->footer_year;
        $theme->save();
        
        return redirect()->back()->with('success', "The setting has been " . ($request->id ? "updated" : "created"));
    }
}
