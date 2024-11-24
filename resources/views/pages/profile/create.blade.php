<x-layouts-dashboard>
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
                                    <form id="profileForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input" class="form-label">Nama
                                                        Lengkap</label>
                                                    <input name="name" type="text"
                                                        class="form-control disabled-input"
                                                        value="{{ Auth::user()->name }}" id="basicpill-firstname-input"
                                                        disabled placeholder="Masukkan Nama Lengkap"
                                                        style="background-color: #e9ecef; cursor: not-allowed;">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="example-date-input" class="form-label">Tanggal
                                                        Lahir</label>
                                                    <input name="tgl_lahir" class="form-control" type="date"
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
                                                        value="{{ Auth::user()->email }}"
                                                        style="background-color: #e9ecef; cursor: not-allowed;"
                                                        id="basicpill-phoneno-input" placeholder="Masukkan Email"
                                                        disabled>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-email-input" class="form-label">Gender</label>
                                                    <select name="gender" class="form-select"
                                                        id="basicpill-email-input">
                                                        <option disabled selected>Select</option>
                                                        <option value="male">Laki - Laki</option>
                                                        <option value="female">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input"
                                                        class="form-label">Pekerjaan</label>
                                                    <input name="pekerjaan" type="text"
                                                        class="form-control disabled-input"
                                                        id="basicpill-firstname-input"
                                                        placeholder="Masukkan Pekerjaan">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="mb-3">
                                                    <label for="basicpill-firstname-input" class="form-label">No.
                                                        Telepon</label>
                                                    <input name="no_telp" type="text"
                                                        class="form-control disabled-input"
                                                        id="basicpill-firstname-input"
                                                        placeholder="Masukkan No. Telepon">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-address-input"
                                                        class="form-label">Alamat</label>
                                                    <textarea name="alamat" id="basicpill-address-input" class="form-control" rows="2"
                                                        placeholder="Masukkan Alamat anda"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label for="basicpill-biografi-input" class="form-label">Biografi
                                                        (opsional)</label>
                                                    <textarea name="biografi" id="basicpill-biografi-input" class="form-control" rows="4"
                                                        placeholder="Ceritakan tentang diri anda"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary" onclick="nextStep()">Next <i
                                                class="bx bx-chevron-right ms-1"></i></button>
                                    </form>
                                </div>
                            </div>

                            {{-- =============================================================================================================== --}}
                            <!-- tab pane -->
                            <div class="tab-pane" id="company-document">
                                <div>
                                    <div class="text-center mb-4">
                                        <h5>Bank Detail</h5>
                                        <p class="card-title-desc">Fill all information below</p>
                                    </div>
                                    <div class="container-sm" style="max-width: 600px;">
                                        <form id="bankform">
                                            @csrf
                                            <div class="mt-4 mt-lg-0">
                                                <div class="row mb-4">
                                                    <label for="horizontal-firstname-input"
                                                        class="col-sm-3 col-form-label">Atas Nama</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" name="atasnama"
                                                            id="horizontal-firstname-input" placeholder="Enter Name">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="horizontal-email-input"
                                                        class="col-sm-3 col-form-label">Jenis Bank / Wallet</label>
                                                    <div class="col-sm-9">
                                                        <input name="bank" type="text" class="form-control"
                                                            id="horizontal-email-input"
                                                            placeholder="Enter Your Wallet">
                                                    </div>
                                                </div>
                                                <div class="row mb-4">
                                                    <label for="horizontal-email-input"
                                                        class="col-sm-3 col-form-label">No. Rekening / No.
                                                        Telepon</label>
                                                    <div class="col-sm-9">
                                                        <input name="rekening" type="text" class="form-control"
                                                            id="horizontal-email-input" placeholder="Enter Number">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <ul class="pager wizard twitter-bs-wizard-pager-link">
                                            {{-- <li class="previous"><a href="javascript: void(0);"
                                                    class="btn btn-primary"><i class="bx bx-chevron-left me-1"></i>
                                                    Previous</a></li> --}}
                                        </ul>
                                        <button type="button" class="btn btn-primary" onclick="nextStep1()">Next <i
                                                class="bx bx-chevron-right ms-1"></i></button>
                                    </div>
                                </div>
                            </div>

                            {{-- =============================================================================================================== --}}
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
                    <a href="{{ route('home') }}" type="button" class="btn btn-primary w-md"
                        data-bs-dismiss="modal">Save
                        changes</a>
                </div>
            </div>
            <!-- end modal -->
            <!-- END layout-wrapper -->

            <script>
                async function nextStep() {
                    // Ambil form data
                    var formData = new FormData(document.getElementById('profileForm'));

                    try {

                        // Kirim data menggunakan AJAX
                        await fetch('{{ route('profile.create', Auth::user()->id) }}', {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: formData
                        }).then(response => {
                            if (response.ok) {
                                // Beralih ke bagian berikutnya
                                document.getElementById('seller-details').style.display = 'none';
                                document.getElementById('company-document').style.display = 'block';
                            } else {
                                // Tangani kesalahan jika ada
                                return response.json().then(data => {
                                    alert('Error: ' + data.message);
                                });
                            }
                        }).catch(error => {
                            for (const key in formData.keys()) {
                                console.log(key)
                            }
                            let filled = false;

                            formData.keys().toArray().forEach(element => {
                                filled = formData.get(element) == ''
                            });
                            console.log(filled)
                            if (filled) {
                                throw "Isi Semua inputan";
                            }
                        });
                    } catch (error) {
                        Toastify({
                            text: error,
                            duration: 2000,
                            newWindow: true,
                            close: true,
                            gravity: "top", // `top` or `bottom`
                            position: "right", // `left`, `center` or `right`
                            stopOnFocus: true, // Prevents dismissing of toast on hover
                            style: {
                                background: "#fd625e",
                                fontSize: "16px",
                            },
                            onClick: function() {} // Callback after click
                        }).showToast();
                    }
                }

                function nextStep1() {
                    // Ambil form data
                    var formData = new FormData(document.getElementById('bankform'));

                    // Kirim data menggunakan AJAX
                    fetch('{{ route('bank.create', Auth::user()->id) }}', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: formData
                    }).then(response => {
                        if (response.ok) {
                            // Beralih ke bagian berikutnya
                            document.getElementById('company-document').style.display = 'none';
                            document.getElementById('bank-detail').style.display = 'block';
                        } else {
                            // Tangani kesalahan jika ada
                            return response.json().then(data => {
                                alert('Error: ' + data.message);
                            });
                        }
                    }).catch(error => {
                        console.error('Error:', error);
                    });
                }
            </script>



</x-layouts-dashboard>
