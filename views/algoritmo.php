<!--VISTA ALGORITMOS-->
<h1 class="styleH1">Operadores Aritmeticos</h1><!--TITULO-->
        
        <section class="styleSection">

            <div class="contenedorSubmenu">
                <P>
                    En el menú que verá a continuacion: Son ejercicio de logica en PHP
                </P>
                
                <!--SUB MENU DE LA VISTA NOSOTROS-->
                <nav class="contenedorNavmenu">
                    <ul class="styleUlsubMenu">
                        <li class="styleLisubMenu"><a class="styleLinksubMenu" href="../controller/controllerRutas.php?opc=1&subOpc=0">inicio</a></li>
                        <li class="styleLisubMenu"><a class="styleLinksubMenu" href="../controller/controllerRutas.php?opc=1&subOpc=1">Factorial</a></li>
                        <li class="styleLisubMenu"><a class="styleLinksubMenu" href="../controller/controllerRutas.php?opc=1&subOpc=2">Numeros primos</a></li>
                        <li class="styleLisubMenu"><a class="styleLinksubMenu" href="../controller/controllerRutas.php?opc=1&subOpc=3">Serie Fibonacci</a></li>
                    </ul>  
                </nav>
            </div>

            <div class="contenedorSubmenu">
                <?php
                    //DECLARE LA VARIABLE $subVista PARA MOSTRAR EL SUB MENU 
                    if(!isset($subVista))
                    {
                    $subVista="algoritmoinicio.php";   
                    } 
                    require $subVista;  
                ?>
            </div>
        </section>
