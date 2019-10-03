<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
   protected $fillable = ['title','link','status','image','added_by'];

   public function getBannerAddRules($act = 'add'){
       $array = [
            'title' => 'required|string',
            'link' => 'nullable|url',
            'status' => 'required|in:active,inactive',
            //'image' => 'required|image|max:5000'
       ];
       if($act == 'add'){
           $array['image'] = 'required|image|max:5000';
       }else{
           $array['image'] = 'sometimes|image|max:5000';
       }

       return $array;
   }
}
