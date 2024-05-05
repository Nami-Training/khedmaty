<?php

namespace App\Services;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class DepartmentService extends MainService
{
    use FileHandling;
    
    public function __construct()
    {
        parent::__construct(new Department);
    }

    public function createDepartment($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/departments/');

        return parent::Create([
            'name' => $data['name'],
            'store_category' => $data['store_category'],
            'image' => $path,
        ]);
    }


    public function updateDepartment($id, Request $request)
    {
        if ($request->file('image')) {
            $slider = $this->findById($id);
            $this->deleteFile($slider->image);
            $path = $this->uplaodFile($request->image, 'attachments/departments/');

            return $this->update($id, [
                'name' => $request->name,
                'store_category' => $request->store_category,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'name' => $request->name,
                'store_category' => $request->store_category,
            ]);
        }
    }
}
