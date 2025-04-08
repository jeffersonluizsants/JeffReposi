
    <!DOCTYPE html>
    <html lang = "pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="index.css">
            <div style="background-color: lightgray; padding: 10px;">
                <title>Protocolo de Cartas</title>  
            </div>
        </head>
        <body>
    <form action="index.php" method= "POST">
        <label for="data">Data:</label>
        <input type="date" id="data" name ="data" required>
        <br><br>
        <label for="doom">Destino:</label>
        <input type="text" id="doom" name="destino" required>
        <br><br>
        <label for="carta">Carta:</label>
        <select id="tipo" name="tipo">
            <option value="AGC">AGC</option>
            <option value="AMB">AMB</option>
        <input type="text" id="carta" name="carta" required>
        <br><br>
        </select>
        <label for="number">Quantidade de Cartas: </label>
        <input type="number" id="number" name="number" required>
        <br><br>
        <button type="submit">Enviar</button>
    </form>
            <h2>Proxima Carta:</h2>
            <ol>
                <li>AGC-001/2025 </li>
            
            </ol>
        </body>
    </html>



