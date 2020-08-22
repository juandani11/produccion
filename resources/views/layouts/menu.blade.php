@extends('layouts.app')

@section('title', 'MRP')

@section('body-class', 'landing-page')

@section('estilo')
    <style>
        .navbar.navbar-transparent {        
            background: radial-gradient(circle, rgba(247,150,192,1) 0%, rgba(118,174,241,1) 100%);
        }
        #main {
            padding-top: 8%;
            display:    flex;
            flex-flow:  row;
        }
            
        #main > #container {
            margin: 4px;
            padding: 5px;
            border: 1px solid #cccc33;
            border-radius: 7pt;
            background: #f9f9f9;
            -webkit-flex: 3 1 60%;
                    flex: 3 1 60%;
            -webkit-order: 2;
                    order: 2;
        }
            
        #main > nav {
            margin: 4px;
            padding: 5px;
            border: 1px solid #8888bb;
            border-radius: 7pt;
            background: #e5e5e5;
            -webkit-flex: 1 6 20%;
                    flex: 1 6 20%;
            -webkit-order: 1;
                    order: 1;
        }
            
        #main > aside {
            margin: 4px;
            padding: 5px;
            border: 1px solid #8888bb;
            border-radius: 7pt;
            background: #e5e5e5;
            -webkit-flex: 1 6 20%;
                    flex: 1 6 20%;
            -webkit-order: 3;
                    order: 3;
        }

        .nav-pills {
            padding-left: 30px;
            color: #000;
        }

    </style>
@endsection


@section('content')
    <div id='main'>
      <div id='container'>
       @yield('contenido-central')
     </div>

      <nav id="navbar">
        <header class="">Sistema MRP</header>
        <ul class="nav flex-column">
          <li>
            <a class="nav-link" href="#">Gestión Administrativa</a>
            <ul class="nav flex-column">
                <li><a class="nav-pills" href="#">Departamento </a></li>
                <li><a class="nav-pills" href="#">Área </a></li>
                <li><a class="nav-pills" href="#">Sucursal </a></li>
                <li><a class="nav-pills" href="#">Cargo </a></li>
                <li><a class="nav-pills" href="#">Empleado </a></li>
            </ul>
          </li> 
            <li>
                <a class="nav-link" href="#flex_direction">Nómina</a>
            </li>
            <li>
              <a class="nav-link" href="#justify_content">Inventarios</a>
            </li> 
            <li>
              <a class="nav-link" href="#align_items">Compras</a>
            </li> 
            <li>
              <a class="nav-link" href="#align_items">Producción</a>
              <ul class="nav flex-column">
                <li><a class="nav-pills" href="#">BoM </a></li>
                <li><a class="nav-pills" href="#">MPS </a></li>
                <li><a class="nav-pills" href="#">MRP </a></li>
                </ul>
            </li> 
        </ul>
      </nav>

      <aside>aside</aside>
   </div>

  
@endsection