<?php

namespace App\Controllers;
use App\Models\FoodModel;

class FoodController extends BaseController
{
    public function index()
    {
        $model = new FoodModel();
        $data['foods'] = $model->findAll();

        return view('foods/index', $data);
    }

    public function swipe()
    {
        $foodId = $this->request->getPost('id');
        $action = $this->request->getPost('action');

        // Exemple simple (tu peux améliorer)
        session()->push('seen', $foodId);

        if ($action === 'like') {
            session()->push('liked', $foodId);
        }

        return $this->response->setJSON(['status' => 'ok']);
    }
}