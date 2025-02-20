<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\bootstrap.min.css">
    <link rel="stylesheet" href="css\style.css">
    <title>Лендинг маей игры)</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .navbar {
      margin-bottom: 20px;
    }
    .section {
      padding: 60px 0;
    }
    .carousel-item img {
      height: 400px;
      object-fit: cover;
    }
    .form-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ddd;
      border-radius: 10px;
      background-color: #f9f9f9;
    }
  </style>
</head>
<body>
  <div id="home"></div>
    <!-- Спросить про navbar-expand-sm нужно ли ставить см или не нужно -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Игра</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#navbar">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Об игре</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Картинки</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#login">Войти</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section id="home" class="section bg-light text-center vh-75">
    <div class="container">
      <h1>Добро пожаловать в игру!</h1>
      <p class="lead">Погрузитесь в увлекательный мир приключений и сражений.</p>
      <a href="#about" class="btn btn-primary btn-lg">Узнать больше</a>
    </div>
  </section>


  <section id="about" class="section">
    <div class="container">
      <h2 class="text-center mb-4">Об игре</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel magnam consequatur magni architecto velit veritatis quam suscipit. Nisi ea commodi hic veritatis fugiat in, beatae laboriosam a non odio dicta illo doloribus possimus veniam. Fuga, nihil ipsa sequi ab laboriosam dolore praesentium omnis. Deleniti reiciendis esse laborum, fugiat pariatur aspernatur ratione consequatur nam placeat cupiditate cum est. Quaerat, veritatis quia quidem vero reprehenderit perferendis ut dolor hic harum quas, tempora voluptatibus fugiat odit velit commodi minima eius placeat amet? Quasi quas recusandae cum. Hic necessitatibus tenetur corrupti maiores adipisci, nemo expedita eaque, veniam cumque non ad, dolor est delectus rerum.</p>
      <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus, unde?</p>
    </div>
  </section>


  <section id="gallery" class="section bg-light">
    <div class="container">
      <h2 class="text-center mb-4">Картинки</h2>
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="#" class="d-block w-100" alt="Изображение 1">
          </div>
          <div class="carousel-item">
            <img src="#" class="d-block w-100" alt="Изображение 2">
          </div>
          <div class="carousel-item">
            <img src="#" class="d-block w-100" alt="Изображение 3">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Следующий</span>
        </button>
      </div>
    </div>
  </section>

  <section id="login" class="section">
    <div class="container">
      <h2 class="text-center mb-4">Войти</h2>
      <div class="form-container">
        <form>
          <div class="mb-3">
            <label for="username" class="form-label">Что то</label>
            <input type="text" class="form-control" id="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Что то</label>
            <input type="password" class="form-control" id="password" required>
          </div>
          <button type="submit" class="btn btn-primary w-100">Войти</button>
        </form>
      </div>
    </div>
  </section>
  <dialog></dialog>

  <script src="js\scripts.js"></script>
  <script src="js\bootstrap.bundle.min.js"></script>
</body>
</html>