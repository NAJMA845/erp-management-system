<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./assets/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ERP System</title>
</head>
<link rel="stylesheet" href="./assets/css/style.css"/>
<body>
            <!--Top navbar start-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <!--offcanvas trigger start-->
                    <button
                    class="navbar-toggler me-2"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample"
                    aria-controls="offcanvasExample"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
            <!--offcanvas trigger end-->
            <a class="navbar-brand text-uppercase fw-bold text-uppercase me-auto " 
            href="#">Pro Track</a>
            <button class="navbar-toggler" type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" 
            aria-expanded="false" 
            aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" 
            id="navbarSupportedContent">
            <form class="d-flex ms-auto" role="search">
                <div class="input-group my-3 my-lg-0 ">
                    <input 
                    type="text" 
                    class="form-control"
                    placeholder="Search..." 
                    aria-describedby="button-addon2"
                    />
                    <button class="btn btn-outline-secondary btn-primary text-white" 
                            type="button" 
                            id="button-addon2"
                            aria-label="Search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>

                </div>
            </form>
            
                <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" 
                    role="button" data-bs-toggle="dropdown" 
                    aria-expanded="false"
                    >
                    <img src="./assets/images/user.png" class="user-icon" alt="User icon"/>
                    Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Change Password</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Log Out</a></li>
                    </ul>
                </li>
                </ul>
            </div>
            </div>
            </nav>
            <!--Top navbar end-->
            <!--Off canvas start-->
            <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav"
            tabindex="-1"
            id="offcanvasExample"
            aria-labelledby="offcanvasExampleLabel">
            <div class="offcanvas-body">
            <ul class="navbar-nav">
            <li class="nav-item">
                <div class="text-secondary text-uppercase fw-bold">Core</div>
            </li>
            <div class="admin" style="display: block;">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page"
                href="#"><i class="fas fa-tachometer me-2"></i> Dashboard </a>
            </li>
            <li class="nav-item my-0">
                <hr/>
            </li>
            <div class="admin" style="display: block;">
                <li class="nav-item">
                    <div class="text-secondary text-uppercase fw-bold">Customer Management</div>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebar-link"
                    data-bs-toggle="collapse"
                    href="#CustomerMangement"
                    role="button"
                    aria-expanded="false"
                    aria-controls="CustomerMangement"
                    >
                    <i class="fa-regular fa-user"></i> Customer Profile
                        <span class="right-icon float-end">
                                    <i class="fas fa-chevron-down"></i>
                                </span>
                    </a>
                    <div class="collapse" id="CustomerMangement">
                        <div>
                            <ul class="navbar-nav ps-3">
                                <li>
                                    <a href="./customers/add-customers.php" class="nav-link"><i
                                            class="fas fa-plus me-2"></i> Add New </a>
                                </li>
                                <li>
                                    <a href="./customers/manage-customers.php" class="nav-link"><i
                                            class="fas fa-list me-2"></i> Manage All </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                            <li class="nav-item my-0">
                                <hr/>
                            </li>

                            <li class="nav-item">
                                <div class="text-secondary text-uppercase fw-bold">Inventory</div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link sidebar-link"
                                data-bs-toggle="collapse"
                                href="#ItemMgmt"
                                role="button"
                                aria-expanded="false"
                                aria-controls="ItemMgmt"><i class="fa-solid fa-truck-fast"></i></i> Item Management
                                    <span class="right-icon float-end">
                            <i class="fas fa-chevron-down"></i></span>
                                </a>
                                <div class="collapse" id="ItemMgmt">
                                    <div>
                                        <ul class="navbar-nav ps-3">
                                            <li>
                                                <a href="./add-items.html" class="nav-link"><i
                                                        class="fas fa-plus me-2"></i> Add New </a>
                                            </li>
                                            <li>
                                                <a href="./manage-items.html" class="nav-link"><i
                                                        class="fas fa-list me-2"></i> Manage All</a>
                                            </li>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item my-0">
                                <hr/>
                            </li>
                            <li class="nav-item">
                                <div class="text-secondary text-uppercase fw-bold">Reporting</div>
                            </li>
                            <a class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./invoice-report.html">
                                    <i class="fa-solid fa-file-contract me-2"></i> Invoice Reports </a>
                            </a>
                            <a class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./invoice-item-report.html">
                                    <i class="fa-solid fa-file-contract me-2"></i> Invoice Item Reports </a>
                            </a>
                            <a class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./item-report.html">
                                    <i class="fa-solid fa-file-contract me-2"></i> Item Reports </a>
                            </a>    
                            
                            <li class="nav-item my-0">
                                                <hr/>
                                            </li>
                                            <a class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="#">
                                                    <i class="fa-solid fa-right-from-bracket me-2"></i>Log Out </a>
                                    </div>
                                </div>
                               </div>
                            </div>     
                            <!--off canvas end-->

                <!-- Main Content Start -->
            <main class="mt-1 pt-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="fw-bold text-uppercase">Dashboard</h4>
                        <p>Statistics of the system!</p>
                    </div>
                </div>

                <div class="row justify-content-center">
                    <!-- Customer Statistics -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="card-title text-uppercase text-muted">Total Customers</h6>
                                <p class="h1 fw-bold">1,250</p>
                                <a href="#" class="card-link link-underline-light">View more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Item Statistics -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="card-title text-uppercase text-muted">Total Items</h6>
                                <p class="h1 fw-bold">800</p>
                                <a href="#" class="card-link link-underline-light">View more</a>
                            </div>
                        </div>
                    </div>

                    <!-- Report Statistics -->
                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body text-center">
                                <h6 class="card-title text-uppercase text-muted">Total Report</h6>
                                <p class="h1 fw-bold">10</p>
                                <a href="#" class="card-link link-underline-light">View more</a>
                            </div>
                        </div>
                    </div>
            
                   <!-- Tabs for New SCustomer, Recent Loans, and Subscriptions -->
                                            <div class="row mt-5">
                                                <div class="col-md-12">
                                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link text-uppercase active" id="new-customers" data-bs-toggle="tab" data-bs-target="#new-customers-pane" type="button" role="tab" aria-controls="new-customers-pane" aria-selected="true">
                                                                New Customers
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link text-uppercase" id="recent-items" data-bs-toggle="tab" data-bs-target="#recent-items-pane" type="button" role="tab" aria-controls="recent-items-pane" aria-selected="false">
                                                                Recent Items
                                                            </button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link text-uppercase" id="recent-reports" data-bs-toggle="tab" data-bs-target="#recent-reports-pane" type="button" role="tab" aria-controls="recent-reports-pane" aria-selected="false">
                                                                Recent Reports
                                                            </button>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content" id="myTabContent">
                                                        <!-- New Customers Tab -->
                                                        <div class="tab-pane fade show active" id="new-customers-pane" role="tabpanel" aria-labelledby="new-customers" tabindex="0">
                                                            <div class="table-responsive">
                                                                <table class="table table-responsive table-striped">
                                                                    <thead class="table-dark">
                                                                        <tr>
                                                                            <th scope="col">#</th>
                                                                            <th scope="col">Title</th>
                                                                            <th scope="col">First Name</th>
                                                                            <th scope="col">Last Name</th>
                                                                            <th scope="col">Contact No</th>
                                                                            <th scope="col">District</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <!-- Loop through customers here -->
                                                                        <tr>
                                                                            <th>1</th>
                                                                            <td>Mr</td>
                                                                            <td>John</td>
                                                                            <td>Doe</td>
                                                                            <td>1234567890</td>
                                                                            <td>Colombo</td>
                                                                        </tr>
                                                                        <!-- End of loop -->
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                <!-- Recent Items Tab -->
                                                <div class="tab-pane fade" id="recent-items-pane" role="tabpanel" aria-labelledby="recent-items" tabindex="0">
                                                    <div class="table-responsive">
                                                        <table class="table table-responsive table-striped">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Item Code</th>
                                                                    <th scope="col">Item Name</th>
                                                                    <th scope="col">Category</th>
                                                                    <th scope="col">Sub Category</th>
                                                                    <th scope="col">Quantity</th>
                                                                    <th scope="col">Unit Price</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Loop through items here -->
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td>001</td>
                                                                    <td>Item A</td>
                                                                    <td>Category 1</td>
                                                                    <td>Sub Category 1</td>
                                                                    <td>10</td>
                                                                    <td>100</td>
                                                                </tr>
                                                                <!-- End of loop -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                                <!-- Recent Reports Tab -->
                                                <div class="tab-pane fade" id="recent-reports-pane" role="tabpanel" aria-labelledby="recent-reports" tabindex="0">
                                                    <div class="table-responsive">
                                                        <table class="table table-responsive table-striped">
                                                            <thead class="table-dark">
                                                                <tr>
                                                                    <th scope="col">#</th>
                                                                    <th scope="col">Invoice No</th>
                                                                    <th scope="col">Invoice Date</th>
                                                                    <th scope="col">Customer</th>
                                                                    <th scope="col">District</th>
                                                                    <th scope="col">Item Count</th>
                                                                    <th scope="col">Invoice Amount</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Loop through reports here -->
                                                                <tr>
                                                                    <th>1</th>
                                                                    <td>INV-001</td>
                                                                    <td>2024-11-28</td>
                                                                    <td>John Doe</td>
                                                                    <td>Colombo</td>
                                                                    <td>5</td>
                                                                    <td>500</td>
                                                                </tr>
                                                                <!-- End of loop -->
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                            <!--Main Content End-->


                <script src="./assets/js/bootstrap.bundle.min.js" 
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                <script src="./assets/js/b6e35dfe9b.js" crossorigin="anonymous"></script>
            </body>
            </html>