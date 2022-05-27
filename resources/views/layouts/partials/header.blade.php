<header>
         <h1>Coders Free</h1>
         <nav>
             <ul>
                 <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a>
                    <?php
                        //dump(request()->routeIs('home'))
                    ?>
                    <!-- @ dump (request()->routeIs('home')) -->
                </li>
                 <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a>
                 <!-- @ dump (request()->routeIs('cursos.*')) : El asterisco significa que mientras comience con cursos coincida con esa ruta -->
                </li>
                 <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a>
                 <!-- @ dump (request()->routeIs('nosotros')) -->
                </li>
                 <li><a href="{{route('Contactanos.index')}}" class="{{request()->routeIs('Contactanos') ? 'active' : ''}}">Contactanos</a>
                 <!-- @ dump (request()->routeIs('nosotros')) -->
                </li>
             </ul>
         </nav>
     </header>
