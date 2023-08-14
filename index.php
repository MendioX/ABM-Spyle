<!DOCTYPE html>
<html>
	<head>
    <title>Spyle Altas TS</title> 
    <meta charset="UTF-8">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
       
		<link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/styleModal.css">
      

	</head>
	
    
    <body>
    <header class="header">
    
    <h2>NOMINA 2.0</h2>
    
    <nav>
            <div class="nav-movile-background"></div>
            <article class="logo">
                <img src="./assets/img/logo.png" class="logo-normal" width="220px" alt="">
                <img src="./assets/img/logo-r.png" class="logo-s" width="220px" alt="">
                
            </article>
            
            <ul>
                <li><a href="#principal">Buscar</a></li>
                <li><a href="#alta-seccion">Alta</a></li>                
                <!-- <li><a href="#main-trabajos">Baja</a></li>
                <li><a href="#main-nosotros">Modificar</a></li> -->
                <li><a href="#footer-scroll">Contacto</a></li>
            </ul>
        </nav>

</header>

<div class="popupFullReg" id="popupReg">
           <h3>FULL REG</h3>
            <div id="grid-container">
                <div>
                    <label>ID</label>
                    <input type="text" id="idReg"></input>
                </div>
                
                <div>
                    <label>Status</label>
                    <input type="text" id="statusReg"></input>
                </div>
                <div>
                    <label>Nombre</label>
                    <input type="text" id="nameReg"></input>
                </div>             
                  <div>
                    <label>Apellido</label>
                    <input type="text" id="surnameReg"></input>
                </div>
                <div>
                    <label>User</label>
                    <input type="text" id="userNameReg"></input>
                </div>  
                <div>
                    <label>Email</label>
                    <input type="text" id="emailReg"></input>
                </div>
                <div>
                    <label>Interno</label>
                    <input type="text" id="extensionReg"></input>
                </div>           
                    <div>
                    <label>Contraseña</label>
                    <input type="text" id="pwReg"></input>
                </div>
                <div>
                    <label>Creado</label>
                    <input type="text" id="createReg"></input>
                </div>              
                  <div>
                    <label>Ingreso</label>
                    <input type="text" id="incomeReg"></input>
                </div>
                <div>
                    <label>Area</label>
                    <input type="text" id="areaReg"></input>
                </div>            
                   <div>
                    <label>Depto</label>
                    <input type="text" id="dptoReg"></input>
                </div>
                <div>
                    <label>Posision</label>
                    <input type="text" id="positionReg"></input>
                </div>           
                     <div>
                    <label>ID</label>
                    <input type="text" id=""></input>
                </div> 

            
            </div>
            <div id="botonera">

            
            <button id="pushButton">Actualizar</button>
            <button id="closeButton">Cerrar</button>

            </div>
            
        </div>
    
	<section class="principal" id="principal">

<table class="myTable">
        <thead>
            <tr>
            <th>ID</th>
            <th>Status</th>
            <th>Apellido</th>
            <th>Nombre</th>
            <th> Dpto </th>
            <th>Email</th>
            <th>Interno</th>
            <!-- <th>+</th>
            <th>-</th> -->
            </tr>
            <tr>
                <th>
                <input class= "form-control"></input>
                </th>
                <th>
                <input class= "form-control"></input>
                </th>
                <th>
                <input class= "form-control"></input>
                </th>
                <th>
                <input class= "form-control"></input>
                </th>
                <th>
                <input class= "form-control"></input>
                </th>
                <th>
                <input class= "form-control"></input>
                </th>
                <th>
                <input class= "form-control"></input>
                </th>
                <!-- <th>
                
                </th> -->
            </tr>
        </thead>
        <tbody id="bodytable">
        <?php 
			include "./assets/php/tabla-main.php"
		?>
        </tbody>

</table>
</section>

