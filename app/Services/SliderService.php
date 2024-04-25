<?php

namespace App\Services;

use App\Models\Slider;
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

        return parent::create([
            'title' => $data['title'],
            'type' => $data['type'],
            'position' => $data['position'],
            'image' => $path,
        ]);
    }
}
