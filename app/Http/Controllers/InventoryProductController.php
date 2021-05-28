<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InventoryProduct;
class InventoryProductController extends Controller
{
    //
    function show()
    {
        $data= InventoryProduct::all();
        return view('front',['InventoryProducts'=>$data]);
    }
     function addData(Request $req)
    {
        $productInventory = new InventoryProduct;
        $productInventory->name=$req->name;
        $productInventory->quantity=$req->quantity;
        $productInventory->save();
        return redirect('front');
    }
    function delete($id)
    {
        $data=InventoryProduct::find($id);
        $data->delete();
        return redirect('front');
    }
   
    function showData($id)
    {
        $data= InventoryProduct::find($id);
        return view('edit',['data'=>$data]);
    }
    function update(Request $req)
    {
        $data= InventoryProduct::find($req->id);
        $data->name=$req->name;
        $data->quantity=$req->quantity;
        $data->save();
        return redirect('front');
        
    }
}
