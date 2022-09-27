<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../Asset/css/login-registro.css">
</head>
<body>
    <div class="login-wrap">
        <div class="login-html">
            <div class="header-logo">
					<a href="../index.php" class="logo">
						<img src="../Asset/img/logo.png" alt="">
					</a>
				</div>
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Ingresar</label>
            <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Registrarse</label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Usuario</label>
                        <input id="user" type="text" class="input">
                     

                    </div>
                    <div class="group">
                        <label for="pass" class="label">Contraseña</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>

                    <div class="group">
                        <label for="rol">Rol</label>
                        <select name="" class="select">
                        <option value="">Seleccione su rol</option>
                        <option value="">Cliente</option>
                        <option value="">Administrador</option>
                        </select>
                    </div>

                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Recordar</label>
                    </div>
                    <div class="group">
                        <a href="../Dashboard.php"><input type="submit" class="button" value="Ingresar"></a>
                    </div>
                    <div class="hr"></div>
                    <div class="foot-lnk">
                        <a href="#forgot">Olvidaste tu contraseña?</a>
                    </div>
                    <br>
                </div>
                <div class="sign-up-htm">
                    <div class="group">
                        <label for="user" class="label">Usuario</label>
                        <input id="user" type="text" class="input">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Contraseña</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Repetir Contraseña</label>
                        <input id="pass" type="password" class="input" data-type="password">
                    </div>
                    <div class="group">
                        <label for="pass" class="label">Correo Electronico</label>
                        <input id="pass" type="text" class="input">
                    </div>

                    <div class="group">
                        <label for="rol">Rol</label>
                        <select name="" class="select">
                        <option value="">Seleccione su rol</option>
                        <option value="">Cliente</option>
                        <option value="">Administrador</option>
                        </select>
                    </div>

                    <div class="group">
                        <input type="submit" class="button" value="Registrarse">
                    </div>
                    <div class="foot-lnk">
                        <label for="tab-1">Ya tienes Cuenta?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>