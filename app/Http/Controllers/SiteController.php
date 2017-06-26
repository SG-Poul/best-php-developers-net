<?php
/**
 * Created by PhpStorm.
 * User: Pavel.R
 * Date: 12.06.2017
 * Time: 11:13
 */

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SiteController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('site.index');
    }

    public function page(Request $request, $page)
    {
        $model = Content::where('url', $page)->first();
        return view('site.page')->with(['content' => $model]);
    }

    public function services(Request $request, $page)
    {
        $model = Content::where('url', $page)->first();
        return view('site.page-sidebar')->with(['content' => $model]);
    }

    public function edit(Request $request)
    {
        $url = $request->input('url');
        $body = $request->input('body');
        $model = Content::where('url', $url)->first();
        $model->body = $body;
        $model->save();

        return redirect()->route('company', ['page' => $url]);
    }
}
