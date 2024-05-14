<?php

namespace App\Services;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class TestimonialService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Testimonial);
    }

    public function createTestimonial($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/Testimonials/');

        return parent::Create([
            'name' => $data['name'],
            'comment' => $data['comment'],
            'image' => $path,
        ]);
    }

    public function updateTestimonial($id, Request $request)
    {
        if ($request->file('image')) {
            $brand = $this->findById($id);
            $this->deleteFile($brand->image);
            $path = $this->uplaodFile($request->image, 'attachments/Testimonials/');

            return $this->update($id, [
                'name' => $request->name,
                'comment' => $request->comment,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'name' => $request->name,
                'comment' => $request->comment,
            ]);
        }
    }
}