<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'can:Crear Categoría'])->only('create', 'store');
        $this->middleware(['auth', 'can:Listar Categoría'])->only('index');
        $this->middleware(['auth', 'can:Editar Categoría'])->only('edit', 'update');
        $this->middleware(['auth', 'can:Eliminar Categoría'])->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::paginate(8);
        return view('private.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('private.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'status' => 1,
        ]);

        return redirect()->route('categories.index')
            ->with(['info' => 'Se ha creado la categor&iacute;a con &eacute;xito',
                'title' => 'Eureka',
                'alert' => 'success',
            ]);
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
    public function edit(Category $category)
    {
        return view("private.categories.edit", compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);

        $category->update($request->all());

        return redirect()->route('categories.index')
            ->with(['info' => 'Se ha actualizado la categor&iacute;a con &eacute;xito',
                'title' => 'Eureka',
                'alert' => 'success',
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categories.index')
            ->with(['info' => 'Se ha eliminado la categor&iacute;a con &eacute;xito',
                'title' => 'Eureka',
                'alert' => 'success',
            ]);
    }
}