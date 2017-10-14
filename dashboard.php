olá,  <?=$user['nome_usuario']; ?>
<hr>
<br><br>
Selecione um arquivo para encriptar
<br><br>
    <div class="col-lg-8">
        <form class="form-inline" method="post" action="http://localhost/segura/backend/criptar.php" enctype="multipart/form-data">

            <div class="input-group col-lg-6">
                <input type="file" class="form-control" name="arquivo" id="arquivo" required="required"/>
            </div>
            <br>
            <div class="text-right">
                <button type="submit" class="btn btn-success"> Enviar </button>
            </div>
        </form>
    </div>
    <hr>
    <br><br>
    Selecione um arquivo para decriptar
    <br><br>
    <div class="col-lg-8">
        <form class="form-inline" method="post" action="http://localhost/segura/backend/decriptar.php" enctype="multipart/form-data">

            <div class="input-group col-lg-6">
                <input type="file" class="form-control" name="arquivo" id="arquivo" required="required"/>
            </div>
            <br>
            Informe a Key
            <div class="input-group col-lg-6">
                <input type="text" class="form-control" name="chave" id="chave" required="required"></input>
            </div>
            <br>
            <div class="text-right">
                <button type="submit" class="btn btn-success"> Enviar </button>
            </div>
        </form>
    </div>
