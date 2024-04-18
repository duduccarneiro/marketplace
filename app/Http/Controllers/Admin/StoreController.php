<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        // $stores = Store::findOrFail(2);
        $stores = Store::all();

        return view('exemplo', compact('stores'));
    }

    public function store()
    {
        //Criar: Acive Record
        // $store = new Store();
        // $store->name = 'Loja exemplo';
        // $store->description = 'Descrição da Loja';
        // $store->about = 'Contexto da Loja';
        // $store->phone = '+552299999999';
        // $store->whatsapp = '+552299999999';

        // $store->save();

        // dump($store);

        //Atualizar: Acive Record
        // $store = Store::findOrFail(5);
        // $store->name = 'Loja exemplo 2 Editado...';

        // $store->save();

        // dump($store);

        //============================================================

        // Mass Assignment...

        // $store = Store::create([
        //     'name' => 'Loja exemplo',
        //     'description' => 'Descrição da Loja',
        //     'about' => 'Contexto da Loja',
        //     'phone' => '+552299999999',
        //     'whatsapp' => '+552299999999',
        // ]);

        // dump($store);

        //Delete
        // $store = Store::findOrFail(5);

        // return $store->delete();
    }
}
