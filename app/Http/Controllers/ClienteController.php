<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Ciudade;
use App\Models\Empresa;

/**
 * Class ClienteController
 * @package App\Http\Controllers
 */
class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:clientes.index')->only('index');
        $this->middleware('can:clientes.create')->only('create', 'store');
        $this->middleware('can:clientes.show')->only('show');
        $this->middleware('can:clientes.edit')->only('edit', 'update');
        $this->middleware('can:clientes.destroy')->only('destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::paginate();

        return view('cliente.index', compact('clientes'))
            ->with('i', (request()->input('page', 1) - 1) * $clientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente = new Cliente();
        $ciudades = Ciudade::pluck('nom_ciu', 'cod_ciu');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('cliente.create', compact('cliente', 'empresas', 'ciudades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cliente::$rules);

        $cliente = Cliente::create($request->all());

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $cod_cli
     * @return \Illuminate\Http\Response
     */
    public function show($cod_cli)
    {
        $cliente = Cliente::find($cod_cli);

        return view('cliente.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string $cod_cli
     * @return \Illuminate\Http\Response
     */
    public function edit($cod_cli)
    {
        $cliente = Cliente::find($cod_cli);
        $ciudades = Ciudade::pluck('nom_ciu', 'cod_ciu');
        $empresas = Empresa::pluck('nom_emp', 'nit_emp');
        return view('cliente.edit', compact('cliente', 'empresas', 'ciudades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $cliente)
    {
        // Validar los campos del formulario, excepto 'cod_cli'
        $request->validate(Arr::except(cliente::$rules, 'cod_cli'));
    
        // Verificar si el valor de 'cod_cli' ha cambiado
        if ($request->input('cod_cli') !== $cliente->cod_cli) {
            // Validar 'cod_cli' como único en la tabla 'clientes'
            $request->validate([
                'cod_cli' => 'required|unique:clientes,cod_cli',
            ]);
        }
    
        // Actualizar los atributos del modelo cliente
        $cliente->update($request->all());
    
        return redirect()->route('clientes.index')->with('success', 'cliente updated successfully');
    }
    /**
     * @param string $cod_cli
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($cod_cli)
    {
        $cliente = Cliente::find($cod_cli)->delete();

        return redirect()->route('clientes.index')
            ->with('success', 'Cliente deleted successfully');
    }
}
