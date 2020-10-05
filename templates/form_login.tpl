{include 'header.tpl'}  

<form action="iniciar" method="POST">

  <div class="form-group">
    <label for="exampleInputEmail1">Email </label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="password">Password</label>
    <input name="contraseña" type="password" class="form-control" id="password">
  </div>

  <button type="submit" class="btn btn-primary">Entrar</button>

</form>