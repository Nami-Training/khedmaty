<?php

namespace App\Services;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Trait\FileHandling;

class SettingService extends MainService
{
    use FileHandling;

    public function __construct()
    {
        parent::__construct(new Setting);
    }

    public function updateSetting($id, Request $request)
    {
        $setting = $this->findById($id);
        $data = $request->except('_token', 'method');

        if ($request->hasFile('logo_header') ) {
            $this->deleteFile($setting->logo_header);
            $data['logo_header'] = $this->uplaodFile($request->logo_header, 'attachments/setting/');
        }

        if ($request->hasFile('logo_footer') ) {
            $this->deleteFile($setting->logo_footer);
            $data['logo_footer'] = $this->uplaodFile($request->logo_footer, 'attachments/setting/');
        }

        if ($request->hasFile('favicon') ) {
            $this->deleteFile($setting->favicon);
            $data['favicon'] = $this->uplaodFile($request->favicon, 'attachments/setting/');
        }

        if ($request->hasFile('aboutus_image') ) {
            $this->deleteFile($setting->aboutus_image);
            $data['aboutus_image'] = $this->uplaodFile($request->aboutus_image, 'attachments/setting/');
        }

        return $this->update($id, $data);
    }
}
