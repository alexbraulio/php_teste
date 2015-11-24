<html>
  
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="/css/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <link href="/css/font-awesome.min.css"
    rel="stylesheet" type="text/css">
    <link href="themes/default/bootstrap.css"
    rel="stylesheet" type="text/css">
  </head>
  
  <body>
    <?
 include "conexao.php";
?>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form method="post" role="form" action="funcoes.php?funcao=gravar">
              <div class="form-group">
                <label class="control-label" for="marca">adicinando uma marca</label>
                <input name="marca" type="text"class="form-control" id="marca"
                placeholder="Coloque a marca desejada" type="email">
              </div>
              <button type="submit" class="btn btn-default">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>

</html>