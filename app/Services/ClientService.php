<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;
use Illuminate\Support\Facades\Hash;

class ClientService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new User);
    }

    public function createClient($data, $file)
    {
        $path = $this->uplaodFile($file, 'attachments/users/');

        return parent::Create([
            'name' => $data['name'],
            'email' => $data['email'],
            'country_code' => $data['country_code'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'offer_status' => '0',
            'image' => $path,
        ]);
    }

    public function updateClient($id, Request $request)
    {
        $client = $this->findById($id);

        if ($client->password == $request->password){
            $password = $request->password;
        }else{
            $password = Hash::make($request->password);
        }

        if ($request->file('image')) {

            $this->deleteFile($client->image);
            $path = $this->uplaodFile($request->image, 'attachments/users/');

            return $this->update($id, [
                'name' => $request->name,
                'email' => $request->email,
                'country_code' => $request->country_code,
                'phone' => $request->phone,
                'password' => $password,
                'address' => $request->address,
                'image' => $path,
            ]);
        }else{
            return $this->update($id, [
                'name' => $request->name,
                'email' => $request->email,
                'country_code' => $request->country_code,
                'phone' => $request->phone,
                'password' => $password,
                'address' => $request->address,
            ]);
        }
    }

    public function changeOfferStatus($id)
    {
        $store = $this->findById($id);

        if($store->offer_status == '0'){
            return $this->update($id, [
                'offer_status' => '1'
            ]);
        }else{
            return $this->update($id, [
                'offer_status' => '0'
            ]);
        }
    }
}
