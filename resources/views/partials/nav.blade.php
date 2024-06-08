<style>
    body {
        margin: 0;
        font-family: 'Times New Roman';
        background-color: #f4f4f4;
        color: #333;
    }
    hr{
            border-top: 1px solid red;}

    .navbar {
        display: flex;
        justify-content: center;
        background-color: white;
        padding: 10px;
    }

    .navbar div {
        margin: 0 30px;
    }

    .navbar a {
        text-decoration: none;
        color: white;
        background-color: #0000b9;
        padding: 10px 20px;
        font-weight: bold;
        transition: background-color 0.3s;
        display: inline-block;
        margin-top: 10px;
    }
    .navbar .activo a {
        color: red;
        text-decoration: underline;
        }

    .navbar a:hover {
        background-color: #0000a0;
    }

    ..navbar a{
        background-color: blue;
        padding: 10px;
        border-radius: 5px;
        color: white;
        text-decoration: none;

        }
</style>
</head>
<body>
<div class="navbar">
<div class="{{ setActivo ('home') }}"><a href="/">Home</a></div>
<div class="{{ setActivo('nosotros') }}"><a href="nosotros">Nosotros</a></div>
<div class="{{ setActivo('servicios') }}"><a href="servicios">Servicios</a></div>
<div class="{{ setActivo('contacto') }}"><a href="contacto">Contacto</a></div>
</div>
</body>
