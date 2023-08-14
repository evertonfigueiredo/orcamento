<?php

namespace App\Http\Controllers;

use App\Models\Core;
use Illuminate\Http\Request;

/**
 * Class CoreController
 * @package App\Http\Controllers
 */
class CoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cores = Core::paginate();

        return view('core.index', compact('cores'))
            ->with('i', (request()->input('page', 1) - 1) * $cores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $core = new Core();
        return view('core.create', compact('core'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Core::$rules);

        $core = Core::create($request->all());

        return redirect()->route('cores.index')
            ->with('success', 'Cor adicionada com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $core = Core::find($id);

        if (!$core) {
            // Cor não encontrado
            return redirect()->route('cores.index')->with('error', 'Cor não encontrado.');
        }

        return view('core.show', compact('core'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $core = Core::find($id);

        if (!$core) {
            // Cor não encontrado
            return redirect()->route('cores.index')->with('error', 'Cor não encontrado.');
        }

        return view('core.edit', compact('core'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Core $core
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Core $core)
    {
        request()->validate(Core::$rules);

        $core->update($request->all());

        return redirect()->route('cores.index')
            ->with('success', 'Cor atualizada com sucesso!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $core = Core::find($id)->delete();

        return redirect()->route('cores.index')
            ->with('success', 'Cor deletada com sucesso!');
    }
}
