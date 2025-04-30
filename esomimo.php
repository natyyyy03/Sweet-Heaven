<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sweet Heaven</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Google Font manuscrita -->
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet" />

  <style>
    body {
      font-family: 'Dancing Script', cursive;
      background: linear-gradient(to bottom right, #ffe4ec, #fff0f5);
      min-height: 100vh;
      color: #6b2166;
      position: relative;
    }

    .navbar {
      background-color: #fcbad3;
    }

    .navbar-brand,
    .nav-link {
      color: #8b1e6d !important;
      font-weight: bold;
    }

    .nav-link:hover {
      color: #a9337c !important;
    }

    .card-welcome {
      background-color: #fff0f8;
      border-radius: 20px;
      border: none;
      box-shadow: 0 5px 20px rgba(255, 150, 200, 0.2);
    }

    .btn-pink {
      background-color: #ff69b4;
      border: none;
      color: white;
      padding: 10px 25px;
      font-size: 18px;
      cursor: pointer;
      border-radius: 30px;
      transition: all 0.2s ease-in-out;
    }

    .btn-pink:hover {
      background-color: #e754a6;
    }

    .btn-pink:active {
      transform: scale(1.1);
      box-shadow: 0 0 15px rgba(255, 105, 180, 0.6);
    }

    .falling-candies {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      pointer-events: none;
      z-index: -1;
    }

    .falling-candy {
      position: absolute;
      font-size: 30px;
      animation: fall 4s infinite ease-in;
    }

    @keyframes fall {
      0% {
        top: -10%;
        opacity: 1;
      }
      100% {
        top: 100%;
        opacity: 0;
      }
    }

    .burst-candy {
      position: absolute;
      font-size: 24px;
      pointer-events: none;
      animation: burst 0.8s ease-out forwards;
    }

    @keyframes burst {
      0% {
        transform: scale(1);
        opacity: 1;
      }
      100% {
        transform: scale(2);
        opacity: 0;
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
<nav class="navbar navbar-expand-lg shadow-sm sticky-top" style="background-color: #fcbad3;">
  <div class="container">
    <!-- Logo redondo -->
    <a class="navbar-brand d-flex align-items-center" href="#">
      <img src="logo.jpeg" alt="Logo Sweet Heaven" width="40" height="40" style="border-radius: 50%; object-fit: cover; margin-right: 10px;">
      <span style="color: #8b1e6d; font-weight: bold;">Sweet Heaven</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="menu">
      <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link active" href="esomimo.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="catalogo.php">Catálogo</a></li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Bienvenida -->
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card card-welcome text-center p-5">
          <h1 class="mb-4">¡Bienvenid@ a Sweet Heaven!</h1>
          <p class="fs-4">Endulzamos tus momentos. 💖</p>
          <button id="btnSaludo" class="btn btn-pink mt-3 px-4">Recibir un saludo dulce</button>
          <p id="mensajeSaludo" class="mt-4 fw-bold text-success"></p>
        </div>
      </div>
    </div>

    <!-- Imágenes de productos -->
    <div class="row justify-content-center mt-4">
      <div class="col-md-6 mb-4">
        <img src="sweet_heaven_image_1.jpg" alt="Cajita de gomitas mixtas" class="img-fluid rounded shadow">
      </div>
      <div class="col-md-6 mb-4">
        <img src="sweet_heaven_image_2.jpg" alt="Bolsitas de gomitas mixtas" class="img-fluid rounded shadow">
      </div>
    </div>
  </div>

  <!-- Sección de contacto -->
  <div class="container text-center my-5">
    <h2 class="mb-4">Contáctanos</h2>
    <a href="https://www.instagram.com/swe3t.heaven/" target="_blank" class="btn btn-pink d-inline-flex align-items-center gap-2 px-4 py-2">
      <img src="https://cdn-icons-png.flaticon.com/512/1384/1384063.png" alt="Instagram" width="24" height="24">
      Ir a Instagram
    </a>
  </div>

  <!-- Fondo de emojis de dulces cayendo -->
  <div class="falling-candies">
    <div class="falling-candy" style="left: 10%; animation-duration: 6s; animation-delay: 0s;">🍬</div>
    <div class="falling-candy" style="left: 30%; animation-duration: 5s; animation-delay: 2s;">🍫</div>
    <div class="falling-candy" style="left: 50%; animation-duration: 7s; animation-delay: 4s;">🍭</div>
    <div class="falling-candy" style="left: 70%; animation-duration: 5.5s; animation-delay: 1s;">🍩</div>
    <div class="falling-candy" style="left: 90%; animation-duration: 6.5s; animation-delay: 3s;">🍪</div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function () {
      $('#btnSaludo').click(function () {
        $('#mensajeSaludo').text('¡Gracias por visitar Sweet Heaven! 🍭💕');
      });
        }
      );
  </script>

</body>
</html>
