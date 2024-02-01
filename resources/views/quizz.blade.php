<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QUIZZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assests/css/estilos1.css') }}">
    <!-- Template Stylesheet -->
    <link href="{{ asset('assests/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-MBkf3woXIf+fWg4os+Gop1iMzAmG1Jcbrl3A4BqrJ62dnAz+9ydMaI5uo6o+LzB5W2H5Y76e1VWSTT6S5Bjog=="
        crossorigin="anonymous" />

    <style>
        body {
            background: url('{{ asset('assests/img/Er1.jpg') }}') no-repeat center center fixed;
        }
    </style>
</head>

<head>

    <!-- Navbar start -->
    <div class="container-fluid fixed-top">
        <div class="container px-0">
            <nav class="navbar navbar-light bg-white navbar-expand-xl">
                <a href="index.html" class="navbar-brand">
                    <h1 class="text-primary display-6">QUIZ</h1>
                </a>
                <button class="navbar-toggler py-2 px-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars text-primary"></span>
                </button>
                <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                    <div class="navbar-nav mx-auto">
                        <a href="home.blade.php" class="nav-item nav-link"> Login</a>
                        <a href="shop.html" class="nav-item nav-link">Quiz Fortnite</a>
                        <a href="shop-detail.html" class="nav-item nav-link active">Otros</a>
                    </div>
            </nav>
        </div>
    </div>
</head>

<br><br><br><br><br><br>
<div class="text-center mt-5 mb-5 card mx-auto p-4"
    style="width: 50%; box-shadow: 4px 4px 8px rgba(35, 160, 218, 0.945), 0 8px 16px rgb(30, 109, 255);">
    <h1>QUIZZ FOR FORNITE</h1>
