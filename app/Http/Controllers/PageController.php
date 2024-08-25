<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Utilities\Cache\Setting;
use Illuminate\Http\Request;
use \Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $pathname = str_replace(url("/"), "", $request->url());
        $page = Page::where("path", $pathname)->first();

        if (!$page) {
            return abort(404);
        } else {
            $setting = Setting::init(true);
            $data = json_decode($page->data, true);
            $content = Blade::render(file_get_contents(storage_path("/app/public/$page->view")), [
                ...$setting,
                ...$data,
            ]);
            return $content;
        }

    }
}
