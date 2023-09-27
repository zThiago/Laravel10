<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;
use App\Services\LivrosServices;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    private Livro $livro;

    public function __construct(Livro $livro)
    {
     $this->livro = $livro;
    }

    public function create(LivroRequest $livroRequest){
        return response()->json($this->livro->create($livroRequest->all()), 201);
    }

    public function all(){
        return response()->json($this->livro->all());
    }

    public function show(int $id){
        $livro = $this->livro->find($id);
        if(!$livro){
            return response()->json(["msg" => "livro não encontrado"], 404);
        }
        return response()->json($livro);
    }

    public function update(int $id,LivroRequest $livroRequest){
        $livro = $this->livro->find($id);
        if(!$livro){
            return response()->json(["msg" => "livro não encontrado"], 404);
        }
        $livro->update($livroRequest->all());
        return response()->json($livro);
    }

    public function delete(int $id){
        $livro = $this->livro->find($id);
        if(!$livro){
            return response()->json(["msg" => "livro não encontrado"], 404);
        }

        $livro->delete();
        return response()->json([], 204);
    }
}