</div>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/color.jpg' }}" alt="Photo"
                        style="max-width: 600px; max-height: auto">
                    <h3 class="text-center my-5">¿Cuál es tu color favorito?</h3>
                    <div class="col-md-6">
                        <!-- Columna izquierda con 5 respuestas -->
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="a" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">
                                Negro
                            </label>
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="b" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Rojo
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Azul
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="d" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Amarillo
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="e" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Dorado
                            </label>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Columna derecha con 5 preguntas y respuestas -->
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Café
                            </label>
                            <!-- Otras preguntas y respuestas... -->
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Rosa
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Verde
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Blanco
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Morado
                            </label>

                        </div>
                    </div>
                </div>

                <!-- Repite lo mismo para las siguientes 5 preguntas -->

            </div>
        </div>
    </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/equipo.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>¿Cuál modo es el que juegas frecuentemente?</h3>
                    <div class="col-md-6">
                        <!-- Columna izquierda con 5 respuestas -->
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="a" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Solitario
                            </label>
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="b" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Dúo
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Tríos
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="d" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Squads
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="e" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Festival
                            </label>

                        </div>
                    </div>

                    <div class="col-md-6">
                        <!-- Columna derecha con 5 preguntas y respuestas -->
                        <div class="quiz" id="quiz" data-toggle="buttons">
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Creativo
                            </label>
                            <!-- Otras preguntas y respuestas... -->
                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Carreras
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Lego
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">50 vs 50
                            </label>

                            <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                style="width: 100%; display: block;">
                                <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                <input type="radio" name="q1" value="c" style="visibility: hidden;"
                                    onclick="highlightLabel(this)">Oro Solido
                            </label>

                        </div>
                    </div>
                </div>

                <!-- Repite lo mismo para las siguientes 5 preguntas -->
            </div>
        </div>
    </div>
    </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/habilidad.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>Escoge una palabra que te defina jugando</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Hábil
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Campero
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Suertudo
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Asertado
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Experto
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Tryhard
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Distraído
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Constructor
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Líder
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Manco
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>

    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/lugar.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>Escoge un lugar donde aterrizarías. </h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Casita del cazador
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Pueblo Tomate
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Parque Placentero
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Balsa Botín
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Pisos Picados
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Industrias Stark
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Castillo Coral
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">La Ciudadela
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Villa Viñedo
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center "
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Coliseo Colosal
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/picos.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>¿Cuál de estos picos escogerías?</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Bo Leb100
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Minty
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block text-center"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Guadaña Ki
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">K.O
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Bate Harley
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Diamond
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Picahielos
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Palanca
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Guadaña
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Palanca
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>


    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/baile.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>¿Cuál de estos bailes usarías?</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">In da party
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Riete
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Ritmazo
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Al ritmo
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Socks
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Risa Burro
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Toma la L
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Toosie Slide
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Bizcohito
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Mua,ja,ja
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>



    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src= "{{ 'assests/img/mochila.png' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>¿Cuál de estas mochilas escogerías?</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Alas perfectas
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Escudo Oscuro
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Tele Familiar
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Sin mochila
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Pepinillo Rick
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Unicorn Flakes
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Girasol
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Esferas del Poder
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Woodsy
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Dodger
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/planeador.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>¿Cuál de estos planeadores escogerías?</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Numbola
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Alas Azucaradas
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Chicloso
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Kurama
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Shen Long
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Vinilo Volador
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">El paraguas
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Alma Alada
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Tabla de Balvin
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Extra Queso
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/objetos.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>¿Qué objeto del juego te gusta más?</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Granadas de impulso
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Saltadera
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Jetpack
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Escudo despegable
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Lapas
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Gancho
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j" style="visibility: hidden;"
                                        onclick="highlightLabel(this)">Arbusto
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Granda Buggie
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Lapa de Racimo
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Fuerte portatil
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>

    <br><br><br>
    <div class="container">
        <div class="card mx-auto p-2"
            style="width: 50%; box-shadow: 4px 4px 8px rgba(0, 0, 0, 0.1), 0 8px 16px rgba(0, 0, 0, 0.2);">
            <div class="card-body">
                <div class="row">
                    <img class="img-fluid rounded mx-auto d-block" src="{{ 'assests/img/armas.jpg' }} "
                        alt="Photo" style="max-width: 600px; max-height: auto">
                    <h3>¿Qué arma te gusta mas?</h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Columna izquierda con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Escopeta
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Rifle
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Subfusil
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Pistola
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Franco
                                </label>

                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Columna derecha con 5 preguntas y respuestas -->
                            <div class="quiz" id="quiz" data-toggle="buttons">
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Armas explosivas
                                </label>
                                <!-- Otras preguntas y respuestas... -->
                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Hiperfusil
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Gancho
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Fusil de Caza
                                </label>

                                <label class="mb-1 element-animation1 btn btn-lg btn-danger btn-block"
                                    style="width: 100%; display: block;">
                                    <span class="btn-label"><i class="fa-solid fa-chevron-right mt-4"></i></span>
                                    <input type="radio" name="q1" value="j"
                                        style="visibility: hidden;" onclick="highlightLabel(this)">Ak
                                </label>

                            </div>
                        </div>
                    </div>

                    <!-- Repite lo mismo para las siguientes 5 preguntas -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <div>
        <br><br>
        <center>
            <button onclick="showResult()">Obtener resultado</button>

            <div id="result" style="margin-top: 20px;">

            </div>


            <!-- Div para la imagen -->
            <div id="imagenes">

            </div>

        </center>
    </div>
    </div>
    <script>
        function showResult() {
            var resultContainer = document.getElementById("result");
            var contenedorImagen = document.getElementById("imagenes");
            var imagen = document.createElement("img");

            var q1 = document.querySelector('input[name="q1"]:checked');
            var q2 = document.querySelector('input[name="q2"]:checked');
            var q3 = document.querySelector('input[name="q3"]:checked');
            var q4 = document.querySelector('input[name="q4"]:checked');
            var q5 = document.querySelector('input[name="q5"]:checked');
            var q6 = document.querySelector('input[name="q6"]:checked');
            var q7 = document.querySelector('input[name="q7"]:checked');
            var q8 = document.querySelector('input[name="q8"]:checked');
            var q9 = document.querySelector('input[name="q9"]:checked');
            var q10 = document.querySelector('input[name="q10"]:checked');

            if (q1 && q2 && q3 && q4 && q5 && q6 && q7 && q8 && q9 && q10) {
                // Calcular resultado basado en las respuestas
                var result = calculateResult(q1.value, q2.value, q3.value, q4.value, q5.value, q6.value, q7.value, q8.value,
                    q9.value, q10.value);
                // Mostrar el resultado
                resultContainer.innerHTML = "¡Eres un " + result + "!";

                imagen.src = "{{ asset('assests/img') }}/" + result + ".jpg";
                console.log(imagen.src);
                contenedorImagen.appendChild(imagen);


            } else {
                // Si no se respondieron todas las preguntas, mostrar un mensaje de error
                resultContainer.innerHTML = "Por favor, responde todas las preguntas.";
            }
        }



        function calculateResult(q1, q2, q3, q4, q5, q6, q7, q8, q9, q10) {
            // Puedes personalizar la lógica para determinar el resultado según las respuestas
            if (q1 === "a" && q2 === "a" && q3 === "a" && q4 === "a" && q5 === "a" && q6 === "a" && q7 === "a" && q8 ===
                "a" && q9 === "a" && q10 === "a") {
                return "Bananin";
            } else if (q1 === "b" && q2 === "b" && q3 === "b" && q4 === "b" && q5 === "b" && q6 === "b" && q7 === "b" &&
                q8 === "b" && q9 === "b" && q10 === "b") {
                return "Aura";
            } else if (q1 === "c" && q2 === "c" && q3 === "c" && q4 === "c" && q5 === "c" && q6 === "c" && q7 === "c" &&
                q8 === "c" && q9 === "c" && q10 === "c") {
                return "Deriva";
            } else if (q1 === "d" && q2 === "d" && q3 === "d" && q4 === "d" && q5 === "d" && q6 === "d" && q7 === "d" &&
                q8 === "d" && q9 === "d" && q10 === "d") {
                return "Travi Scott";
            } else if (q1 === "e" && q2 === "e" && q3 === "e" && q4 === "e" && q5 === "e" && q6 === "e" && q7 === "e" &&
                q8 === "e" && q9 === "e" && q10 === "e") {
                return "Midas"
            } else if (q1 === "f" && q2 === "f" && q3 === "f" && q4 === "f" && q5 === "f" && q6 === "f" && q7 === "f" &&
                q8 === "f" && q9 === "f" && q10 === "f") {
                return "Agente Jones";
            } else if (q1 === "g" && q2 === "g" && q3 === "g" && q4 === "g" && q5 === "g" && q6 === "g" && q7 === "g" &&
                q8 === "g" && q9 === "g" && q10 === "g") {
                return "Renegada";
            } else if (q1 === "h" && q2 === "h" && q3 === "h" && q4 === "h" && q5 === "h" && q6 === "h" && q7 === "h" &&
                q8 === "h" && q9 === "h" && q10 === "h") {
                return "Isabelle";
            } else if (q1 === "i" && q2 === "i" && q3 === "i" && q4 === "i" && q5 === "i" && q6 === "i" && q7 === "i" &&
                q8 === "i" && q9 === "i" && q10 === "i") {
                return "Mancake";
            } else {
                return "Lince rob";
            }
        }
    </script>

</body>

</html>
