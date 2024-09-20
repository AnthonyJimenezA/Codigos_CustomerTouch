<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/bf19500a1f.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="public/styles/style.css?v=2">
    <title>Buscador Códigos</title>
</head>

<body>

    <div class="container my-5">
        <section class="card">


            <div class="d-flex justify-content-between align-items-start card-logo">
                <div>
                </div>
                <div>
                    <a href="https://customertouchcr.com/" target="_blank">
                        <img src="public/images/LogoCustomerTouch.png" alt="Logo CustomerTouch CR"
                            class="img-fluid logo">
                    </a>
                </div>
            </div>



            <section class="card-body">
                <h4 class="card-title mb-2 ml-3">Buscador de Códigos</h4>

                <form class="col p-3">
                    <div class="row">
                        <div class="mb-3 col-12 col-md-4">
                            <input type="text" class="form-control" placeholder="Buscar" id="searchInput">
                        </div>
                    </div>
                </form>

            </section>

            <div class="table-responsive">
                <table class="table table-striped table-hover" id="resultsTable">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Categoría</th>
                            <th scope="col">Código</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Descripción</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>

        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="public/js/main.js?v=2"></script>

</body>

</html>