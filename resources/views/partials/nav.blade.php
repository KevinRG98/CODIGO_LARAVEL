<style>
    body {
        margin: 0;
        font-family: 'Times New Roman';
        background-color: #f4f4f4;
        color: #333;
    }

    hr {
        border-top: 1px solid red;
    }

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
        background-color: blue;  /* Asegurando un color de fondo consistente */
        padding: 10px 20px;  /* Asegurando un padding consistente */
        font-weight: bold;
        transition: background-color 0.3s;
        display: inline-block;
        margin-top: 10px;
        border-radius: 5px;  /* Mover border-radius aquí */
    }

    .navbar .activo a {
        color: red;
        text-decoration: underline;
    }

    .navbar a:hover {
        background-color: #0000a0;  /* Color de fondo al hacer hover */
    }

    .pagination {
    text-align: center;
    margin-top: 20px;
    }

    .pagination .page-item {
        display: inline-block;
        margin: 0 5px;
    }

    .pagination .page-link {
        padding: 10px 15px;
        border: 1px solid #ddd;
        color: #333;
        text-decoration: none;
    }

    .pagination .page-link:hover {
        background-color: #f0f0f0;
    }

    .pagination .active .page-link {
        background-color: #007bff;
        color: white;
        border-color: #007bff;
    }
       
</style>
</head>
<body>
<div class="navbar">
<div class="{{ setActivo ('home') }}"><a href="/">Home</a></div>
<div class="{{ setActivo('nosotros') }}"><a href="nosotros">Nosotros</a></div>
<div class="{{ setActivo('servicios') }}"><a href="servicios">Servicios</a></div>
<div class="{{ setActivo('contactos') }}"><a href="contactos">Contactos</a></div>
</div>
</body>
