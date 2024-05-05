<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\StoresCategory;
use App\Http\Trait\FileHandling;

class StoreCategoryService extends MainService
{
    use FileHandling;
    
    public function __construct()
    {
        parent::__construct(new StoresCategory);
    }

    public function createStoreCategory($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/storesCategories/');

        return parent::Create([
            'name' => $data['name'],
            'description' => $data['description'],
            'image' => $path,
        ]);
    }


    public function updateStoreCategory($id, Request $request)
    {
        if ($request->file('image')) {
            $slider = $this->findById($id);
            $this->deleteFile($slider->image);
            $path = $this->uplaodFile($request->image, 'attachments/storesCategories/');

            return $this->update($id, [
                'name' => $request->name,
                'description' => $request->description,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }
    }
}
