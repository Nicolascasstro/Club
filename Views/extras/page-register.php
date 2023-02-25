<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar Sesion</title>
    <link rel="web icon" href="../website-externo/assets/img-S-bam-Club/icono.png">

    <!-- Styles -->
    <link href="../dashboard/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../dashboard/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../dashboard/css/lib/helper.css" rel="stylesheet">
    <link href="../dashboard/css/style.css" rel="stylesheet">
</head>

<body class="bg-primary">

    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="../../index.html"><img src="../website-externo/assets/img-S-bam-Club/logo-positivo.png" alt=""></a>
                        </div>
                        <div class="login-form">
                            <h4>CREATE NEW ACCOUNT</h4>
                            <p class="text-center">Completa los campos para registrarte en el sistema</p>
                            <form action="../../Controller/registrarUserE.php" method="POST">

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label>User Name</label>
                                        <input type="text" name="nombre_usuario" class="form-control" placeholder="User Name">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" name="apellido_usuario" class="form-control" placeholder="Email">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Document Type :</label>
                                        <select name="tipoDoc" id="" class="form-control">
                                            <option >Seleccione una opcion...</option>
                                            <option value="TI">TI</option>
                                            <option value="CC">CC</option>
                                            <option value="PASAPORTE">PASAPORTE</option>
                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Document</label>
                                        <input type="number" name="Identificacion" class="form-control" placeholder="CC">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="number" name="numero" class="form-control" placeholder="Phone number">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="contraseña" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
										<input type="checkbox"> Agree the terms and policy 
									</label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                <div class="register-link m-t-15 text-center">
                                    <p>Already have account ? <a href="page-login.html"> Sign in</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>