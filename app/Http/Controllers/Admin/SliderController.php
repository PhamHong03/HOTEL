<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Services\Slider\SliderService;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    protected $sliderService;

    public function __construct(SliderService $sliderService) 
    {   
        $this->sliderService = $sliderService;
    }

    public function create() {

        return view('admin.slider.add', [
            'title' => 'Add slider'
        ]);
    }

    public function store(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            'thumb' => 'required'
        ]);

        $this->sliderService->insert($request);

        return redirect()->back();
    }

    public function index() {

        return view('admin.slider.list',[
            'title' => 'Slider list',
            'sliders' => $this->sliderService->get()
        ]);
    }

    public function show(Slider $slider) {
        // $result = $this->sliderService->show($slider);

        return view('admin.slider.edit',[
            'title' => 'Slider edit',
            'slider' => $slider
        ]);

    }

    public function update(Request $request, Slider $slider) {
        $this->validate($request, [
            'name' => 'required',
            'url' => 'required',
            'thumb' => 'required'
        ]);
         
        $result = $this->sliderService->update($request, $slider);

        if($result) {
            return redirect('admin/sliders/list');
        }
        return redirect()->back();
    }

    public function destroy(Request $request) {

        $result = $this->sliderService->delete($request);
        if($result) {
            return response()->json([
                'error' => false,
                'message' => 'Delete slider successfully'
            ]);
        }
        return response()->json([
            'error' => true
        ]);
    }
}
