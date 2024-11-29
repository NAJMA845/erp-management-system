<?php 
include_once("../include/header.php");
include_once("../include/topbar.php");
include_once("../include/sidebar.php");

?>        

         <!--Main content start-->
                        <main class="mt-1 pt-3">
                            <div class="container-fluid">
                                <!--Cards-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="fw-bold text-uppercase">Register Customer</h4>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Fill the form
                                            </div>
                                            <div class="card-body">
                                                <form id="customerForm">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Title</label>
                                                                <select name="title" class="form-control" required>
                                                                    <option value="">Please select</option>
                                                                    <option value="Mr">Mr</option>
                                                                    <option value="Mrs">Mrs</option>
                                                                    <option value="Miss">Miss</option>
                                                                    <option value="Dr">Dr</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">First Name</label>
                                                                <input type="text" name="first_name" class="form-control" required />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Last Name</label>
                                                                <input type="text" name="last_name" class="form-control" required />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">Contact Number</label>
                                                                <input type="tel" name="contact_number" class="form-control" pattern="[0-9]{10}" required />
                                                                <small class="form-text text-muted">Enter a valid 10-digit phone number.</small>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label class="form-label">District</label>
                                                                <input type="text" name="district" class="form-control" required />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <button type="submit" class="btn btn-success">
                                                                Register
                                                            </button>
                                                            <button type="reset" class="btn btn-secondary">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                     <!--Main Content End-->

                     <?php include_once("../include/footer.php");?>        
