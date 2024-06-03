<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    </head>

    <body>
    <section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                  <form action="{{route('register')}}" method="post">
                  @csrf
                  <div class="d-flex align-items-center mb-3 pb-1">
                  <img src="{{asset('images/logo.png')}}" class="logo" style="width: 100px;">
                  <span class="h1 fw-bold mb-0">Registro de sesión</span>
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Nombre</label>
                    <input type="text" name="name" id="form2Example17" class="form-control form-control-lg" placeholder="Ingrese nombres" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example17">Correo</label>
                    <input type="email" name="email" id="form2Example17" class="form-control form-control-lg" placeholder="Correo de registro"/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example27">Contraseña</label>
                    <input type="password" name="password" id="form2Example27" class="form-control form-control-lg" placeholder="Contraseña de registro"/>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example27">Confirmar contraseña</label>
                    <input type="password" name="password_confirmation" id="form2Example27" class="form-control form-control-lg" placeholder="Confirmación de contraseña" />
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-dark btn-lg btn-block" type="submit">Ingresar</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">¿Ya tienes cuenta? 
                  <a href="{{route('login')}}"style="color: #393f81;"> Retorna al login</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </for>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
