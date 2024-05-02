<?php

namespace App\Services;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class CarService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Car);
    }

    public function createCar($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/cars/');

        return parent::Create([
            'name' => $data['name'],
            'image' => $path,
        ]);
    }

    public function updateCar($id, Request $request)
    {
        if ($request->file('image')) {
            $brand = $this->findById($id);
            $this->deleteFile($brand->image);
            $path = $this->uplaodFile($request->image, 'attachments/cars/');

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
