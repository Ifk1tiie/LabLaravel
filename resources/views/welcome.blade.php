
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabLaravel | Inicio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #0b0b0e;
            color: #ffffff;
            min-height: 100vh;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 7%;
            background: #111114;
            border-bottom: 1px solid #29292e;
        }

        .logo {
            font-size: 27px;
            font-weight: bold;
        }

        .logo span {
            color: #ed263b;
        }

        nav {
            display: flex;
            gap: 12px;
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 11px 18px;
            border-radius: 7px;
            border: 1px solid #44444b;
            transition: 0.3s;
        }

        nav a:hover {
            background: #ed263b;
            border-color: #ed263b;
        }

        nav .registro {
            background: #ed263b;
            border-color: #ed263b;
        }

        main {
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
            text-align: center;
        }

        .contenido {
            max-width: 850px;
        }

        .etiqueta {
            display: inline-block;
            padding: 10px 18px;
            border: 1px solid #6e202a;
            border-radius: 30px;
            color: #ff6574;
            background: #211014;
            margin-bottom: 30px;
        }

        h1 {
            font-size: clamp(42px, 7vw, 76px);
            margin-bottom: 22px;
            line-height: 1.1;
        }

        h1 span {
            color: #ed263b;
        }

        .descripcion {
            color: #b8b8c2;
            font-size: 18px;
            line-height: 1.8;
            margin-bottom: 35px;
        }

        .botones {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
        }

        .boton {
            display: inline-block;
            padding: 15px 25px;
            border-radius: 8px;
            text-decoration: none;
            color: white;
            border: 1px solid #44444b;
            transition: 0.3s;
        }

        .principal {
            background: #ed263b;
            border-color: #ed263b;
        }

        .boton:hover {
            transform: translateY(-3px);
            filter: brightness(1.15);
        }

        .tecnologias {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 55px;
        }

        .tecnologias span {
            background: #17171c;
            border: 1px solid #303038;
            padding: 12px 18px;
            border-radius: 8px;
            color: #dedee5;
        }

        footer {
            text-align: center;
            color: #777781;
            padding: 22px;
            border-top: 1px solid #29292e;
            font-size: 14px;
        }

        @media (max-width: 600px) {
            header {
                flex-direction: column;
                gap: 18px;
            }

            h1 {
                font-size: 43px;
            }

            .descripcion {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">✦ Lab<span>Laravel</span></div>

        <nav>
            <a href="{{ route('login') }}">Iniciar sesión</a>
            <a href="{{ route('register') }}" class="registro">Registrarse</a>
        </nav>
    </header>

    <main>
        <section class="contenido">
            <div class="etiqueta">✦ Proyecto de desarrollo web</div>

            <h1>Bienvenido a<br><span>LabLaravel</span></h1>

            <p class="descripcion">
                Una experiencia moderna para aprender, desarrollar y crear
                aplicaciones web utilizando Laravel, Bootstrap y MySQL.
            </p>

            <div class="botones">
                <a href="{{ route('login') }}" class="boton principal">
                    Iniciar sesión →
                </a>

                <a href="{{ route('register') }}" class="boton">
                    Crear una cuenta
                </a>
            </div>

            <div class="tecnologias">
                <span>⚡ Laravel 13</span>
                <span>🎨 Bootstrap</span>
                <span>▣ MySQL</span>
                <span>🔐 Autenticación</span>
            </div>
        </section>
    </main>

    <footer>
        LabLaravel © 2026 | Proyecto académico de desarrollo web
    </footer>
</body>
</html>
