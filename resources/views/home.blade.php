<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arv Ecomm</title>
    <link href="{{asset('css/home.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link flex href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    <script src="{{asset('js/home.js')}}" defer></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

   

        <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
            <img src="{{asset('images/ecomm_logo.jpg')}}" alt="Logo" width="36" height="36" class="d-inline-block align-text-top">
            <span class="site-name">E-Comm</span>
            </a>

            <a href="logout">
                

            <button class="Btn">
            <div class="sign"><svg viewBox="0 0 512 512"><path d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"></path></svg></div>
            <div class="text">Logout</div>
            </button>


            </a>
        </div>
        </nav>

        <nav class="sidebar locked">
      
      <div class="menu_container">
            <div class="menu_items">
            <ul class="menu_item">
                <div class="menu_title flex">
                <span class="title">Dashboard</span>
                <span class="line"></span>
                </div>
                <li class="item">
                <a href="#" class="link flex">
                    <i class="bx bx-home-alt"></i>
                    <span>Category</span>
                </a>
                </li>
                <li class="item">
                <a href="#" class="link flex">
                    <i class="bx bx-grid-alt"></i>
                    <span>Products</span>
                </a>
                </li>
            </ul>
            </div>
      </div>
    </nav>


    <div class="cards">
       
        <img src="https://www.gizmochina.com/wp-content/uploads/2022/05/iPhone-14-Pro-Purple-Side-by-Side-Black-1536x864.jpg" width="359" alt="image"/>
        <div class="cards__content">
            <p class="cards__title">iPhone 15</p>
            <p class="cards__description">iPhone is a line of smartphones produced by Apple Inc. that use Apple's own iOS mobile operating system.</p>
        </div>
</div>

</body>
</html>