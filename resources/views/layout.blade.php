<title>@yield('title')</title>
<style>
    .activo a{
        color:red;
        text-decoration:underline;
    }
</style>
</head>
<body>
<nav>
<table class="table">
@include('partials.nav')
@yield('content')
</table>
</nav>