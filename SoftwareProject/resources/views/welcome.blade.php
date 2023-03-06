@extends('layouts.app')

@section('content')
<body>
    <div class="container-fluid">
        <div class="row mx-5 py-4">
            <h2>Look What's New</h2>
            <div class="col-md-4 col-sm-6 my-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">€7.99</h5>
                        <p class="card-text">Meat-free Ham Slices</p>
                        <a
                            href="#"
                            class="btn btn-primary text-light fw-semibold"
                            >Shop All</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 my-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">€7.99</h5>
                        <p class="card-text">Meat-free Ham Slices</p>
                        <a
                            href="#"
                            class="btn btn-primary text-light fw-semibold"
                            >Shop All</a
                        >
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 my-1">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">€7.99</h5>
                        <p class="card-text">Meat-free Ham Slices</p>
                        <a
                            href="#"
                            class="btn btn-primary text-light fw-semibold"
                            >Shop All</a
                        >
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
            </nav>
        </div>
        <div class="row mx-5 py-4">
            <h2>Shop by Diet</h2>
            <div class="col-md-3 col-sm-3 my-1">
                <div class="card text-center mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Vegetarian</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 my-1">
                <div class="card text-center mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Vegetarian</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 my-1">
                <div class="card text-center mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Vegetarian</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 my-1">
                <div class="card text-center mb-3">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Vegetarian</h5>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
            </nav>
        </div>
    </div>
    <footer class="bg-dark text-light p-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="row">
                    <div class="col-sm-3 col-lg">
                        <p class="fs-3 fw-bold">About DietOnlie</p>
                        <p>Store vacancies</p>
                        <p>Careers</p>
                        <p>DietOnline PLC</p>
                        <p>Sustainability</p>
                        <p>Our little helps</p>
                    </div>
                    <div class="col-sm-3 col-lg">
                        <p class="fs-4 fw-bold">Here to help</p>
                        <p>Help & FAQS</p>
                        <p>Contact us</p>
                    </div>
                    <div class="col-sm-3 col-lg">
                        <p class="fs-3 fw-bold">Our website</p>
                        <p>Terms & Conditions</p>
                        <p>Privacy & Cookie Policy</p>
                        <p>Privacy Center</p>
                        <p>Site map</p>
                        <p>Accessibility</p>
                    </div>
                    <div class="col-sm-3 col-lg">
                        <p class="fs-3 fw-bold">Useful links</p>
                        <p>Pharmacy</p>
                        <p>Product recall</p>
                        <p>Store locator</p>
                        <p>Bags of Help</p>
                        <p>Rate this page</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"
    ></script>
</body>

@endsection