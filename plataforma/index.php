<?php 
session_start();
require('../db/conexao.php');
//VERIFICAMOS SE EXISTE A SESSAO TOKEN
if(isset($_SESSION['token']) && isset($_SESSION['id'])){
  //VERIFICAR SE A SESSION TOKEN É IGUAL A REGISTRADA NO BANCO
  $tokenSessao = $_SESSION['token'];
  $id = $_SESSION['id'];

  $sql = $pdo->prepare('SELECT * from administrativo WHERE token=? AND id=? LIMIT 1');
  $sql->execute(array($tokenSessao,$id));
  $quantos = $sql->rowCount();

  if($quantos == 0){
    session_unset();
    session_destroy();
    header('location ../login.php');
  }else
  {
    $dados = $sql->fetchAll();
  }
}else
{
  header('location: ../login.php');
}
?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Área Restrita</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">


  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- MODAL FULLSCREEN BS4 -->
  <style>
    .modal {
      padding: 0 !important;
    }
    .modal .modal-dialog{
      width: 100%;
      max-width: none;
      height: 100%;
      margin: 0;
    }
    .modal .modal-content{
      height: 100%;
      border: 0;
      border-radius: 0;
    }
    .modal .modal-body{
      overflow-y: auto;
    }
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <!-- <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li> -->
      <!-- Notifications Dropdown Menu -->
      <!-- <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li> -->
      <!-- <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="deslogar/" role="button">
          <i class="fa fa-power-off"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/logo-blog.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Área do Blog</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $dados[0]['nome'];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Postagens
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="categorias.php" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Categorias
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-10 my-2">
            <h1 class="m-0">Postagens</h1>
          </div><!-- /.col -->
          <div class="col-sm-2 my-2">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPostagem"><i class="fa fa-plus"></i> Nova Postagem</button>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Categoria</th>
                    <th>Titulo</th>
                    <th>URL</th>
                    <th>Status</th>
                    <th>Ações</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>JavaScript
                    </td>
                    <td>Como usar variáveis</td>
                    <td>como-usar-variaveis</td>
                    <td>Publicado</td>
                    <td>
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Editar</button>
                        <button type="button" class="btn btn-secondary"><i class="fa fa-ban"></i> Desativar</button>
                        <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Deletar</button>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- Modal Postagem -->
<!-- Modal -->
<div class="modal fade" id="modalPostagem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nova Postagem</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
            <img src="dist/img/post-padrao.jpg" class="img-fluid">
            <div class="row mt-5">
              <div class="form-group col-md-4">
                <label for="titulo">Categoria da Postagem</label>
                  <select class="form-control" id="inputGroupSelect01">
                    <option selected>Selecione a categoria</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
              </div>
              <div class="form-group col-md-8">
                <label for="titulo">Título da Postagem</label>
                <input type="text" placeholder="Digite o título do post" class="form-control" id="titulo" aria-describedby="titulo">
              </div>
            </div>
              <div class="row mt-1">
                <div class="form-group col-md-12">
                <label for="url">URL da Postagem</label>
                <input type="text" placeholder="Digite a URL do post. EX: meu-post" class="form-control" id="url" aria-describedby="url">
              </div>
              </div>
          </div>
          <div class="col-md-6">
              <label>Conteúdo da Postagem</label>
              <textarea id="summernote">
                Digite o seu contéudo aqui
              </textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Postar Artigo</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
</div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- REQUIRED SCRIPTS -->

