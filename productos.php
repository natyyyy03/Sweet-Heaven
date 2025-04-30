<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Sweet Heaven - Catálogo</title>

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
      background-image: url('https://www.transparenttextures.com/patterns/utah.png');
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

    .catalogo-title {
      text-align: center;
      margin-top: 50px;
      font-size: 2.5rem;
      font-weight: bold;
      color: #8b1e6d;
    }

    .product-card {
      background-color: #fff0f8;
      border-radius: 15px;
      border: none;
      box-shadow: 0 5px 20px rgba(255, 150, 200, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card img {
      width: 100%;
      height: 250px; /* Tamaño fijo para las imágenes */
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s ease;
    }

    .product-card:hover {
      transform: scale(1.05);
      box-shadow: 0 10px 30px rgba(255, 105, 180, 0.4);
    }

    .product-card img:hover {
      transform: scale(1.1); /* Efecto de agrandado de la imagen */
    }

    .product-card-body {
      padding: 1.25rem;
      text-align: center;
    }

    .product-card-title {
      font-size: 1.2rem;
      font-weight: bold;
      color: #8b1e6d;
    }

    .product-card-text {
      font-size: 1rem;
      color: #6b2166;
      margin-bottom: 1rem;
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

  <!-- Catálogo de productos -->
  <div class="container mt-5">
    <h2 class="catalogo-title">Catálogo de Productos</h2>
    <div class="row justify-content-center mt-4">

      <!-- Producto 1 -->
      <div class="col-md-4 mb-4">
        <div class="card product-card">
          <img src="gomitas.jpg" alt="Gomitas">
          <div class="card-body product-card-body">
            <h5 class="product-card-title">Gomitas de Frutas</h5>
            <p class="product-card-text">Deliciosas gomitas con forma de frutas, ¡perfectas para cualquier ocasión!</p>
          </div>
        </div>
      </div>

      <!-- Producto 2 -->
      <div class="col-md-4 mb-4">
        <div class="card product-card">
          <img src="chocolate.jpg" alt="Chocolate">
          <div class="card-body product-card-body">
            <h5 class="product-card-title">Chocolates</h5>
            <p class="product-card-text">Exquisito chocolate hecho a mano, disponible en diferentes sabores.</p>
          </div>
        </div>
      </div>

      <!-- Producto 3 -->
      <div class="col-md-4 mb-4">
        <div class="card product-card">
          <img src="chicles.jpg" alt="Chicles">
          <div class="card-body product-card-body">
            <h5 class="product-card-title">Gomas de Mascar Saborizadas </h5>
            <p class="product-card-text">Gomas de Mascar de diferentes sabores, ¡para que disfrutes cada momento!</p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Scripts -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

