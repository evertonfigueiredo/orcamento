<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Core;
use App\Models\Produto;
use Illuminate\Http\Request;

/**
 * Class ProdutoController
 * @package App\Http\Controllers
 */
class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::with('core', 'categoria')->paginate();

        return view('produto.index', compact('produtos'))
            ->with('i', (request()->input('page', 1) - 1) * $produtos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produto = new Produto();
        $cores = Core::all();
        $categorias = Categoria::all();

        return view('produto.create', compact('produto', 'cores', 'categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Produto::$rules);

        // Converte o valor de moeda para ponto flutuante usando a função de conversão
        $valorFloat = convertCurrencyToFloat($request->input('valor'));

        // Cria um novo array de dados para o produto com o valor convertido
        $produtoData = $request->all();
        $produtoData['valor'] = $valorFloat;

        $produto = Produto::create($produtoData);

        return redirect()->route('produtos.index')
            ->with('success', 'Produto criado com sucesso.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            // Produto não encontrado
            return redirect()->route('produtos.index')->with('error', 'Produto não encontrado.');
        }

        return view('produto.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto = Produto::find($id);
        $cores = Core::all();
        $categorias = Categoria::all();

        if (!$produto) {
            // Produto não encontrado
            return redirect()->route('produto.index')->with('error', 'Produto não encontrado.');
        }

        return view('produto.edit', compact('produto', 'cores', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Produto $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        request()->validate(Produto::$rules);

        $produto->update($request->all());

        return redirect()->route('produtos.index')
            ->with('success', 'Produto editado com sucesso!');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $produto = Produto::find($id)->delete();

        return redirect()->route('produtos.index')
            ->with('success', 'Produto deletado com sucesso!');
    }
}
