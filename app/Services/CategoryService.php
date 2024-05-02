<?php

namespace App\Services;

use App\Models\category;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class CategoryService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new category);
    }

    public function createBrand($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/categories/');

        return parent::Create([
            'name' => $data['name'],
            'image' => $path,
        ]);
    }

    public function updateBrand($id, Request $request)
    {
        if ($request->file('image')) {
            $brand = $this->findById($id);
            $this->deleteFile($brand->image);
            $path = $this->uplaodFile($request->image, 'attachments/categories/');

            return $this->update($id, [
                'name' => $request->name,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'name' => $request->name,
            ]);
        }
    }
}
