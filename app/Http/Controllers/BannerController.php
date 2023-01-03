<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class BannerController extends Controller
{
    public function index()
    {
        $title = 'Banner';
        return view('banner.list', compact('title'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        // if (!File::isDirectory('image/banner/' . $request->id)) {
        //     File::makeDirectory('image/banner/' . $request->id);  /** bikin folder baru tiap upload sesuai id parent */
        // }

        $image = $request->file('file');
        $namafile = time() . '.' . $image->getClientOriginalExtension();

        Image::make($image)->resize(300, 300, function ($constraint) {
            /** thumbnail */
            $constraint->aspectRatio();
        })->save(public_path('/image/banner/') . $namafile);
        // $image->move('image/banner-original/', $namafile);
        /** ukuran file asli */
        // dd('bismillah');

        return redirect()->back()->with('success', 'Data Berhasil Ditambahkan!');
    }

    public function destroy($banner)
    {
        //  && File::exists(public_path('/image/banner-original/'.$data_banner->file))  |   && File::exists(public_path('/image/banner-original/'.$data_banner->file))
        if (File::exists(public_path('/image/banner/' . $banner))) {
            // dd('halo');
            File::delete(public_path('/image/banner/' . $banner));
            // File::delete(public_path('/image/banner-original/' . $banner));

            return redirect()->back()->with(['error' => 'Data Berhasil Dihapus!']);
        } else {
            return redirect()->back()->with(['error' => 'Data Tidak Terhapus!']);
        }

    }
}