<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {

    $('#summernote').summernote({height:440});

    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "language": {
                    "aria": {
                        "paginate": {
                            "first": "Primeiro",
                            "last": "Último",
                            "next": "Próximo",
                            "previous": "Anterior"
                        }
                    },
                    "autoFill": {
                        "cancel": "Cancelar",
                        "fill": "Preencher todas as células com",
                        "fillHorizontal": "Preencher células horizontalmente",
                        "fillVertical": "Preencher células verticalmente",
                        "info": ""
                    },
                    "buttons": {
                        "collection": "Coleção  <span class=\"ui-button-icon-primary ui-icon ui-icon-triangle-1-s\"><\/span>",
                        "colvis": "Visibilidade da Coluna",
                        "colvisRestore": "Restaurar Visibilidade",
                        "copy": "Copiar",
                        "copyKeys": "Pressione ctrl ou u2318 + C para copiar os dados da tabela para a área de transferência do sistema. Para cancelar, clique nesta mensagem ou pressione Esc..",
                        "copySuccess": {
                            "_": "%d linhas copiadas com sucesso",
                            "1": "Uma linha copiada com sucesso"
                        },
                        "copyTitle": "Copiar para a Área de Transferência",
                        "createState": "Criar estado",
                        "csv": "CSV",
                        "excel": "Excel",
                        "pageLength": {
                            "_": "Mostrar %d registros",
                            "-1": "Mostrar todos os registros"
                        },
                        "pdf": "PDF",
                        "print": "Imprimir",
                        "removeAllStates": "Remover todos os estados",
                        "removeState": "Remover",
                        "renameState": "Renomear",
                        "savedStates": "Estados salvos",
                        "stateRestore": "Estado %d",
                        "updateState": "Atualizar"
                    },
                    "datetime": {
                        "amPm": {
                            "0": "am",
                            "1": "pm"
                        },
                        "hours": "Hora",
                        "minutes": "Minuto",
                        "months": {
                            "0": "Janeiro",
                            "1": "Fevereiro",
                            "10": "Novembro",
                            "11": "Dezembro",
                            "2": "Março",
                            "3": "Abril",
                            "4": "Maio",
                            "5": "Junho",
                            "6": "Julho",
                            "7": "Agosto",
                            "8": "Setembro",
                            "9": "Outubro"
                        },
                        "next": "Próximo",
                        "previous": "Anterior",
                        "seconds": "Segundo",
                        "unknown": "-",
                        "weekdays": {
                            "0": "Dom",
                            "1": "Seg",
                            "2": "Ter",
                            "3": "Qua",
                            "4": "Qui",
                            "5": "Sex",
                            "6": "Sáb"
                        }
                    },
                    "decimal": "",
                    "editor": {
                        "close": "Fechar",
                        "create": {
                            "button": "Novo",
                            "submit": "Criar",
                            "title": "Criar novo registro"
                        },
                        "edit": {
                            "button": "Editar",
                            "submit": "Atualizar",
                            "title": "Editar registro"
                        },
                        "error": {
                            "system": "Ocorreu um erro no sistema (<a target=\"\\\" rel=\"nofollow\" href=\"\\\">Mais informações<\/a>)."
                        },
                        "multi": {
                            "info": "Os itens selecionados contêm valores diferentes para esta entrada. Para editar e definir todos os itens para esta entrada com o mesmo valor, clique ou toque aqui, caso contrário, eles manterão seus valores individuais.",
                            "noMulti": "Essa entrada pode ser editada individualmente, mas não como parte do grupo",
                            "restore": "Desfazer alterações",
                            "title": "Multiplos valores"
                        },
                        "remove": {
                            "button": "Remover",
                            "confirm": {
                                "_": "Tem certeza que quer deletar %d linhas?",
                                "1": "Tem certeza que quer deletar 1 linha?"
                            },
                            "submit": "Remover",
                            "title": "Remover registro"
                        }
                    },
                    "emptyTable": "Nenhum registro encontrado",
                    "info": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                    "infoEmpty": "Mostrando 0 até 0 de 0 registro(s)",
                    "infoFiltered": "(Filtrados de _MAX_ registros)",
                    "infoPostFix": "",
                    "infoThousands": ".",
                    "lengthMenu": "Exibir _MENU_ resultados por página",
                    "loadingRecords": "Carregando...",
                    "processing": "Carregando...",
                    "search": "Pesquisar",
                    "searchBuilder": {
                        "add": "Adicionar Condição",
                        "button": {
                            "_": "Construtor de Pesquisa (%d)",
                            "0": "Construtor de Pesquisa"
                        },
                        "clearAll": "Limpar Tudo",
                        "condition": "Condição",
                        "conditions": {
                            "array": {
                                "contains": "Contém",
                                "empty": "Vazio",
                                "equals": "Igual à",
                                "not": "Não",
                                "notEmpty": "Não vazio",
                                "without": "Não possui"
                            },
                            "date": {
                                "after": "Depois",
                                "before": "Antes",
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "number": {
                                "between": "Entre",
                                "empty": "Vazio",
                                "equals": "Igual",
                                "gt": "Maior Que",
                                "gte": "Maior ou Igual a",
                                "lt": "Menor Que",
                                "lte": "Menor ou Igual a",
                                "not": "Não",
                                "notBetween": "Não Entre",
                                "notEmpty": "Não Vazio"
                            },
                            "string": {
                                "contains": "Contém",
                                "empty": "Vazio",
                                "endsWith": "Termina Com",
                                "equals": "Igual",
                                "not": "Não",
                                "notContains": "Não contém",
                                "notEmpty": "Não Vazio",
                                "notEndsWith": "Não termina com",
                                "notStartsWith": "Não começa com",
                                "startsWith": "Começa Com"
                            }
                        },
                        "data": "Data",
                        "deleteTitle": "Excluir regra de filtragem",
                        "leftTitle": "Critérios Externos",
                        "logicAnd": "E",
                        "logicOr": "Ou",
                        "rightTitle": "Critérios Internos",
                        "title": {
                            "_": "Construtor de Pesquisa (%d)",
                            "0": "Construtor de Pesquisa"
                        },
                        "value": "Valor"
                    },
                    "searchPanes": {
                        "clearMessage": "Limpar Tudo",
                        "collapse": {
                            "_": "Painéis de Pesquisa (%d)",
                            "0": "Painéis de Pesquisa"
                        },
                        "collapseMessage": "Fechar todos",
                        "count": "{total}",
                        "countFiltered": "{shown} ({total})",
                        "emptyPanes": "Nenhum Painel de Pesquisa",
                        "loadMessage": "Carregando Painéis de Pesquisa...",
                        "showMessage": "Mostrar todos",
                        "title": "Filtros Ativos"
                    },
                    "searchPlaceholder": "",
                    "select": {
                        "cells": {
                            "_": "%d células selecionadas",
                            "0": "",
                            "1": "1 célula selecionada"
                        },
                        "columns": {
                            "_": "%d colunas selecionadas",
                            "0": "",
                            "1": "1 coluna selecionada"
                        },
                        "rows": {
                            "_": "Selecionado %d linhas",
                            "0": "",
                            "1": "Selecionado 1 linha"
                        }
                    },
                    "stateRestore": {
                        "creationModal": {
                            "button": "Criar",
                            "columns": {
                                "search": "Busca de colunas",
                                "visible": "Visibilidade da coluna"
                            },
                            "name": "Nome:",
                            "order": "Ordernar",
                            "paging": "Paginação",
                            "scroller": "Posição da barra de rolagem",
                            "search": "Busca",
                            "searchBuilder": "Mecanismo de busca",
                            "select": "Selecionar",
                            "title": "Criar novo estado",
                            "toggleLabel": "Inclui:"
                        },
                        "duplicateError": "Já existe um estado com esse nome!",
                        "emptyError": "Não pode ser vazio!",
                        "emptyStates": "Nenhum estado salvo",
                        "removeConfirm": "Confirma remover %s?",
                        "removeError": "Falha ao remover estado!",
                        "removeJoiner": "e",
                        "removeSubmit": "Remover",
                        "removeTitle": "Remover estado",
                        "renameButton": "Renomear",
                        "renameLabel": "Novo nome para %s:",
                        "renameTitle": "Renomear estado"
                    },
                    "thousands": ".",
                    "zeroRecords": "Nenhum registro encontrado"
    } 
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
