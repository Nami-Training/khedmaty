<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class BlogService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Blog);
    }

    public function createBlog($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/Blogs/');

        return parent::Create([
            'title' => $data['title'],
            'description' => $data['description'],
            'image' => $path,
        ]);
    }

    public function updateBlog($id, Request $request)
    {
        if ($request->file('image')) {
            $brand = $this->findById($id);
            $this->deleteFile($brand->image);
            $path = $this->uplaodFile($request->image, 'attachments/Blogs/');

            return $this->update($id, [
                'title' => $request->title,
                'description' => $request->description,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'title' => $request->title,
                'description' => $request->description
            ]);
        }
    }
}
