<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Session;

class ItemController extends Controller
{
    public function index()
    {
    	$data = Item::all();
        return view('backend.admin.item.item', compact('data'));
    }

    public function create()
    {
        return view('backend.admin.item.add_item');
    }

    public function store(Request $request)
    {
        $this->validate($request, array(
            'nama_item'     => 'required',
            'harga'   => 'required',
            ));

        Item::create($request->all());

        Session::flash('new', 'New item was successfully added!');
        return redirect('item');
    }
   
    public function edit($id)
    {
        $data = Item::find($id);
        return view('backend.admin.item.edit_item', compact('data'));
    }

    public function update(Request $request, $id)
    {
        Item::find($id)->update($request->all());
        Session::flash('update', 'Update item was successfully updated!');
        return redirect('item');
    }

    public function destroy($id)
    {
        if(Item::findOrFail($id)->delete())
        {
            Session::flash('delete', 'Item was successfully deleted!');
            return redirect('item');
        }
    }
}
