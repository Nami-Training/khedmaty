<?php

namespace App\Services;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class UserService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new User);
    }

    public function createUser($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/users/');

        return parent::Create([
            'name' => $data['name'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => $data['password'],
            'type' => $data['type'],
            'image' => $path,
        ]);
    }

    public function updateUser($id, Request $request)
    {
        if ($request->file('image')) {
            $brand = $this->findById($id);
            $this->deleteFile($brand->image);
            $path = $this->uplaodFile($request->image, 'attachments/users/');

            return $this->update($id, [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'name' => $request->name,
                'phone' => $request->phone,
                'email' => $request->email,
            ]);
        }
    }
}
