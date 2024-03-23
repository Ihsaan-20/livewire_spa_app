<!doctype html>
<html lang="en">

<head>
    <title>Livewire- app</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"></button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" aria-current="page">Home <span
                                class="visually-hidden">(current)</span></a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
                
            </div>
        </nav>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card mt-3 p-3">
                        <h3>Support tickets</h3>
                        <div class="card mb-3 p-2" style="cursor: pointer">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem rerum neque voluptatum temporibus minus. Eius repellendus cupiditate quidem amet ut!
                            </p>
                        </div>
                        <div class="card mb-3 p-2" style="cursor: pointer">
                            <p>
                               Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto, harum!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card mt-3 p-3">
                        <h3>Comments</h3>
                        <div class="card-body">
                            <div class="mb-3">
                                <input type="file" name="image" class="form-control">
                            </div>

                            <form class="row g-3">
                                <div class="col-10">
                                  <input type="text" class="form-control" id="comment" placeholder="What's in your mind...">
                                </div>
                                <div class="col-2">
                                  <button type="submit" class="btn btn-primary mb-3 w-100">Add</button>
                                </div>
                              </form>

                              <div class="card mb-3 p-2">
                                <div class="d-flex justify-content-between mb-2">
                                    <div>
                                        <span class="fs-5 fw-bold">Ihsaan Chandio </span> <span class="text-muted">1 mint ago</span>
                                        
                                    </div>
                                    <a href="#" class="btn btn-danger btn-sm">X</a>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem rerum neque voluptatum temporibus minus. Eius repellendus cupiditate quidem amet ut!
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>