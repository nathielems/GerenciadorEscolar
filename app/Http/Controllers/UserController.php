<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ValidacaoUser;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users=User::all();
        return view('users.tabelaUsers',['users' => $users]);
    }

    public function create()
    {
        $collection = collect([
            ['id' => 1, 'descricao' => 'Administrador de TI'],
            ['id' => 2, 'descricao' => 'Administrador de Sistema'],
            ['id' => 3, 'descricao' => 'Operador'],
        ]);

        $categorias = json_decode(json_encode($collection));
        
        if (Auth::user()->categoria == 2){
            $categorias = array_filter($categorias,function($item){
                return $item->id == 3;
            });
        }

        return view('users.formUser',['categorias' => $categorias]);
    }

    public function store(ValidacaoUser $request)
    {
        $user= new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->remember_token ='remember_token';
        $user->categoria = $request->input('categoria');

        $user->save();
        
        return redirect()->route('listaUsers');

    }

    public function edit($id)
    {
        $user=User::find($id);

        $categoria = $user->categoria;

        $collection = collect([
            ['id' => 1, 'descricao' => 'Administrador de TI'],
            ['id' => 2, 'descricao' => 'Administrador de Sistema'],
            ['id' => 3, 'descricao' => 'Operador'],
        ]);
     
        $categorias = json_decode(json_encode($collection));
            
        if (Auth::user()->categoria == 2){
            $categorias = array_filter($categorias,function($item) use ($categoria){
                return $item->id == 3 || $item->id == $categoria;
            });
        }

        return view('users.editUser', ['categorias' => $categorias, 'user' => $user]);
	}

    public function update(ValidacaoUser $request, $id)
    {

        $user= User::find($id);
        $user->name = $request->input('name');
        $user->email =$request->input('email');

        if (Hash::needsRehash($request->input('password')))
        {
            $user->password = Hash::make($request->input('password'));
        }

        $user->remember_token = $request->input('remember_token');
        $user->categoria = $request->input('categoria');
        
        $user->save();

        return redirect()->route('listaUsers')->with('sucesso', 'Aluno atualizado!');
    }

    public function destroy($id)
    {
        $user = User::find($id)->delete();

        return redirect()->route('listaUsers');
    }
}
