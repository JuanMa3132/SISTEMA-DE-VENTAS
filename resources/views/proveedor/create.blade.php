<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dashboard admin main</title>
        <link rel="icon" href="../Recursos/imagenes/logo-1.png" type="image/png">
<!--Hojas de estilo-->
<link rel="stylesheet" href="{{asset('css/app.css')}}">

<!--Icons cdn-->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!--Script cdn-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        

    </head>



    <body>

        <section id="menu">
            <div class="logo">
                <img
                    src="../Recursos/imagenes/intento_2-transformed-removebg-preview (1).png"
                    alt="Logo del software">
                <h2>Admin<span>istrador</span></h2>
            </div>

            <div class="items"> <!-- Nav links and icons-->

                <a class="ventas_link" href="../Dashboard/index.html"><li><i class='bx bxs-dashboard'></i>Dashboard</li></a>
                <a class="ventas_link"href="../interfaz ventas/Interfaz-ventas.html"><li><i class="fa-solid fa-sack-dollar"></i> 
                     Ventas</li></a>
                <li><i class="fa-solid fa-hand-holding-dollar"></i> <a href="#">
                        Clientes</a></li>
                <a class="ventas_link" href="#"><li><i class="fa-solid fa-boxes-stacked"></i> 
                        Inventario</li></a>
                        <a class="ventas_link" href="../Estadisticas/index.html"><li><i class="fa-solid fa-chart-line"></i>
                        Estadisticas</li></a>
                        <a class="ventas_link" href="proveedores.html"><li><i class="fa-solid fa-truck"></i>  Proveedores</li></a>
                        <div class="settings">  
                            <!--Previously this code block was outside the "items" div, 
                            but it was problematic-->
                            <a class="ventas_link" href="../configuración/index.html"><li><i class='bx bxs-cog'></i>
                                 Configuración</li></a>
                        
                
                        </div>

                <div class="support">
                    <a  class="ventas_link" href="soporte.html"><li>
                        <i class="fa-solid fa-envelope"></i>
                            Soporte</li></a>

                </div> <!--Final closing div for settings and support-->

            </div>

            <footer>
                <p class="tex-footer">© RakunMaster</p>
            </footer>

        </section>


        <section id="interface">
            <div class="navigation">
                <div class="n1">
                    <div>
                        <i id="menu-btn" class="fa-solid fa-bars"></i>
                    </div>
                    <div class="search">
                        <form action="resultados_busqueda.php" method="GET">
                            <i class="bi bi-search"></i>
                            <input type="text" name="consulta" placeholder="Buscar">
                            <button class="submit-btn"type="submit">
                                <i class="fas fa-search"></i>
                            </button>                        
                        </form>
                    </div>
    
                </div>
                <div class="profile1">
                
                <div class="profile dropdown">
                    <a  role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src="../Recursos/imagenes/pexels-pavel-danilyuk-8000607.jpg"alt=""></a>
    
                    <ul class="dropdown-menu" >
                        <li><a class="dropdown-item" href="#">Mensajes</a></li>
                        <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                        <li><a class="dropdown-item" href="../login.html">Cerrar sesion</a></li>
                      </ul>
                </div>
            </div>
       
    
            </div>
            <div class="provedores-contenido">
                <div class="formAndTitle-provedores">
                    <div class="form-proveedores-father">
                     <div class="title-interface">
                         <h2>Proveedores</h2>
         
                         <p>Menu para crear proveedores</p>
                     </div>
                     <form action="{{ url('/proveedor') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('proveedor.form',['modo'=>'Crear']);
</form>
                 </div>
                    </div>
     
                 <div class="admin-section">
                     <h2 class="text-admin">Administrador Sistema</h2>
     
                    @yield('proveedor')

                 </div>
     
            </div>
        </section>

        <br>
        <br>

        <script src="script.js"></script>
    </body>
</html>
