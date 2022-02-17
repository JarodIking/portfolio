<?php

namespace App\Http\Controllers;

use App\Models\Listitem;
use App\Models\Social;
use App\Models\Tabs;
use App\Models\Content;
use App\Http\Requests\StoreTabsRequest;
use App\Http\Requests\UpdateTabsRequest;

class TabsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tabs $tabs, Content $content, Social $social, Listitem $listitem)
    {
        $tabId = 1;
        $content = $tabs->getContentsPerTab($content, $social, $listitem, $tabId);

        return view('content', [
            'tabs' => $tabs->all(),
            'content' => $content,
            'tabName' => $tabs->find($tabId)->name
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTabsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTabsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tabs  $tabs
     * @return \Illuminate\Http\Response
     */
    public function show(Tabs $tabs, Content $content, Social $social, Listitem $listitem,int $tabId)
    {
        $content = $tabs->getContentsPerTab($content, $social, $listitem, $tabId);

        return view('content', [
//            'content' => $content->Where('tabs', $tabId)->get(),
            'tabs' => $tabs->all(),
            'tabName' => $tabs->find($tabId)->name,
            'content' => $content
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tabs  $tabs
     * @return \Illuminate\Http\Response
     */
    public function edit(Tabs $tabs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTabsRequest  $request
     * @param  \App\Models\Tabs  $tabs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTabsRequest $request, Tabs $tabs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tabs  $tabs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tabs $tabs)
    {
        //
    }
}
