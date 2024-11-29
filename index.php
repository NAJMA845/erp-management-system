<?php 
include_once("./include/header.php");
 include_once("./include/topbar.php");
 include_once("./include/sidebar.php");
?>        

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
<?php include_once("./include/footer.php")?>