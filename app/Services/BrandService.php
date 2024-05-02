<?php

namespace App\Services;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class BrandService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Brand);
    }

    public function createBrand($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/brands/');

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
            $path = $this->uplaodFile($request->image, 'attachments/brands/');

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
