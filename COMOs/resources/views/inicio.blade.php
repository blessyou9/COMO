<font face="arial black,verdana" size=8>C.O.M.O</font>

<body>
    <div>
        <form action="contact_post" method="POST">
        
            @csrf
            <center>
                <font face="Ginebra,verdana" size=8>Ingresa tu información</font>
                <br>
                <br>
            <font face="arial,verdana" size=5>Nombre</font>
            <input type="text" name="nombre" id="">
            <br>
            <br>
            <font face="arial,verdana" size=5>Apellido</font>
            <input type="text" name="apellido" id="">
            <br>
            <br>
            <font face="arial,verdana" size=5>Mensaje</font>
            <textarea name="mensaje"></textarea>
            <br>
            <br>
            <input type="submit" value="Enviar">
            </center>

        </form>
    </div>
</body>
<style>
    body{
          background-image: url("almacen.webp");
          background-position: 50% 50%;
          background-repeat: no-repeat;
        }
        img{
            margin: 10%;
            width: 200px;
            height: 150px;

            display: flex;
            justify-content: right;
        }
</style>