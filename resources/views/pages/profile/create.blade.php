<x-dashboard-layouts>
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Biodata Diri</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Dashboard</a></li>
                        <li class="breadcrumb-item active">User Details</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0"> </h4>
                </div>
                <div class="card-body">
                    <div id="basic-pills-wizard" class="twitter-bs-wizard">
                        <ul class="twitter-bs-wizard-nav">
                            <li class="nav-item">
                                <a href="#seller-details" class="nav-link" data-toggle="tab">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="User Detail">
                                        <i class="bx bx-list-ul"></i>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#company-document" class="nav-link" data-toggle="tab">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Bank Detail">
                                        <i class="bx bxs-bank"></i>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#bank-detail" class="nav-link" data-toggle="tab">
                                    <div class="step-icon" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Completed">
                                        <i class="bx bx-book-bookmark"></i>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <!-- wizard-nav -->

                        <div class="tab-content twitter-bs-wizard-tab-content">
                            <div class="tab-pane" id="seller-details">
                                <div class="container-sm" style="max-width: 600px;">
                                    <div class="text-center mb-4">
                                        <h5>User Details</h5>
                                        <p class="card-title-desc">Fill all information below</p>
                                    </div>
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input" class="form-label">Nama
                                                        Lengkap</label>
                                                    <input name="name" type="text" class="form-control"
                                                        id="basicpill-firstname-input"
                                                        placeholder="Masukkan Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-lastname-input" class="form-label">Tanggal
                                                        Lahir</label>
                                                    <input name="date" class="form-control" type="date"
                                                        value="2019-08-19" id="example-date-input">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-phoneno-input"
                                                        class="form-label">Email</label>
                                                    <input name="email" type="text" class="form-control"
                                                        id="basicpill-phoneno-input" placeholder="Masukkan Email">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-email-input" class="form-label">Gender</label>
                                                    <select name="gender" class="form-select">
                                                        <option disabled selected>Select</option>
                                                        <option value="lakilaki">Laki - Laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-address-input"
                                                        class="form-label">Alamat</label>
                                                    <textarea name="address" id="basicpill-address-input" class="form-control" rows="2"
                                                        placeholder="Masukkan Alamat anda"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-address-input" class="form-label">Biografi
                                                        (opsional)</label>
                                                    <textarea name="biografi" id="basicpill-address-input" class="form-control" rows="4"
                                                        placeholder="Ceritakan tentang diri anda"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <ul class="pager wizard twitter-bs-wizard-pager-link">
                                        <li class="next"><a href="javascript: void(0);"
                                                class="btn btn-primary">Next <i
                                                    class="bx bx-chevron-right ms-1"></i></a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- tab pane -->

                            <!-- tab pane -->
                            <div class="tab-pane" id="company-document">
                                <div>
                                    <div class="text-center mb-4">
                                        <h5>Bank Detail</h5>
                                        <p class="card-title-desc">Fill all information below</p>
                                    </div>
                                    <div class="container-sm" style="max-width: 600px;">
                                        <form>
                                            <div class="mt-4 mt-lg-0">
                                                <div class="row mb-4">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-sm-3 col-form-label">First name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"
                                                            id="horizontal-firstname-input"
                                                            placeholder="Enter your First Name">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="horizontal-email-input"
                                                        class="col-sm-3 col-form-label">Email</label>
                                                    <div class="col-sm-9">
                                                        <input type="email" class="form-control"
                                                            id="horizontal-email-input"
                                                            placeholder="Enter your Email">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="horizontal-password-input"
                                                        class="col-sm-3 col-form-label">Password</label>
                                                    <div class="col-sm-9">
                                                        <input type="password" class="form-control"
                                                            id="horizontal-password-input"
                                                            placeholder="Enter your password">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            <li class="previous"><a href="javascript: void(0);"
                                                    class="btn btn-primary"><i class="bx bx-chevron-left me-1"></i>
                                                    Previous</a></li>
                                            <li class="next"><a href="javascript: void(0);"
                                                    class="btn btn-primary">Next <i
                                                        class="bx bx-chevron-right ms-1"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- tab pane -->

                            <div class="tab-pane" id="bank-detail">
                                <div class="card" style="width: 600px; margin: auto; border: none;">
                                    <div class="card-body">
                                        <div class="text-center mb-3">
                                            <h4>Data Terimpan</h4>
                                        </div>
                                        <div class="mb-4 text-center">
                                            <img src="{{ asset('assets/images/bg/save.jpg') }}" alt=""
                                                class="img-thumbnail" style="border: none;">
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>



                                <ul class="pager wizard twitter-bs-wizard-pager-link">
                                    <li class="previous"><a href="javascript: void(0);" class="btn btn-primary"><i
                                                class="bx bx-chevron-left me-1"></i> Previous</a></li>
                                    <li class="float-end"><a href="javascript: void(0);" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target=".confirmModal">Save
                                            Changes</a></li>
                                </ul>
                            </div>
                            <!-- tab pane -->
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
    <!-- Modal -->
    <div class="modal fade confirmModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <div class="mb-3">
                            <i class="bx bx-check-circle display-4 text-success"></i>
                        </div>
                        <h5>Confirm Save Changes</h5>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-light w-md" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary w-md" data-bs-dismiss="modal">Save
                        changes</button>
                </div>
            </div>
            <!-- end modal -->
            <!-- END layout-wrapper -->


</x-dashboard-layouts>
