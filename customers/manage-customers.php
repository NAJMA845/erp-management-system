<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
     rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>ERP System - Customer Management</title>
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
                                    <a href="./add-customers.html" class="nav-link"><i
                                            class="fas fa-plus me-2"></i> Add New </a>
                                </li>
                                <li>
                                    <a href="./manage-customers.html" class="nav-link"><i
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
                        <main class="mt-3 pt-3">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="fw-bold text-uppercase">Customer Management</h4>
                                    </div>
                        
                                    <div class="col-md-12 mt-4">
                                        <div class="card">
                                            <div class="card-header">
                                                Customer List
                                            </div>
                                            <div class="card-body">
                                                <input type="text" id="searchBar" class="form-control mb-3" placeholder="Search customers..." onkeyup="searchCustomer()" />
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Title</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Contact Number</th>
                                                            <th>District</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="customerList">
                                                        <!-- Example Data -->
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Mr</td>
                                                            <td>John</td>
                                                            <td>Doe</td>
                                                            <td>1234567890</td>
                                                            <td>Colombo</td>
                                                            <td>
                                                                <button class="btn btn-primary btn-sm" onclick="editCustomer(1)">Update</button>
                                                                <button class="btn btn-danger btn-sm" onclick="deleteCustomer(1)">Delete</button>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Mrs</td>
                                                            <td>Jane</td>
                                                            <td>Smith</td>
                                                            <td>9876543210</td>
                                                            <td>Galle</td>
                                                            <td>
                                                                <button class="btn btn-primary btn-sm" onclick="editCustomer(2)">Update</button>
                                                                <button class="btn btn-danger btn-sm" onclick="deleteCustomer(2)">Delete</button>
                                                            </td>
                                                        </tr>
                                                        <!-- Dynamically generated rows can replace these -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                        
                        <!--Main Content End-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b6e35dfe9b.js" crossorigin="anonymous"></script>
</body>
</html>