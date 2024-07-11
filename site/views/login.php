<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/bootstrap/bootstrap.min.css">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
            flex-direction: column;
            /* background-image: url("https://png.pngtree.com/background/20230528/original/pngtree-pokemon-adventure-forest-the-art-world-of-pokemon-wallpaper-picture-image_2778719.jpg");
            background-repeat: no-repeat;
            background-size: cover; */
        }

        #pokeballImage {
            width: 200px;
        }

        /* Estilos para el formulario */
        #formContainer {
            display: none;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        #formContainer form {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <img src="https://pa1.aminoapps.com/6133/ffc5c0aa7ee9a68474b117f7bb1e6750b3bb6fa6_00.gif" id="pokeballImage">

    <div id="formContainer">

        <form method="POST" action="index.php?controller=login&action=authenticate">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordar credenciales</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Iniciar</button>
            <?php if (isset($error)) { ?>
                <p style="color: red;"><?php echo $error; ?></p>
            <?php } ?>
        </form>

        <p>¿No tienes ninguna cuenta? Crea una <a href="index.php?controller=register&action=index">aquí</a></p>
    </div>

    <script>
        // Esperar 3 segundos y mostrar el formulario
        setTimeout(function() {
            var pokeballImage = document.getElementById('pokeballImage');
            var formContainer = document.getElementById('formContainer');

            pokeballImage.style.display = 'none';
            formContainer.style.display = 'block';
        }, 3000);
    </script>

</body>

</html>