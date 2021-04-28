<?php
namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

use App\Models\Compra;

class ComprasController extends Controlle
{
  public function __construct()
  {
    session_start();

    if(!isset($_SESSION['id'])){
    
      header("Location: /login");

      die();

    }


  }



  public function index(ServerRequestInterface $request, ResponseInterface $response)
  {

    $modelos = Compra::all(); 
    $this->modelos = $modelos;
    return $this->view('compras/index',$response);

  }


  public function detalhe(ServerRequestInterface $request, ResponseInterface $response)
  { 
    
    $id = $request->getAttribute('id'); 
    $modelo = Compra::find($id);   
    $this->modelo = $modelo;
    return $this->view('compras/show',$response);

  }


  public function adicionar(ServerRequestInterface $request, ResponseInterface $response)
  {
    return $this->view('compras/create',$response);
  }

  public function salvar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $dados = $request->getParsedBody();
    $modelo = new Compra;
    $modelo->titulo = $dados['titulo'];
    $modelo->desc = $dados['desc'];
    $idModelo= $modelo->save();

    if($idModelo){
      //sucesso
    }else{
      //erro
    }

    return $response->withRedirect('/compras');
  }

  public function editar(ServerRequestInterface $request, ResponseInterface $response)
  {
    $id = $request->getAttribute('id'); 
    $modelo = Compra::find($id);   
    $this->modelo = $modelo;
    return $this->view('compras/edit',$response);
  }

  public function atualizar(ServerRequestInterface $request, ResponseInterface $response)
  {
    
    $dados = $request->getParsedBody();
    $id = $request->getAttribute('id'); 

    $modelo = Compra::find($id);   
    $modelo->titulo = $dados['titulo'];
    $modelo->desc = $dados['desc'];
    $idModelo = $modelo->save();
    return $response->withRedirect('/compras');

  }
  
  public function delete(ServerRequestInterface $request, ResponseInterface $response)
  {
    $id = $request->getAttribute('id'); 
    $modelo = Compra::find($id);    
    $idModelo = $modelo->delete();
    return $response->withRedirect('/compras');

  }
  


}
