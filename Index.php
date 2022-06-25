<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font Awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<!--Bootstrap jQuery-->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<!--JQuery JS-->
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
	<!--Bootstrap JS-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- MDBootstrap Datatables  -->
	<link href="Scripts/css/addons/datatables.min.css" rel="stylesheet">
	<!-- MDBootstrap Datatables  -->
	<script type="text/javascript" src="Scripts/js/addons/datatables.min.js"></script>

    <title>Proyecto 2</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-dark  navbar-dark ">
          <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled">Disabled</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
              </form>
            </div>
          </div>
        </nav>
    </header>
    <hr>
<div class="container">   
    <div class="mb-4 row">
        <label for="sku" class="col-sm-2 col-form-label">SKU</label>
        <div class="col-sm-10">
          <input type="text"  class="form-control form-control-user text-center" id="sku" >
        </div>
      </div>
     
      <div class="form-row col-md-12">
         <div class="form-group col-md-4">
             <label for="Nombre">Nombre</label>
             <input type="text" id="Nombre" class="form-control  text-center" />
         </div>
         <div class="form-group col-md-4">
             <label for="pre">Precio</label>
             <input type="text" id="pre" class="form-control  text-center" />
         </div>
         <div class="form-group col-md-4">
             <label for="tipo">Tipo</label>
             <select name="tipo" id="tipo" class="form-control form-control-user text-center">
	        	    <option value="0"></option>
	        	    <option value="computo">Equipo de computo</option>
	        	    <option value="electrónico">Equipo electrónico</option>
	        	    <option value="Papeleria">Papeleria</option>
	        	    <option value="Papeleria">Mueble</option>
	         </select>
         </div>
         <div class="form-group col-md-12 d-flex align-items-center justify-content-center ">
             <div class="btn btn-success mt-3 btn-rounded"  id="b1" OnClick="GuardarLocalstorage();"><i class="far fa-share"></i> Guardar Información</div>
         </div> 
         </div>  
     </div>
     <div class="form-row col-md-12">
          <table class="table table-dark table-striped"id="tablastorage" >
           <thead>
             <tr>
               <th >SKU</th>
               <th >Nombre</th>
               <th >Precio</th>
               <th >Tipo</th>
               <th >Acciones</th>
             </tr>
           </thead>
           <tbody id="tablastoragebody">
					<tr>
						<td colspan="5">
							<div class="d-flex justify-content-center w-100">
								<div class="spinner-border" role="status">
									<span class="sr-only">Loading...</span>
								</div>
							</div>
						</td>
					</tr>
				</tbody>
         </table>
    </div>
</div>
<footer class="sticky-footer bg-light footer">
       <div class="container my-auto">
           <div class="copyright text-center my-auto">
               <span>Copyright &copy; José Alberto Domínguez 2022</span>
           </div>
       </div>
</footer>
</body>
</html>
<script>

$( window ).on( 'load', function () {
    mostrar();
} );

</script>