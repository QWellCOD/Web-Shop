<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spielplatz</title>
    <!-- Favicons -->
    <link rel="icon" type="image/x-icon" href="../assets/icons/favicon-192x192.ico">

     <!-- bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="../style/spielplatz.css">

    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</head>
    <body>

        <header>

            <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-dark mb-4">
                <div class="container-fluid">
                    <!-- logo -->
                    <div class="col d-flex justify-content-center">
                        <a class="navbar-brand" href="homepage.php">
                        <img src="../assets/images/fsi_logo_header.png" alt="FSI Reutlingen" width="169px" height="87px">
                        </a>
                    </div>

                    <!-- search bar -->
                    <div class="col justify-content-start">
                        <form class="d-flex justify-content-center" role="search">
                        <input class="form-control me-2" type="search" placeholder="Produktsuche..." aria-label="Search">
                        <button class="btn btn-outline-warning" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                            height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                            </svg></button>
                        </form>
                    </div>

                    <!-- right alligned nav buttons -->
                    <div class="col d-flex justify-content-center">
                        <ul class="nav justify-content-end nav-underline">
                        <li class="nav-item">
                            <a class="nav-link px-2 text-white" href="products.php">
                            <div class="d-flex flex-column align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-shop" viewBox="0 0 16 16">
                                <path
                                    d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0M1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5M4 15h3v-5H4zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1zm3 0h-2v3h2z" />
                                </svg>
                            </div>
                            <div>Artikelübersicht</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 text-white" href="favorits.php">
                            <div class="d-flex flex-column align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-heart" viewBox="0 0 16 16">
                                <path
                                    d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15" />
                                </svg>
                            </div>
                            <div>Favoriten</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-2 text-white " href="warenkorb.php">
                            <div class="d-flex flex-column align-items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-cart3" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                </svg>
                            </div>
                            <div>Warenkorb</div>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link px-2 text-white dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                                class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                                <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                            </svg>
                            <br>Profil
                            </a>
                            <ul class="dropdown-menu">
                            <div class="d-flex flex-column align-items-center">
                                <li><button class="btn btn-sm btn-outline-light mb-2" type="button"> Login </button></li>
                                <li><button class="btn btn-sm btn-warning" type="button">Sign-up</button></li>
                                <!--
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">Platzhalter</a></li>
                                -->
                            </div>
                            </ul>
                        </li>
                        </ul>
                    </div>

                    
                    </div>
                </div>
            </nav>
        </header>

        <main class="container">
            <div class="bg-body-tertiary p-5 rounded">
                <h1>Navbar example</h1>
                <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
                
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
            </div>
        </main>      

        <footer>
            <nav class="navbar sticky-bottom py-3 bg-dark text-light">
                <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
                    <ul class="nav justify-content-center border-bottom pb-3 mb-3"> 
                    <li class="nav-item"><a href="homepage.php" class="nav-link px-2 text-light">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Doku</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">DevTeam</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Kontakt & Retouren</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">AGB</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-light">Impressum</a></li>
                    <li class="nav-item"><a href="datenschutz.php" class="nav-link px-2 text-light">Datenschutz</a></li>
                    </ul>
                    <p class="text-center text-light">&copy; <?php echo date('Y'); ?> Fachschaft Informatik Reutlingen</p>
                </div>
            </nav>
        </footer>
    
    </body>
</html>