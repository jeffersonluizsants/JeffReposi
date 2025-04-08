<!DOCTYPE html>
    <html lang = "pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="index.css">
            <div style="background-color: lightgray; padding: 10px;">
                <title>Cadastro de Usuario</title>  
            </div>
        </head>
        <body>
        <form action="SalvarUsuario.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" required>

        <button type="submit">Enviar</button>

        </form>
        </body>
        </html>