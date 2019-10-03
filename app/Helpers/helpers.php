<?php
function uploadImage($file,$upload_dir){

    $path=public_path().'/uploads/'.$upload_dir;

    if(!File::exits($path)){
        File::makeDirectory($path,0777,true,true);
    }

    $file_name = ucfirst($upload_dir)."-".date('Ymdhis').rand(0,999).".".$file->getClientOriginalExtension();

    $success = $file->move($path,$file_name);
    if($success){
        return $file_name;
    }else{
        return null;
    }
}