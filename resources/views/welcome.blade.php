<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <section id="inicio">
    <div class="container d-flex align-items-center justify-content-center min-vh-100"><div class="row"> 
        <div class="col-2"><img src="/imagenes/1.gif" alt="imgbar"></div> 
        <div class="col-8">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
            <h1 class="fw-bold">Rómulos<br>Gallegos</h1></div>
            <div id="romulo" class="col-12 d-flex justify-content-center">
            <div class="body" style="width: 100%;">
                <img class="card-img-top p-4" src="imagenes/tallermec.gif" alt="Card image cap">
                <div class="card-body">
                  <h3 id="tm">Taller de<br>mecánica</h3>
                </div>
              </div>
              <div  class="body" style="width: 100%;">
                <img class="card-img-top p-4" src="imagenes/tallerele.svg" alt="Card image cap">
                <div class="card-body">
                    <h3 id="te">Taller de<br>electricidad</h3>
                </div>
              </div>
              <div  class="body" style="width: 100%;">
                <img class="card-img-top p-4" src="imagenes/tallercarp.svg" alt="Card image cap">
                <div class="card-body">
                    <h3 id="tc">Taller de<br>carpintería</h3>
                </div>
              </div>
            </div>
            <div id="butonir" class="col-12 d-flex justify-content-center my-3">
                <div class="ir">
                  @if (Route::has('login'))
                  <nav class="-mx-3 flex flex-1 justify-end">
                      @auth
                          <a
                              href="{{ url('/dashboard') }}"
                              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                          >
                              Dashboard
                          </a>
                      @else
                          <a
                              href="{{ route('login') }}"
                              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                          >
                              Iniciar sesion
                          </a>

                          @if (Route::has('register'))
                              <a
                                  href="{{ route('register') }}"
                                  class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                              >
                                  Registrarse
                              </a>
                          @endif
                      @endauth
                  </nav>
              @endif</div>
            </div>
            </div>
        </div> 
        <div class="col-2 align-self-end"><img src="/imagenes/2.gif" alt="imgbar"></div> 
    </div>
  </div>
    </section>
    <section id="shistoria">
        <div class="container d-flex align-items-center justify-content-center p-5 min-vh-100"><div class="row"> 
            <div class="col-lg-6 d-flex align-items-center justify-content-center">
                <div class="row">
                    <div class="col-12 d-flex align-items-center justify-content-center"><h3>Nuestra historia</h3></div>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <p>Nuestra historia se inicia en 1958 con la fundación de la Escuela Artesanal, la Escuela de Artes Plásticas e Instituto de Comercio de San Felipe, todas bajo distintas direcciones. En 1967, los alumnos decidieron rebautizar el Instituto como "Instituto de Comercio Rómulo Gallegos", oficializado por el Ministerio de Educación. Desde entonces, hemos evolucionado hacia un Ciclo Combinado, añadiendo menciones como Secretariado, Contabilidad, Dibujo Técnico y Electricidad, brindando oportunidades de formación técnica en el estado Yaracuy.</p>
                    </div>
                </div>
            </div> 
            <div class="col-lg-6"><img src="imagenes/historia.svg" style="width: 90%;" alt="imgbar"></div> 
        </div></div>
        </section>
        <section id="svms">
            <div class="container d-flex align-items-center justify-content-center min-vh-100">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center justify-content-center"><img src="imagenes/mvision.svg" style="width: 35%;" alt="imgbar"></div> 
                        <div class="col-lg-6 d-flex align-items-center justify-content-center p-5">
                            <div class="row">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                            <h4>Visión</h4></div>
                            <div class="col-12 d-flex align-items-center justify-content-center">
                            <p>Ofrecemos educación integral en áreas socioeconómicas, industriales y transporte, adaptada a la región, centrada en valores, participación comunitaria y excelencia académica, preparando a estudiantes para desafíos laborales actuales.</p>
                        </div></div>
                     </div>
                        <div class="col-lg-6 d-flex align-items-center justify-content-center p-5">
                            <div class="row">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                   <h4>Misión</h4>
                                </div>
                                <div class="col-12 d-flex align-items-center justify-content-center">
                            <p>Formamos técnicos medios integrales, valorando el trabajo y la responsabilidad familiar y comunitaria, preparados para integrarse al mercado laboral regional y enfrentar los desafíos de los sectores productivos contemporáneos.</p>
                        </div>
                        </div>
                        </div> 
            </div></div>
            </section>
            <section id="nvalues">
                <div class="container d-flex align-items-center min-vh-100">
                    <div class="">
                    <div class="col-12 d-flex align-content-center justify-content-center p-3"><h3>Nuestros valores</h3></div>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2">
                        <div class="col pb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center">
                          <h5>Responsabilidad</h5>
                        </div>
                        <div class="card-body">
                          <p class="card-text">A través del cumplimiento de los valores sociales y académicos generando compromiso que conllevan a la formación integral del estudiante.</p>
                        </div>
                      </div>
                    </div>

                    <div class="col pb-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-center">
                              <h5>Solidaridad</h5>
                            </div>
                            <div class="card-body">
                              <p class="card-text">Expresadas en las actuaciones de los miembros de la ET
                                Rómulo Gallegos, fundamentada en las normas, procedimientos, reglamentos y principios que regulan la conducta de los individuos.
                                </p>
                            </div>
                          </div>
                        </div>

                        <div class="col pb-4">
                            <div class="card">
                                <div class="card-header d-flex justify-content-center">
                                  <h5>Libertad</h5>
                                </div>
                                <div class="card-body">
                                  <p class="card-text">Expresada como la posibilidad que brinda la institución para que sus integrantes se autorealicen, en un clima institucional de respecto a la diversidad cultural, política, religiosa, entre otras.</p>
                                </div>
                              </div>
                            </div>

                            <div class="col pb-4">
                                <div class="card">
                                    <div class="card-header d-flex justify-content-center">
                                      <h5>Sentido de pertenencia</h5>
                                    </div>
                                    <div class="card-body">
                                      <p class="card-text">Expresada en el reconocimiento del propio entorno como patrimonio común, con el cual hay que comprometerse. Es reconocer como propio los bienes colectivos, conservando y colaborando con su desarrollo.</p>
                                    </div>
                                  </div>
                                </div>
                                
                                <div class="col pb-4">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-center">
                                          <h5>Tolerancia</h5>
                                        </div>
                                        <div class="card-body">
                                          <p class="card-text">Expresada en la capacidad de respecto, comprensión y consideración de la manera de pensar, actuar y sentir de los demás, aunque estas sean diferentes, para lograr asi una comunicación armónica</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col pb-4">
                                        <div class="card">
                                            <div class="card-header d-flex justify-content-center">
                                              <h5>Honestidad</h5>
                                            </div>
                                            <div class="card-body">
                                              <p class="card-text">Expresada en la coherencia entre las acciones y
                                                requerimientos éticos, sociales y organizacionales, promulgados por la comunidad Educativa.
                                                </p>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="col pb-4">
                                            <div class="card">
                                                <div class="card-header d-flex justify-content-center">
                                                  <h5>Participación</h5>
                                                </div>
                                                <div class="card-body">
                                                  <p class="card-text">Expresada en términos de solidaridad, Sinergia y cooperación con miras a alcanzar objetivos y metas comunes, es brindar la oportunidad a la comunidad y desarrollar propuestas, asumiendo el compromiso de trabajo activamente y compartiendo conocimiento y experiencia con los demás.</p>
                                                </div>
                                              </div>
                                            </div>

    <div class="col pb-4">
     <div class="card">
                 <div class="card-header d-flex justify-content-center">
               <h5>Trabajo</h5>
             </div>
           <div class="card-body">
          <p class="card-text">Expresado en la responsabilidad de asumir las competencias laborales con sentido de pertenencia, dando resultados eficaces y eficientes, manteniendo un espíritu investigativo y de actualización permanente.</p>
         </div>
     </div>
     </div>

                </div>

                 <div class="row">
                  <div class="col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center">
                          <h5>Humildad</h5>
                        </div>
                        <div class="card-body">
                          <p class="card-text">Es capacidad de restar importancia a los propios logros y virtudes de reconocer sus defectos y errores.</p>
                        </div>
                      </div>
                    </div>

<div class="col-sm-6 mb-4">
<div class="card">
<div class="card-header d-flex justify-content-center">
<h5>Respeto</h5>
</div>
<div class="card-body">
<p class="card-text">Cumplimiento de valores sociales y académicos para la formación integral.</p>
</div>
</div>
</div>
                </div>
                </div>
              </div>
                </div></div>
                </section>
                <footer >
                    <div class="container d-flex align-items-center justify-content-center min-vh-100">
                            <div class="row">
                               <div class="col-12">
                                <h3>Contactenos</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                               </div>
                                <div class="col-lg-6">
                                    <h4>Lorem Ipsum</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    <h4>Lorem Ipsum</h4>
                                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>  
                                <div class="col-lg-6 d-flex align-items-center justify-content-center">
                                    <img id="fotocontact" src="imagenes/contactus.gif" alt="imgbar">
                                </div> 
                    </div>
                </footer>
</body>
</html>