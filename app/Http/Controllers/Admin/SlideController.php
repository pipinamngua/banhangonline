<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;
use Session;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('keyword') && $request->get('keyword') !="")
        {
            $keyword = $request->get('keyword');
            $slide = Slide::where('title','like','%'.$keyword.'%')->get();
        }else
        {
            $slide = Slide::all();
        }
        
        return view('admin.slide.list-slide',['slide'=>$slide]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slide.create-slide');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'title'=>'required',
                'image'=>'required|mimes:png,jpg,bmp,gif,jpeg',
                'description'=>'required',
                'discount'=>'required',
                'link'=>'required'
            ],
            [
                'title.required'=>'Yêu cầu nhập title',
                'image.required'=>'Yêu tải ảnh lên hệ thống',
                'image.mimes'=>'Không đúng định dạng ảnh ',
                'description.required'=>'Yêu cầu nhập description',
                'discount.required'=>'Yêu cầu nhập discount',
                'link.required'=>'Yêu cầu nhập link sản phẩm'
            ]
        );

        $fileName ="no-image.jpg";
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName().date('Y-m-d H:i:s');
            $fileName = md5($fileName).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/slide/'),$fileName);
        }


        $p = new Slide();
        $p->title = $request->title;
        $p->image = $fileName;
        $p->description = $request->description;
        $p->discount = $request->discount;
        $p->link = $request->link;
        $name = $request->title;
        $p->save();

        Session::flash('sucess','Tạo mới '.$name.' thành công !!');
        return redirect('admin/slide');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slide = Slide::findOrfail($id);
        return view('admin.slide.edit-slide',['slide' => $slide]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,
            [
                'title'=>'required',
                'image'=>'mimes:png,jpg,bmp,gif,jpeg',
                'description'=>'required',
                'discount'=>'required',
                'link'=>'required'
            ],
            [
                'title.required'=>'Yêu cầu nhập title',
                'image.mimes'=>'Không đúng định dạng ảnh ',
                'description.required'=>'Yêu cầu nhập description',
                'discount.required'=>'Yêu cầu nhập discount',
                'link.required'=>'Yêu cầu nhập link sản phẩm'
            ]
        );
        $p = Slide::findOrFail($id);
        $fileName =$p->image;

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName().date('Y-m-d H:i:s');
            $fileName = md5($fileName).'.'.$file->getClientOriginalExtension();
            $file->move(public_path('uploads/slide/'),$fileName);
        }


        
        $p->title = $request->title;
        $p->image = $fileName;
        $p->description = $request->description;
        $p->discount = $request->discount;
        $p->link = $request->link;
        $name = $request->title;
        $p->save();

        Session::flash('sucess','Chỉnh sửa '.$name.' thành công !!');
        return redirect('admin/slide');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Slide::findOrfail($id);
        $name = $p->title;
        $p->delete();

        Session::flash('sucess','Xóa '.$name.' thành công !!');
        return redirect('admin/slide');
    }

    private function slug($text)
    {
      $text = preg_replace('~[^\pL\d]+~u', '-', $text);
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
      $text = preg_replace('~[^-\w]+~', '', $text);
      $text = trim($text, '-');
      $text = preg_replace('~-+~', '-', $text);
      $text = strtolower($text);

      if (empty($text)) {
        return 'n-a';
      }

      return $text;
    }
}
