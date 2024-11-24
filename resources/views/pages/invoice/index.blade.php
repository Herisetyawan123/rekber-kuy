<x-layouts-dashboard>

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Invoice List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Invoices</a></li>
                        <li class="breadcrumb-item active">Invoice List</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm">
                            <div class="mb-4">
                                <button type="button" class="btn btn-light waves-effect waves-light"><i
                                        class="bx bx-plus me-1"></i> Add Invoice</button>
                            </div>
                        </div>
                        <div class="col-sm-auto">
                            <div class="d-flex align-items-center gap-1 mb-4">
                                <div class="input-group datepicker-range">
                                    <input type="text" class="form-control flatpickr-input" data-input
                                        aria-describedby="date1">
                                    <button class="input-group-text" id="date1" data-toggle><i
                                            class="bx bx-calendar-event"></i></button>
                                </div>
                                <div class="dropdown">
                                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bx bx-dots-horizontal-rounded"></i>
                                    </a>

                                    <ul class="dropdown-menu dropdown-menu-end">
                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->

                    <div class="table-responsive">
                        <table class="table align-middle datatable dt-responsive table-check nowrap"
                            style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                            <thead>
                                <tr class="bg-transparent">
                                    <th style="width: 30px;">
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" name="check" class="form-check-input"
                                                id="checkAll">
                                            <label class="form-check-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th style="width: 120px;">Invoice ID</th>
                                    <th>Date</th>
                                    <th>Billing Name</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th style="width: 150px;">Download Pdf</th>
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr data-url="/invoice/detail/">
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-body fw-medium">#MN0215</a></td>
                                    <td>12 Oct, 2020</td>
                                    <td>Connie Franco</td>
                                    <td>$26.30</td>
                                    <td>
                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                    </td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i
                                                    class="bx bx-download label-icon"></i> Pdf</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-url="/invoice/detail/">
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-body fw-medium">#MN0215</a></td>
                                    <td>12 Oct, 2020</td>
                                    <td>Connie Franco</td>
                                    <td>$26.30</td>
                                    <td>
                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                    </td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i
                                                    class="bx bx-download label-icon"></i> Pdf</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-url="/invoice/detail/">
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-body fw-medium">#MN0215</a></td>
                                    <td>12 Oct, 2020</td>
                                    <td>Connie Franco</td>
                                    <td>$26.30</td>
                                    <td>
                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                    </td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i
                                                    class="bx bx-download label-icon"></i> Pdf</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-url="/invoice/detail/">
                                    <td>
                                        <div class="form-check font-size-16">
                                            <input type="checkbox" class="form-check-input">
                                            <label class="form-check-label"></label>
                                        </div>
                                    </td>
                                    <td><a href="javascript:void(0);" class="text-body fw-medium">#MN0215</a></td>
                                    <td>12 Oct, 2020</td>
                                    <td>Connie Franco</td>
                                    <td>$26.30</td>
                                    <td>
                                        <div class="badge badge-soft-success font-size-12">Paid</div>
                                    </td>
                                    <td>
                                        <div>
                                            <button type="button"
                                                class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i
                                                    class="bx bx-download label-icon"></i> Pdf</button>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button
                                                class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-end">
                                                <li><a class="dropdown-item" href="#">Edit</a></li>
                                                <li><a class="dropdown-item" href="#">Print</a></li>
                                                <li><a class="dropdown-item" href="#">Delete</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- end table responsive -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <script>
        document.querySelectorAll('tr[data-url]').forEach(row => {
            row.addEventListener('click', () => {
                window.location.href = row.getAttribute('data-url');
            });
        });
    </script>
</x-layouts-dashboard>
