<x-layouts-dashboard>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Profile</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-xl-9 col-lg-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm order-2 order-sm-1">
                            <div class="d-flex align-items-start mt-3 mt-sm-0">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xl me-3">
                                        <label for="fileUpload" style="width: 90px; height: 90px">
                                            <img id="avatarImage" class="img-fluid rounded-circle d-block"
                                                src="{{ asset(Auth::user()->profile->foto ? Auth::user()->profile->foto : 'assets/images/users/avatar-2.jpg') }}"
                                                alt="Avatar"
                                                style="width: 100%; height: 100%; object-fit: cover; object-position: center" />
                                        </label>
                                    <input type="file" id="fileUpload" style="display:none;" accept="image/*">


                                        {{-- <img id="avatarImage" class="img-fluid rounded-circle d-block"
                                            src="{{ asset(Auth::user()->foto ? Auth::user()->foto : 'assets/images/users/avatar-2.jpg') }}"
                                            alt="Avatar"
                                            style="width: 100%; height: 100%; object-fit: cover; object-position: center" /> --}}
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <h5 class="font-size-19 mb-1">{{ $user->name }}</h5>
                                        <p class="text-muted font-size-13">{{ $user->email }}</p>

                                    </div>
                                    <div
                                        class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                        <div>
                                            <i
                                                class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{ $user->profile->gender }}
                                        </div>
                                        <div><i
                                                class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{ $user->profile->pekerjaan }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-auto order-1 order-sm-2">
                            <div class="d-flex align-items-start justify-content-end gap-2">
                                <div>
                                    <button type="button" class="btn btn-soft-light"><i class="me-1"></i>
                                        Message</button>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <ul class="nav nav-tabs-custom card-header-tabs border-top mt-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link px-3 active" data-bs-toggle="tab" href="#overview"
                                role="tab">Overview</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link px-3" data-bs-toggle="tab" href="#about" role="tab">About</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link px-3" data-bs-toggle="tab" href="#post" role="tab">Post</a>
                        </li> --}}
                    </ul>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

            <div class="tab-content">
                <div class="tab-pane active" id="overview" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">About</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div>
                                                <h5 class="font-size-15">Bio</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl">
                                            <div class="text-muted">
                                                <p class="mb-2">{{ $user->profile->biografi }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="py-3">
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div>
                                                <h5 class="font-size-15">Experience :</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl">
                                            <div class="text-muted">
                                                <p>If several languages coalesce, the grammar of the resulting language
                                                    is more simple and regular than that of the individual languages.
                                                    The new common language will be more simple and regular than the
                                                    existing European languages. It will be as simple as Occidental; in
                                                    fact, it will be Occidental. To an English person, it will seem like
                                                    simplified English, as a skeptical Cambridge friend of mine told me
                                                    what Occidental is. The European languages are members of the same
                                                    family. Their separate existence is a myth. For science, music,
                                                    sport, etc</p>

                                                <ul class="list-unstyled mb-0">
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Donec
                                                        vitae sapien ut libero venenatis faucibus</li>
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Quisque
                                                        rutrum aenean imperdiet</li>
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Integer
                                                        ante a consectetuer eget</li>
                                                    <li class="py-1"><i
                                                            class="mdi mdi-circle-medium me-1 text-success align-middle"></i>Phasellus
                                                        nec sem in justo pellentesque</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->

                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">Post</h5>
                                </div>
                                <div class="flex-shrink-0">
                                    <a href="#post">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="row">
                                    <div class="col-xl-4">
                                        <div class="card p-1 mb-xl-0">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 text-truncate"><a href="#"
                                                                class="text-body">Beautiful Day with Friends</a></h5>
                                                        <p class="font-size-13 text-muted mb-0">10 Apr, 2020</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="dropdown">
                                                            <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something
                                                                        else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="position-relative">
                                                <img src="assets/images/small/img-3.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>

                                            <div class="p-3">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i
                                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                            Project
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i
                                                                class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                            12 Comments
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="text-muted">Neque porro quisquam est, qui dolorem ipsum quia
                                                    dolor sit amet</p>

                                                <div>
                                                    <a href="javascript: void(0);" class="text-primary">Read more <i
                                                            class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card p-1 mb-xl-0">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 text-truncate"><a href="#"
                                                                class="text-body">Drawing a sketch</a></h5>
                                                        <p class="font-size-13 text-muted mb-0">24 Mar, 2020</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="dropdown">
                                                            <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something
                                                                        else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="position-relative">
                                                <img src="assets/images/small/img-1.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>

                                            <div class="p-3">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i
                                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                            Development
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i
                                                                class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                            08 Comments
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="text-muted">At vero eos et accusamus et iusto odio
                                                    dignissimos ducimus quos</p>

                                                <div>
                                                    <a href="javascript: void(0);" class="text-primary">Read more <i
                                                            class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->

                                    <div class="col-xl-4">
                                        <div class="card p-1 mb-sm-0">
                                            <div class="p-3">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-grow-1 overflow-hidden">
                                                        <h5 class="font-size-15 text-truncate"><a href="#"
                                                                class="text-body">Project discussion with team</a></h5>
                                                        <p class="font-size-13 text-muted mb-0">20 Mar, 2020</p>
                                                    </div>
                                                    <div class="flex-shrink-0 ms-2">
                                                        <div class="dropdown">
                                                            <a class="btn btn-link text-muted font-size-16 p-1 py-0 dropdown-toggle shadow-none"
                                                                href="#" role="button"
                                                                data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="bx bx-dots-horizontal-rounded"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-end">
                                                                <li><a class="dropdown-item" href="#">Action</a>
                                                                </li>
                                                                <li><a class="dropdown-item" href="#">Another
                                                                        action</a></li>
                                                                <li><a class="dropdown-item" href="#">Something
                                                                        else here</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="position-relative">
                                                <img src="assets/images/small/img-5.jpg" alt=""
                                                    class="img-thumbnail">
                                            </div>

                                            <div class="p-3">
                                                <ul class="list-inline">
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i
                                                                class="bx bx-purchase-tag-alt align-middle text-muted me-1"></i>
                                                            Project
                                                        </a>
                                                    </li>
                                                    <li class="list-inline-item me-3">
                                                        <a href="javascript: void(0);" class="text-muted">
                                                            <i
                                                                class="bx bx-comment-dots align-middle text-muted me-1"></i>
                                                            08 Comments
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p class="text-muted">Itaque earum rerum hic tenetur a sapiente
                                                    delectus ut aut</p>

                                                <div>
                                                    <a href="javascript: void(0);" class="text-primary">Read more <i
                                                            class="mdi mdi-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end card -->
                                    </div>
                                    <!-- end col -->
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end card body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end tab pane -->

                <div class="tab-pane" id="about" role="tabpanel">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Rekening</h5>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="pb-3">
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div>
                                                <h5 class="font-size-15">Atas Nama</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl">
                                            <div class="text-muted">
                                                <p class="mb-2">{{ $user->rekening->name }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div>
                                                <h5 class="font-size-15">Wallet / Bank</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl">
                                            <div class="text-muted">
                                                <p class="mb-2">{{ $user->rekening->jenis }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-2">
                                            <div>
                                                <h5 class="font-size-15">Nomor Rekening / Wallet</h5>
                                            </div>
                                        </div>
                                        <div class="col-xl">
                                            <div class="text-muted">
                                                <p class="mb-2">{{ $user->rekening->no_rekening }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end main content-->
                        </div>
                        <!-- END layout-wrapper -->

                    </div>
                    <!-- end card body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end tab pane -->
        </div>
        <!-- end tab content -->
    </div>
    <!-- end col -->


    <script>
        // Ambil elemen gambar dan input file
        const avatarImage = document.getElementById('avatarImage');
        const fileUpload = document.getElementById('fileUpload');


        // Tambahkan event listener untuk perubahan pada input file
        fileUpload.addEventListener('change', function(event) {
            const file = event.target.files[0]; // Ambil file yang dipilih
            if (file) {
                const formData = new FormData(); // Buat objek FormData
                formData.append('foto', file); // Tambahkan file ke FormData


                const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

                // Tambahkan header X-CSRF-TOKEN ke permintaan
                const headers = new Headers({
                    'X-CSRF-TOKEN': csrfToken
                });
                // Kirim permintaan AJAX
                fetch('{{ route('user.avatar.edit') }}', {
                        method: 'POST',
                        headers: headers, // Sertakan header dengan token CSRF
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Jika unggahan berhasil, set src dari elemen img dengan path baru
                            document.getElementById('avatarImage').src = data.path;
                            location.reload();
                        } else {
                            // Jika unggahan gagal, tampilkan pesan error
                            console.error('Unggahan gagal');
                        }
                    })
                    .catch(error => {
                        console.error('Terjadi kesalahan:', error);
                    });
            }
        });
    </script>


</x-layouts-dashboard>
