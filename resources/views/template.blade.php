<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link  href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="px-4 py-5 my-5 text-center">

        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                  <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                  </a>
                </div>
          
                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="#" class="nav-link px-2 link-secondary">Home</a></li>
                </ul>
          
                <div class="col-md-3 text-end">
                  <button type="button" class="btn btn-outline-primary me-2"><i class="fa fa-shopping-cart"></i></button>
                </div>
              </header>
        </div>

        <h1 class="display-5 fw-bold text-body-emphasis">DASHBOARD</h1>
        <div class="col-lg-6 mx-auto">
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Gestao de clientes</button>
            <button type="button" class="btn btn-secondary btn-lg px-4">Gestao de Produtos</button>
            <button type="button" class="btn btn-success btn-lg px-4 gap-3">Gestao de compras</button>
          </div>
        </div>
      </div>
      
    @yield('content')
</body>
</html>