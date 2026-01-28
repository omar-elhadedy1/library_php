 <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Library School</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="fet.php">Features</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="carouselId" class="carousel slide w-75 container" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="First slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="1"
                aria-label="Second slide"
            ></li>
            <li
                data-bs-target="#carouselId"
                data-bs-slide-to="2"
                aria-label="Third slide"
            ></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img
                    src="products\pexels-cottonbro-6214934.jpg"
                    class="w-100 d-block"
                    alt="First slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="products\pexels-element5-1370295.jpg"
                    class="w-100 d-block"
                    alt="Second slide"
                />
            </div>
            <div class="carousel-item">
                <img
                    src="products\pexels-pixabay-159711.jpg"
                    class="w-100 d-block"
                    alt="Third slide"
                />
            </div>
        </div>
        <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselId"
            data-bs-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    