<?php
/**
 * Creator: xie
 * Time: 2020/12/1
 */

namespace App\Http\Controllers;


class SiteController extends Controller
{

    public function index() {
        return view('site.index');
    }
}
