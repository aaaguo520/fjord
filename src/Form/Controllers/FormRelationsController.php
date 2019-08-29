<?php

namespace AwStudio\Fjord\Form\Controllers;

use AwStudio\Fjord\Fjord\Controllers\FjordController;
use Illuminate\Http\Request;
use AwStudio\Fjord\Models\ModelContent;
use AwStudio\Fjord\Form\Database\FormBlock;
use AwStudio\Fjord\Form\Database\FormField;
use AwStudio\Fjord\Form\Database\FormRelation;
use Exception;

class FormRelationsController extends FjordController
{
    public function index(Request $request)
    {
        $model = with(new $request->model_type);
        if($request->model_id) {
            $model = $request->model_type::where('id', $request->model_id)->first();
        }

        $field = $model->findFormField($request->id);

        return $field['query']->get();
    }

    public function updateHasOne(Request $request)
    {
        $model = $request->model::findOrFail($request->id);
        $model->{$request->key} = $request->value;
        $model->save();
        return $model;
    }

    public function store(Request $request)
    {
        $data = FormRelation::create($request->all());

        return $data;
    }

    public function delete($index)
    {
        $item = FormRelation::skip($index)->first();
        $item->delete();
    }
}