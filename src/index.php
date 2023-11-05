<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>DEH Tech Shop</title>

  <link rel="stylesheet" href="../css/main.css" />
  <!-- FontAwesome 6.2.0 CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- (Optional) Use CSS or JS implementation -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js" integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
  <header>
    <nav class="relative mx-auto p-4 drop-shadow-md">
      <div class="flex items-center justify-between">
        <div class="pt-2">
          <img src="../img/deh-logo.png" alt="deh-logo" class="h-20" />
        </div>

        <div class="hidden space-x-8 p-2 items-center md:flex">
          <a href="#" class="text-accent hover:text-secondary"> Home </a>
          <a href="#" class="text-accent hover:text-secondary"> About Us </a>
          <a href="#" class="text-accent hover:text-secondary"> Contacts </a>
          <a href="#" class="text-accent hover:text-secondary"> Products </a>
          <button id="nav-cta" href="#" class="text-accent hover:text-white px-6 rounded-full bg-secondary75 p-2">
            Sign Up
          </button>
        </div>
      </div>
    </nav>
  </header>

  <main>
    <!-- Top Bar -->
    <div class="border my-2 mb-8 md:border-0">
      <div class="container flex flex-row-reverse items-center space-x-8 mx-auto">
        <div class="py-4 flex space-x-4 mx-2 md:w-1/2">
          <div class="container rounded-full bg-primary10 border-b border-accent p-2 px-2">
            <input type="text" class="container bg-primary10 px-4 text-lg focus:outline-none" />
          </div>
          <button class="rounded-full px-4 md:border md:border-primary hover:text-secondary">
            <i class="fa fa-search md:hidden"></i>
            <span class="hidden text-lg md:block"> Search </span>
          </button>
        </div>
        <div class="p-4 md:flex md:items-center md:space-x-4 hover:text-secondary">
          <span class="hidden md:block">Filters</span>
          <i class="fa fa-filter"></i>
        </div>
      </div>
    </div>

    <!-- Main Shop -->
    <div class="container flex items-start justify-between mx-auto">
      <!-- Side Bar -->
      <div class="container mx-2 mb-8 bg-primary10 border py-8 pl-5 rounded-xl border-accent border-r-2 w-20 md:w-auto">
        <div class="flex flex-col items-stretch space-y-60">
          <div class="flex flex-col items-center space-y-8">
            <!-- shop [ACTIVE] -->
            <div class="active border border-r-0 border-accent bg-secondary30 container p-4 pl-4 rounded-l-full hover:drop-shadow-md md:flex md:items-center md:space-x-2">
              <i class="fas fa-shop"></i>
              <span class="hidden md:block"> shop </span>
            </div>

            <!-- Cart -->
            <div class="container p-4 pl-4 bg-primary30 rounded-l-full md:flex md:items-center md:space-x-2 hover:drop-shadow-md hover:border hover:border-accent">
              <i class="fas fa-cart-shopping"></i>
              <span class="hidden md:block"> cart </span>
            </div>

            <!-- Orders -->
            <div class="container p-4 pl-4 bg-primary30 rounded-l-full md:flex md:items-center md:space-x-2 hover:drop-shadow-md hover:border hover:border-accent">
              <i class="fas fa-receipt"></i>
              <span class="hidden md:block"> orders </span>
            </div>
          </div>

          <!-- Logout -->
          <div class="container p-4 pl-4 bg-primary30 rounded-l-full md:flex md:items-center md:space-x-2 hover:drop-shadow-md hover:border hover:border-accent">
            <i class="fas fa-right-from-bracket"></i>
            <span class="hidden md:block"> logout </span>
          </div>
        </div>
      </div>

      <div class="container py-4 grid grid-col-1 gap-5 border-0 mb-4 mx-4 border-t-2 border-accent place-items-start max-h-screen overflow-scroll md:grid-cols-3">
        <!-- Item Card -->
        <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20] as $i) : ?>

          <div class="container bg-primary10 border border-accent rounded-lg hover:bg-primary30 hover:border-2">
            <div class="mx-auto my-4 h-32 border bg-contain bg-white bg-no-repeat bg-center" style="background-image: url('../img/sample_img2.webp')"></div>
            <div class="mx-4 pb-4">
              <div>
                <h1 class="text-1xl text-bold text-accent hover:text-secondary">
                  Item Name
                </h1>
                <h2 class="text-lg">$999</h2>
                <h3 class="text-md">0</h3>
              </div>
              <div class="my-2 flex items-end justify-between">
                <div class="flex flex-1 items-center justify-start space-x-4">
                  <button class="px-1 border border-accent hover:bg-secondary50">
                    <i class="fas fa-minus"></i>
                  </button>
                  <span>0</span>
                  <button class="px-1 border border-accent hover:bg-secondary50">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <div>
                  <button class="p-2 border-accent hover:bg-secondary50 h-10 w-10 border">
                    <i class="fas fa-cart-shopping"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>

        <!-- other item cards -->
      </div>
    </div>
  </main>

  <footer></footer>
</body>

</html>