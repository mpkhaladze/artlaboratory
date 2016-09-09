<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Store;
use App\Models\Category;
use App\Models\Author;
use App\Models\Kind;
use App\Models\Material;
use App\Models\Photo;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item_model = new Item();
        $items = $item_model->allItems();
        return view('admin.items.index')->with(compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item_model = new Item();
        $items = $item_model->allItems();
        
        $author_model = new Author();
        $authors = $author_model->allAuthors();

        $kind_model = new Kind();
        $kinds = $kind_model->allKinds();

        $material_model = new Material();
        $materials = $material_model->allMaterials();

        $store_model = new Store();
        $stores = $store_model->allStores();

        $category_model = new Category();
        $categories = $category_model->allcategories();
        return view('admin.items.create')->with(compact('items','authors','kinds','materials','stores','categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:20',
            'weight' => 'required',
            'length' => 'required',
            'width' => 'required',
            'material_id' => 'required',
            'author_id' => 'required',
            'store_id' => 'required',
            'kind_id' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            ]);

        $item = new Item;
        $item->name = $request->name;
        $item->weight = $request->weight;
        $item->length = $request->length;
        $item->width = $request->width;
        $item->material_id = $request->material_id;
        $item->author_id = $request->author_id;
        $item->store_id = $request->store_id;
        $item->kind_id = $request->kind_id;
        $item->category_id = $request->category_id;
        $item->description = $request->description;
        $item->save();
        //dd($item->id);

        //dd($request->all());
        //$imageTempName = $request->file('photo-1')->getPathname();
        $imageName = $request->file('photo-1')->getClientOriginalName();
        $path = base_path() . '/storage/app/items/img/' . $item->id;
        $request->file('photo-1')->move($path , $imageName);
        //dd($path);
        //$photoLink = $item->id . '/' . $imageName;
        $photo =new Photo;
        $photo->fileName = $imageName;
        $photo->item_id = $item->id;
        $photo->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return ('jsdbgisdbjsdb');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::find($id);
        Item::where('id', $id)
            ->delete();
        return redirect()->back();    }
}
