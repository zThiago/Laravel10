<?php
namespace App\Services;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;

class LivrosServices{
  private Livro $livro;

  public function __construct(Livro $livro)
  {
    $this->livro = $livro;
  }

  public function create(LivroRequest $livroRequest){
    $this->livro->create($livroRequest->all());
  }
}

?>
