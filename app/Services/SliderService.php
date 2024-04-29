<?php

namespace App\Services;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class SliderService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Slider);
    }

    public function createSlider($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/banners/');

        return parent::Create([
            'title' => $data['title'],
            'description' => $data['description'],
            'link' => $data['link'],
            'type' => $data['type'],
            'position' => $data['position'],
            'image' => $path,
        ]);
    }


    public function updateSlider($id, Request $request)
    {
        if ($request->file('image')) {
            $slider = $this->findById($id);
            $this->deleteFile($slider->image);
            $path = $this->uplaodFile($request->image, 'attachments/banners/');

            return $this->update($id, [
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'type' => $request->type,
                'position' => $request->position,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
                'type' => $request->type,
                'position' => $request->position,
            ]);
        }
    }
}
