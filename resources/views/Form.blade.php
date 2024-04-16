<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro de Reservas</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
    font-family: sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f2f2f2;
}

.container {
    width: 600px;
    margin: 0 auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    text-align: center;
    margin-bottom: 20px;
}

.campo {
    margin-bottom: 15px;
}

label {
    display: block;
    margin-bottom: 5px;
}

input,
select,
textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

select {
    appearance: none;
    background-image: url("data:image/svg+xml;base64,U3VzcGVuOnN2Zy1jYXN0OyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSh0aGF0dCgpOiIgUmVzb25jZSBub24tU0VTLT1yZWN0YW50ZCcpLCBpZD0iU3ZnX20xNTc2Mjk1OTU2NTQ1Iيك=");
    background-repeat: no-repeat;
    background-position: right center;
    background-size: 16px 16px;
    padding-right: 30px;
    cursor: pointer;
}

textarea {
    height: 100px;
    resize: vertical;
}

.botones {
    text-align: center;
    margin-top: 20px;
}

button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

button[type="reset"] {
    background-color: #007bff

    </style>
</head>
<body>
    <div class="container">
        <h1>Formulario de Registro de Reservas</h1>

        <form action="procesar_reserva.php" method="post">
            <div class="campo">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="campo">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>

            <div class="campo">
                <label for="correo_electronico">Correo electrónico:</label>
                <input type="email" id="correo_electronico" name="correo_electronico" required>
            </div>

            <div class="campo">
                <label for="telefono">Teléfono:</label>
                <input type="tel" id="telefono" name="telefono" required>
            </div>

            <div class="campo">
                <label for="fecha_llegada">Fecha de llegada:</label>
                <input type="date" id="fecha_llegada" name="fecha_llegada" required>
            </div>

            <div class="campo">
                <label for="fecha_salida">Fecha de salida:</label>
                <input type="date" id="fecha_salida" name="fecha_salida" required>
            </div>

            <div class="campo">
                <label for="numero_adultos">Número de adultos:</label>
                <select id="numero_adultos" name="numero_adultos" required>
                    <option value="">Seleccione un número</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>

            <div class="campo">
                <label for="numero_ninos">Número de niños:</label>
                <select id="numero_ninos" name="numero_ninos">
                    <option value="">Seleccione un número</option>
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="campo">
                <label for="tipo_habitacion">Tipo de habitación:</label>
                <select id="tipo_habitacion" name="tipo_habitacion" required>
                    <option value="">Seleccione un tipo</option>
                    <option value="individual">Individual</option>
                    <option value="doble">Doble</option>
                    <option value="familiar">Familiar</option>
                </select>
            </div>

            <div class="campo">
                <label for="codigo_promocional">Código promocional (opcional):</label>
                <input type="text" id="codigo_promocional" name="codigo_promoc
            </div>

            <div class="campo">
                <label for="forma_pago">Forma de pago:</label>
                <select id="forma_pago" name="forma_pago" required>
                    <option value="">Seleccione una forma de pago</option>
                    <option value="tarjeta_credito">Tarjeta de crédito</option>
                    <option value="paypal">PayPal</option>
                </select>
            </div>

            <div class="campo">
                <label for="numero_tarjeta">Número de tarjeta:</label>
                <input type="text" id="numero_tarjeta" name="numero_tarjeta" required>
            </div>

            <div class="campo">
                <label for="fecha_vencimiento">Fecha de vencimiento:</label>
                <input type="date" id="fecha_vencimiento" name="fecha_vencimiento" required>
            </div>

            <div class="campo">
                <label for="codigo_seguridad">Código de seguridad:</label>
                <input type="text" id="codigo_seguridad" name="codigo_seguridad" required>
            </div>

            <div class="campo">
                <label for="peticiones_especiales">Peticiones especiales (opcional):</label>
                <textarea id="peticiones_especiales" name="peticiones_especiales"></textarea>
            </div>

            <div class="campo">
                <label for="comentarios">Comentarios (opcional):</label>
                <textarea id="comentarios" name="comentarios"></textarea>
            </div>

            <div class="botones">
                <button type="submit">Enviar</button>
                <button type="reset">Limpiar</button>
            </div>
        </form>
    </div>
</body>
</html>