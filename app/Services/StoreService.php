<?php

namespace App\Services;

use App\Models\User;
use App\Models\Order;
use App\Models\Store;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;
use Illuminate\Support\Facades\Hash;

class StoreService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new User);
    }

    public function all()
    {
        return User::where('type', 'store')->get();
    }

    public function limit($num)
    {
        return User::where('type', 'store')->limit($num)->get();
    }

    public function createStore($data, $file1, $file2)
    {
        $path1 = $this->uplaodFile($file1, 'attachments/stores/');
        $path2 = $this->uplaodFile($file2, 'attachments/stores/');

        return User::Create([
            'name' => $data['name'],
            'email' => $data['email'],
            'country_code' => $data['country_code'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            'address' => $data['address'],
            'type' => 'store',
            'offer_status' => '0',
            'image' => $path1,
            'commercial_image' => $path2,
            'store_category' => $data['store_category'],
        ]);
    }

    public function updateStore($id, Request $request)
    {
        $store = $this->findById($id);

        if ($store->password == $request->password){
            $password = $request->password;
        }else{
            $password = Hash::make($request->password);
        }

        if ($request->file('image') && $request->file('commercial_image') ) {

            $this->deleteFile($store->image);
            $this->deleteFile($store->commercial_image);
            $path1 = $this->uplaodFile($request->image, 'attachments/stores/');
            $path2 = $this->uplaodFile($request->commercial_image, 'attachments/stores/');

            return $this->update($id, [
                'name' => $request->name,
                'email' => $request->email,
                'country_code' => $request->country_code,
                'phone' => $request->phone,
                'password' => $password,
                'address' => $request->address,
                'type' => 'store',
                'image' => $path1,
                'commercial_image' => $path2,
                'store_category' => $request->store_category,
            ]);
        }else{
            return $this->update($id, [
                'name' => $request->name,
                'email' => $request->email,
                'country_code' => $request->country_code,
                'phone' => $request->phone,
                'password' => $password,
                'address' => $request->address,
                'store_category' => $request->store_category,
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

    public function favourits($id)
    {
        return User::with(['wishlist'])
        ->whereHas('wishlist', function ($query) use($id) {
            if(isset($id)){
                $query->where('user_id', $id)->where('type', 'store');
            }
        })->get();
    }


    public function profit($id)
    {
        return Order::where('store_id', $id)->sum('total');
    }
}