<div class="popupUpdate" id="popup">
            
            <p id="statusID"></p>
            <p id="codeID"></p>
            <p id="descriptionID"></p>
            <button id="nextButton">Siguiente</button>
        
        </div>
        
        
        <section id="alta-seccion">
  
            <h2>Alta Usuario</h2>
            
            <div class="form-alta">
                <p>Nombre*</p>
                <input class="data-income" id="name"></input>
        
                <p>Apellido*</p>
                <input class="data-income" id="surname"></input>
        
                <!-- <p>Departamento</p> -->
                
            <label for="elementos">Elige un departamento:</label>
            <select  id="dptos" name="elementos">
                
            </select>
        
            <div id="otroElementoDiv" style="display: none;">
                <label for="otroElemento">Nuevo departamento:</label>
                <input type="text" class="data-income" id="otroElemento" name="otroElemento">
            </div>
        
            <label for="elementos">Elige un Area:</label>
            <select  id="area" name="elementos">    
            </select>
        
            <div id="otroAreaDiv" style="display: none;">
                <label for="otroAreato">Nueva Area:</label>
                <input type="text" class="data-income" id="otroArea" name="otroArea">
            </div>
        
                <p>Puesto/rol</p>
                <input class="data-income" id="position"></input>
        
                <p>Usuario</p>
                <input class="data-income" id="userName"></input>
        
                <p>Email</p>
                <input class="data-income" id="mail"></input>
        
                <p>Fecha Ingreso</p>
                <input class="data-income" type = "date" id="date"></input>
        
                <p>Interno</p>
                <input class="data-income" id="extension"></input>
        
                <p>Contraseña</p>
                <input class="data-income" id="ext_pw"></input>
                
            <button id="enviarForm">Enviar</button>
            </div>
        </section>


	<footer class="footer" id="footer-scroll">
        <section>
            <article class="footer-texto">
                <h3>Contacto</h3>
                <article>
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M17.218,2.268L2.477,8.388C2.13,8.535,2.164,9.05,2.542,9.134L9.33,10.67l1.535,6.787c0.083,0.377,0.602,0.415,0.745,0.065l6.123-14.74C17.866,2.46,17.539,2.134,17.218,2.268 M3.92,8.641l11.772-4.89L9.535,9.909L3.92,8.641z M11.358,16.078l-1.268-5.613l6.157-6.157L11.358,16.078z"></path>
                    </svg>
                    <div>
                        <h3>Mail</h3>
                        <a href="#">proximamente</a>
                    </div>                        
                </article>
                <article>
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M10,1.375c-3.17,0-5.75,2.548-5.75,5.682c0,6.685,5.259,11.276,5.483,11.469c0.152,0.132,0.382,0.132,0.534,0c0.224-0.193,5.481-4.784,5.483-11.469C15.75,3.923,13.171,1.375,10,1.375 M10,17.653c-1.064-1.024-4.929-5.127-4.929-10.596c0-2.68,2.212-4.861,4.929-4.861s4.929,2.181,4.929,4.861C14.927,12.518,11.063,16.627,10,17.653 M10,3.839c-1.815,0-3.286,1.47-3.286,3.286s1.47,3.286,3.286,3.286s3.286-1.47,3.286-3.286S11.815,3.839,10,3.839 M10,9.589c-1.359,0-2.464-1.105-2.464-2.464S8.641,4.661,10,4.661s2.464,1.105,2.464,2.464S11.359,9.589,10,9.589"></path>
                    </svg>                       
                    <div>
                        <h3>Ubicacion</h3>
                        <a href="#">proximamente</a>
                    </div>
                </article>
                <article>
                    <svg class="svg-icon" viewBox="0 0 20 20">
                        <path d="M13.372,1.781H6.628c-0.696,0-1.265,0.569-1.265,1.265v13.91c0,0.695,0.569,1.265,1.265,1.265h6.744c0.695,0,1.265-0.569,1.265-1.265V3.045C14.637,2.35,14.067,1.781,13.372,1.781 M13.794,16.955c0,0.228-0.194,0.421-0.422,0.421H6.628c-0.228,0-0.421-0.193-0.421-0.421v-0.843h7.587V16.955z M13.794,15.269H6.207V4.731h7.587V15.269z M13.794,3.888H6.207V3.045c0-0.228,0.194-0.421,0.421-0.421h6.744c0.228,0,0.422,0.194,0.422,0.421V3.888z"></path>
                    </svg>                       
                    <div>
                        <h3>Telefono</h3>
                        <a href="#">proximamente</a>
                    </div>
                </article>
            </article>
            <article class="footer-follow">
                <h3>Siguenos</h3>
                <article>
                    <a href="#main-nosotros">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                        </svg>
                    </a>
                    <a href="#main-nosotros">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-twitter"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z"></path>
                        </svg>
                    </a>
                    <a href="#main-nosotros">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-instagram"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4m0 4a4 4 0 0 1 4 -4h8a4 4 0 0 1 4 4v8a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z"></path>
                            <path d="M12 12m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0"></path>
                            <path d="M16.5 7.5l0 .01"></path>
                        </svg>
                    </a>
                    <a href="#main-nosotros">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-linkedin"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M4 4m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z"></path>
                            <path d="M8 11l0 5"></path>
                            <path d="M8 8l0 .01"></path>
                            <path d="M12 16l0 -5"></path>
                            <path d="M16 16v-3a2 2 0 0 0 -4 0"></path>
                        </svg>
                    </a>
                    <a href="#main-nosotros">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                        </svg>
                    </a>
                </article>
            </article>
            <article class="footer-enlaces">
                <h3>Enlaces</h3>
                <ul>
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#main-servicios">Servicios</a></li>
                    <li><a href="#main-nosotros">Nosotros</a></li>
                    <li><a href="#main-trabajos">Portfolio</a></li>
                    <li><a href="#main-contacto">Contacto</a></li>
                </ul>
            </article>
            <!-- <svg width="1139" height="1" viewBox="0 0 1139 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line opacity="0.3" x1="-2.18557e-08" y1="0.75" x2="1139" y2="0.7499" stroke="black" stroke-width="0.5"/>
            </svg> -->
            <article class="copyright">
                <h3>Cosas Aburridas</h3>
                <p>
                    Copyright <span id="año">2023</span> Ⓒ | Todos los derechos reservados - Spyle Solutions S.A. | Página diseñada y desarrollada por el equipo de <a href="#">Spyle Solutions S.A.</a> 
                </p>
            </article>
        </section>
    </footer>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./assets/js/newUser.js"></script>
    <script src="./assets/js/dinamicConsult.js"></script>
    <script src="./assets/js/moreInfo.js"></script>

	</body>
   
</html>

