<?php
namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function lista(){
        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->withProdutos($produtos);
    }

    public function mostra(){
      //$id = Request::input('id','1');
      $id = Request::route('id');
      $resposta = DB::select('select * from produtos where id=?',[$id]);
      return view("produto.detalhes")->with('p',$resposta[0]);
    }
}
