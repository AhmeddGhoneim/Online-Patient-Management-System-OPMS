<?php

namespace Modules\Admin\traits;
use File;
trait UploadFiles{


    public function SaveFile($pass,$cad)
    {
        $cad_new_name= time() .  $cad->getClientOriginalName();
        $cad->move($pass,$cad_new_name);
        return $cad_new_name;
    }

    public function DeleteOldFile($pass,$old_name)
    {
        File::delete($pass. $old_name);
    }
    
}