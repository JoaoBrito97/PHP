<!DOCTYPE html>
  <head>
    <title>CADASTRO</title>
    <link rel="icon" type="image/x-icon" href="./assets/favicon.ico" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="text-center mt-5">Junte-se ao time!</h4>
            </div>
        </div>
        <div class="row justify-content-center my-3">
          <div class="col-sm-12 col-md-12 col-lg-6">
          <hr class="bg-dark">
            <form method="POST" action="ACAO/cadastrar.php">
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" placeholder="Nome" name="nome" id="nome">
                </div>
                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" placeholder="Sobre" name="sobre" id="sobre">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-3">
                  <input type="text" class="form-control" placeholder="CEP" name="ce" id="ce">
                </div>
                <div class="form-group col-sm-9">
                  <input type="text" class="form-control" placeholder="Endereco" name="en" id="en">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <input type="text" class="form-control" placeholder="Cidade" name="cd" id="cd">
                </div>
                <div class="form-group col-sm-4">
                  <input type="text" class="form-control" placeholder="Bairro" name="ba" id="ba">
                </div>
                <div class="form-group col-sm-4">
                  <input type="text" class="form-control" placeholder="Estado" name="es" id="es">
                </div>
              </div>
              <!--- <h4 class="text-center">Informações para contato</h4>
              <div class="form-row mt-3">
                <div class="form-group col-sm-6">
                  <input type="tel" class="form-control" pattern="[0-9]{4}" name="tel" id="tel">
                </div>
                <div class="form-group col-sm-6">
                  <input type="tel" class="form-control" pattern="[0-9]{4}" name="cel" id="cel">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <input type="text" class="form-control" placeholder="E-mail" name="el" id='el'>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" placeholder="Senha" name="pass" id="pass">
                </div>
                <div class="form-group col-sm-6">
                  <input type="text" class="form-control" placeholder="Confirmar Senha" name="cpass" id="cpass">
                </div>
              </div>-->
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <input type="submit" class="form-control btn-primary" name="cadastrar" value="Cadastrar">
                </div>
                <div class="form-group col-sm-6">
                  <input type="reset" class="form-control btn-danger" name="limpar" value="Limpar">
                </div>
              </div>
            </form>
          </div>
        </div>
    </div>
  </body>
</html>