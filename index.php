<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <title>Website - CSS Grid</title>
</head>
<body onload="LoadWallpapers(); LoadComments(); VoidInput();">
    
    <div class="Container">

        <header class="Header">
            <h2>Wallpaper World</h2>
                <div class="GroupSearch">
                    <input type="text" placeholder="Buscar wallpaper (Nombre)" name="Search" maxlength="50" id="ITSearch">
                    <label for="ITSearch"><i class="fas fa-search"></i></label>
                </div>
        </header>
        <h3 class="New" id="New"></h3>
        <main class="Content" id="PrincipalContent">
        
        </main>

        <aside class="Sidebar">

            <p>Sidebar</p>

        </aside>


        <footer class="Footer">
            <h3>Danos tu opinión del sitio web:</h3>
            <textarea placeholder="Deja de tu comentario aquí.." maxlength="500" id="ContentComment"></textarea>
            <input type="text" value="<?php echo date("  Y/m/d"); ?>" id="Date" hidden>
            <div class="BtnComments">
                <button id="SendComment"></button>
            </div>
            <br>
            <h3 id="NumComments"></h3><br><hr><br>
            <div class="Comments" id="Comments">
            </div>
        </footer>

        <div class="BtnFloat">
            <button id="ViewOptions"><i class="far fa-eye" id="Eyes"></i></button>
            <button id="Add"><i class="fas fa-plus"></i></button>
            <button id="Mode"><i class="fas fa-sun"></i></button>
        </div>

        <div class="BGModal" id="Modal">
            <div class="AddModal">
                    <form class="GroupInputsModal" id="AddForm">
                        <p>Nombree:</p>
                        <input type="text" placeholder="Nombre del wallpaper" maxlength="50" id="Name" required>
                        <p>Género:</p>
                        <input type="text" placeholder="Anime, Naturaleza, Videojuegos, etc" maxlength="50" id="Genre" required>
                        <p>Imagen:</p>
                        <input type="file" name="archivo" id="archivo" required>
                        <button type="button" id="CloseModal">Cancelar</button>
                        <button type="submit" id="SaveAnime">Guardar</button>
                    </form>
            </div>
        </div>

        <div class="ModalViewImage" id="ModalViewImage">
                <div class="ImageModal" id="ImageModal">
                </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/diseño.js"></script>
    <script src="js/main.js"></script>
    <script src="js/comments.js"></script>

</body>
</html>
