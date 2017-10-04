<?php

namespace Modules\Remotecv\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class RemotecvController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('remotecv::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function blogs()
    {        
        return view('remotecv::blog');
    }
    
    /**
     * show resume
     *
     * @return Response
     */
    public function resume()
    {        
        return view('remotecv::resume');
    }

    /**
     * Show portfolio list
     *
     * @return Response
     */
    public function portfolio()
    {        
        return view('remotecv::portfolio');
    }

    /**
     * Show contact page
     *
     * @return Response
     */
    public function contact()
    {        
        return view('remotecv::contact');
    }

}
