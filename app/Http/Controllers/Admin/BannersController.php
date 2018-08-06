<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Requests\CreateBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use function view;

class BannersController extends Controller
{
    
    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $banners = Banner::orderBy('id','desc')->paginate(10);

        return view('admin.banners.index')->with(['banners'=> $banners]);
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $banner = new Banner;

        return view('admin.banners.create')->with(['banner'=>$banner]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBannerRequest $request)
    {
        //
        $banner = new Banner;
        $path = $request->file('banner')->store('banners', 'public');
        
        $banner->name       = $request->get('name');
        $banner->filename   = $path;

        $banner->save();

        session()->flash('message', 'Banner Creado');

        return redirect()->route('admin.dashboard');
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner){

       // $banner->name = $banner->$name;

        return view('admin.banners.edit')->with(['banner'=>$banner]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Banner $banner, UpdateBannerRequest $request)
    {
     //   if ($banner->filename != '')
            Storage::delete('storage/'.$banner->filename);
        
        $banner->name       = $request->get('name');
        $path               = $request->file('banner')->store('banners', 'public');
        $banner->filename   = $path;
        $banner->save();

        session()->flash('message', 'Banner actualizado!');

        return redirect()->route('admin.dashboard');
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function active(Banner $banner){

        $banner->is_active = !$banner->is_active;
        $banner->save();

        session()->flash('message', 'Banner actualizado!');
        
        return redirect()->route('admin.dashboard');
        //
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();

        session()->flash('message', 'Banner Eliminado!');

        return redirect()->route('admin.dashboard');
    }
}
