<?php
namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;
use App\Http\Requests\TypeRequest;

class TypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', [
            'only' => ['create' , 'store', 'edit', 'update', 'destroy']
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::paginate(8);
        return view('public.types.index', compact('types'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //  public function create()
    //  {
    //      return view('public.types.create');
    //  }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(TypeRequest $request)
    // {
    //     Type::create([
    //         'name' => request('name'),
    //         'slug' => str_slug(request('name'), "-"),
    //         'description' => request('description')
    //     ]);
    //     return redirect('/');
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    // public function show($type)
    // {
    //     $type = Type::where('slug', $type)->firstOrFail();
    //     return view('public.types.show', compact('type'));
    // }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Type $type
     * @return \Illuminate\Http\Response
     */
    // public function edit(Type $type)
    // {
    //     return view('public.types.edit', compact('type'));
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    // public function update(TypeRequest $request, Type $type)
    // {
    //     $type->update([
    //         'name' => request('name'),
    //         'slug' => str_slug(request('name'), "-"),
    //         'description' => request('description')

    //     ]);
    //     return redirect('/types/'.$type->slug);
    // }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Type  $type
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Type $type)
    // {
    //     $type->delete();
    //     return redirect('/');
    // }
}
