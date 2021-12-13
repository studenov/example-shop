<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait ImageTrait
{

    public function storeParams($request, $model, $table)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image')){
            $path = $request->file('image')->store($table);
            $params['image'] = $path;
        }
        $model::create($params);
    }

    public function updateParams($request, $model)
    {
        $params = $request->all();
        unset($params['image']);
        if($request->has('image')){
            Storage::delete($model->image);
            $path = $request->file('image')->store($model->getTable());
            $params['image'] = $path;
        }
        if($model->getTable() == 'products')
        {
            foreach (['new', 'hit', 'recommend'] as $fieldName) {
                if (!isset($params[$fieldName])) {
                    $params[$fieldName] = 0;
                }
            }
        }
        $model->update($params);
    }
}
