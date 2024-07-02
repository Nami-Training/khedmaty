<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Admin;

class FaqsPolicy
{
    /**
     * Create a new policy instance.
     */
    public function read(Admin $admin)
    {
        return $admin->permission->faqs == 1;
    }

    public function create(Admin $admin)
    {
        $actions  = [
            'users' => [0,0,0,0],
            'banners' => [0,0,0,0],
            'store_categories' => [0,0,0,0],
            'departments' => [0,0,0,0],
            'categories' => [0,0,0,0],
            'brands' => [0,0,0,0],
            'cars' => [0,0,0,0],
            'stores' => [0,0,0,0],
            'clients' => [0,0,0,0],
            'products' => [0,0,0,0],
            'orders' => [0,0,0,0],
            'faqs' => [0,0,0,0],
            'testimonials' => [0,0,0,0],
            'blogs' => [0,0,0,0],
            'settings' => [0,0,0,0]
        ];
        foreach ($admin->permission->actions as $action) {
            $actions[$action['name']] = [$action['create'],$action['read'],$action['update'],$action['delete']];
        }

        return $actions['faqs'][0] == 1;
    }

    public function update(Admin $admin)
    {
        $actions  = [
            'users' => [0,0,0,0],
            'banners' => [0,0,0,0],
            'store_categories' => [0,0,0,0],
            'departments' => [0,0,0,0],
            'categories' => [0,0,0,0],
            'brands' => [0,0,0,0],
            'cars' => [0,0,0,0],
            'stores' => [0,0,0,0],
            'clients' => [0,0,0,0],
            'products' => [0,0,0,0],
            'orders' => [0,0,0,0],
            'faqs' => [0,0,0,0],
            'testimonials' => [0,0,0,0],
            'blogs' => [0,0,0,0],
            'settings' => [0,0,0,0]
        ];
        foreach ($admin->permission->actions as $action) {
            $actions[$action['name']] = [$action['create'],$action['read'],$action['update'],$action['delete']];
        }

        return $actions['faqs'][2] == 1;
    }

    public function delete(Admin $admin)
    {
        $actions  = [
            'users' => [0,0,0,0],
            'banners' => [0,0,0,0],
            'store_categories' => [0,0,0,0],
            'departments' => [0,0,0,0],
            'categories' => [0,0,0,0],
            'brands' => [0,0,0,0],
            'cars' => [0,0,0,0],
            'stores' => [0,0,0,0],
            'clients' => [0,0,0,0],
            'products' => [0,0,0,0],
            'orders' => [0,0,0,0],
            'faqs' => [0,0,0,0],
            'testimonials' => [0,0,0,0],
            'blogs' => [0,0,0,0],
            'settings' => [0,0,0,0]
        ];
        foreach ($admin->permission->actions as $action) {
            $actions[$action['name']] = [$action['create'],$action['read'],$action['update'],$action['delete']];
        }

        return $actions['faqs'][3] == 1;
    }
}
