<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Cadastro de Usuário</title>
</head>
<body>
    <form name="CadUsuario" id="CadUsuario" action="" method="POSt">
        Login: <input type="text" name="login" id="login"><br/>
        Senha: <input type="password" name="senha1" id="login"><br/>
        Confirmação da Senha<input type="password" name="senha2" id="senha2"><br/>
        <select name="permissao" id="permissao">
            <option value="0"></option>
            <option value="A">Administrador</option>
            <option value="C">Comum</option>
</select><br/><br/>
<input type="subnit" name="btnSalvar" id="btnSalvar">
   </form>
</body>

<div class="container">
        <form name="cadUsuario" id="cadUsuario" action="" method="post">
            <div class="card" style="top:40px">
                <div class="card-header">
                    <span class="card-title">Usuários</span>
                </div>
                <div class="card-body">
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Login:</label>
                    <input type="text" class="form-control col-sm-8" name="login" id="login" 
                    value="" />
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Senha:</label>
                    <input type="password" class="form-control col-sm-8" name="senha1" id="senha1" 
                    value="" />
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Confirmação:</label>
                    <input type="password" class="form-control col-sm-8" name="senha2" id="senha2"
                    value="" />
                </div>
                <div class="form-group form-row">
                    <label class="col-sm-2 col-form-label text-right">Permissão:</label>
                    <select name="permissao" id="permissao" class="form-control col-sm-8">
                        <option value="0"></option>
                        <option value="A">Administrador</option>
                        <option value="C">Comum</option>
                    </select>
                </div>
                <div class="card-footer">
                    <input type="hidden" name="id" id="id" 
                    value="" />
                    <input type="submit" class="btn btn-success" name="btnSalvar" id="btnSalvar">
                </div>
            </div>
        </form>
    </div>

<?php

require_once './head.php';

    if(isset($_POST['btnCadastrar'])){

        require_once './controller/UsuarioController.php';
        call_user_func(array('UsuarioController','salvar'));
    }
    require_once '../foot.php';
?>
