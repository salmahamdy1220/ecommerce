<?php

namespace Modules\Reviews\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Modules\Reviews\DataTables\ReviewsDataTable;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    //  public function index()
    //  {
    //      return "hello";
    //  }

    public function index(ReviewsDataTable $dataTable)
    {

        return $dataTable->render('reviews::reviews.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reviews::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('reviews::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('reviews::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
