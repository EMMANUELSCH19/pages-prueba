<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PreviewPage;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function edit($id)
    {
        $page = Page::find($id);
        return view('pages.edit');
    }

    public function show($id)
    {
        $page = Page::find($id);
        $previewPage = PreviewPage::find(1);
        return view('pages.show', compact('page', 'previewPage'));
    }

}
