<?php

namespace App\Http\Controllers;

use App\Models\Fornecedore;
use Illuminate\Http\Request;

/**
 * Class FornecedoreController
 * @package App\Http\Controllers
 */
class FornecedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedore::paginate();

        return view('fornecedore.index', compact('fornecedores'))
            ->with('i', (request()->input('page', 1) - 1) * $fornecedores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fornecedore = new Fornecedore();
        return view('fornecedore.create', compact('fornecedore'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Fornecedore::$rules);

        $fornecedore = Fornecedore::create($request->all());

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedore criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedore = Fornecedore::find($id);

        return view('fornecedore.show', compact('fornecedore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fornecedore = Fornecedore::find($id);

        return view('fornecedore.edit', compact('fornecedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Fornecedore $fornecedore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornecedore $fornecedore)
    {
        request()->validate(Fornecedore::$rules);

        $fornecedore->update($request->all());

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedore editado com sucesso!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fornecedore = Fornecedore::find($id)->delete();

        return redirect()->route('fornecedores.index')
            ->with('success', 'Fornecedore deletado com sucesso!');
    }
}
