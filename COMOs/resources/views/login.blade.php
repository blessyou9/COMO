<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Inicio de sesión </title>
    <link  rel="icon"   href="/loginicono2.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</head>
<body class="text-center" >
    <div>
        <h1 class="mt-4 display-1 text-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
        </svg>
        <br>
        
    </h1>
    <div class="container mt-5 col-md-3" >
        <center>

            <div class="card" style="width: 18rem;">
    
                <form action="producto" method="GET">
                    <!--Es para qque el server acepte el form-->
                    @CSRF
                    <div >
                        <label class="form-label" name="labelusuario">Usuario: </label>
                        <input type="text" required class="form-control" name="usuario" placeholder="usuario@ejemplo.com">
                    </div>
                    <br>
                    <div>
                        <label class ="form-label" name="labelcontraseña">Contraseña: </label>
                        <input type="password" required class="form-control" name="contraseña" placeholder="Contraseña">
                    </div>
            </div>
        </center>
        <br>
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="recordarme">
                "Recordarme"
            </label>
        </div>
        <div>
            <center>
                <button class="nose" type="submit" name=btnGuardar>Ingresar
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
                </button>
            </center>
            </form>
        </div>
        </div>
    </div>
    </div>
    
</body>
</html>
<style>

.nose {
    width: 170px;
    height: 60px;
    box-sizing: border-box;
    -webkit-appearance: none;
        -moz-appearance: none;
            appearance: none;
    background-color: #00FFBD;
    border: 2px solid #e74c3c;
    border-radius: 0.6em;
    color: #e74c3c;
    cursor: pointer;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-align-self: center;
        -ms-flex-item-align: center;
            align-self: center;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1;
    margin: 10px;
    padding: 1.2em 2.8em;
    text-decoration: none;
    text-align: left;
    text-transform: uppercase;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    }
    .nose:hover, .nose:focus {
    color: #fff;
    outline: 0;
    }


    .nose {
    border-color: #3498db;
    color: #fff;
    box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;
    -webkit-transition: all 150ms ease-in-out;
    transition: all 150ms ease-in-out;
    }
    .nose:hover {
    box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;
    }

    body{
    background-color: #BDCDCF;
}

</style>