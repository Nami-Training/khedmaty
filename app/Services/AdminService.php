<?php

namespace App\Services;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;
use Illuminate\Support\Facades\Hash;

class AdminService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Admin);
    }

    public function updateAdmin($id, Request $request)
    {
        if ($request->file('image')) {
            $admin = $this->findById($id);
            $this->deleteFile($admin->image);
            $path = $this->uplaodFile($request->image, 'attachments/admins/');

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

    public function updatePassword($id, $password)
    {
        return  $this->update($id ,[
                'password' => Hash::make($password),
            ]);
    }
}
