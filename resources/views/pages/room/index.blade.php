<x-layouts-dashboard>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Room Penjualan</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Room</a></li>
                        <li class="breadcrumb-item active">Penjualan</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Room List <span class="text-muted fw-normal">({{ count($rooms) }})</span></h5>
            </div>
        </div>

        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link" href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="List"><i class="bx bx-list-ul"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="" data-bs-toggle="tooltip" data-bs-placement="top"
                                title="Grid"><i class="bx bx-grid-alt"></i></a>
                        </li>
                    </ul>
                </div>
                <div>

                    @if (Route::currentRouteName() == 'room-seller.index')
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addRoom"
                            data-bs-whatever="@mdo">
                            <i class="bx bx-plus me-1"></i>Add Room
                        </button>
                    @elseif (Route::currentRouteName() == 'room-buyer.index')
                        <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#joinRoom"
                            data-bs-whatever="@mdo">
                            <i class="bx bx-plus me-1"></i>Join Room
                        </button>
                    @endif
                </div>

                <div class="dropdown">
                    <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle" href="#"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

    <div class="row">
        @foreach ($rooms as $room)
            <div class="col-xl-3 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div class="dropdown text-end">
                            <a class="text-muted dropdown-toggle font-size-16" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end">
                                <form action="{{ route('room-seller.destroy', $room->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item">Hapus</button>
                                </form>
                                {{-- <a class="dropdown-item" href="#">Edit</a>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="{{ route('room-seller.destroy', $room->id) }}">Remove</a> --}}
                            </div>
                        </div>

                        <div class="mx-auto mb-4">
                            <img src="{{ asset('assets/images/users/avatar-2.jpg') }}" alt=""
                                class="avatar-xl rounded-circle img-thumbnail">
                        </div>
                        <h5 class="font-size-16 mb-1"><a href="#" class="text-body">{{ $room->title }}</a></h5>
                        <p class="text-muted mb-2">{{ $room->seller->name }}</p>
                        <span class="badge bg-success">Success</span>

                    </div>

                    <div class="btn-group" role="group">
                        <a href="{{ route('profile') }}" class="btn btn-outline-light text-truncate"><i
                                class="uil uil-user me-1"></i> Profile</a>
                        <a href="javascript: void(0);" class="btn btn-outline-light text-truncate copy-code"
                            data-id="{{ $room->id }}">
                            <i class="uil uil-user me-1"></i> Share
                        </a>

                        @if (Route::currentRouteName() == 'room-seller.index')
                            <a href="{{ route('room-seller.show', $room->code) }}" type="button"
                                class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i>
                                Message</a>
                        @elseif (Route::currentRouteName() == 'room-buyer.index')
                            <a href="{{ route('room-buyer.show', $room->code) }}" type="button"
                                class="btn btn-outline-light text-truncate"><i class="uil uil-envelope-alt me-1"></i>
                                Message</a>
                        @endif

                    </div>
                </div>
                <!-- end card -->
            </div>
        @endforeach
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row g-0 align-items-center mb-4">
        <div class="col-sm-6">
            <div>
                <p class="mb-sm-0">
                    Showing {{ $rooms->firstItem() }} to {{ $rooms->lastItem() }} of {{ $rooms->total() }} entries
                </p>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="float-sm-end">
                {{ $rooms->links('components.pagination.custom') }}
                {{-- <ul class="pagination mb-sm-0">
                    <li class="page-item disabled">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">1</a>
                    </li>
                    <li class="page-item active">
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">4</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link">5</a>
                    </li>
                    <li class="page-item">
                        <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </div>
    <!-- end row -->

    {{-- Modallll --}}
    <div class="modal fade" id="addRoom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('room-seller.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Room</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Title</label>
                            <input name="title" type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Modallll --}}
    <div class="modal fade" id="joinRoom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form class="modal-content" action="{{ route('room-buyer.store') }}" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Join Room</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Code Room</label>
                            <input name="code" type="text" class="form-control" id="recipient-name">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Join</button>
                </div>
            </form>
        </div>
    </div>

    @session('success')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Toastify({
                    text: "{{ session('success') }}",
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "center", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#4B70F5",
                        fontSize: "16px"
                    },
                    onClick: function() {} // Callback after click
                }).showToast();
            })
        </script>
    @endsession
    @session('error')
        <script>
            document.addEventListener('DOMContentLoaded', (event) => {
                Toastify({
                    text: "{{ session('error') }}",
                    duration: 3000,
                    newWindow: true,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "center", // `left`, `center` or `right`
                    stopOnFocus: true, // Prevents dismissing of toast on hover
                    style: {
                        background: "#fd625e",
                        fontSize: "16px",
                    },
                    onClick: function() {} // Callback after click
                }).showToast();
            })
        </script>
    @endsession

    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('.copy-code').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    let chatId = this.getAttribute('data-id');

                    fetch(`/get-code/${chatId}`)
                        .then(response => response.json())
                        .then(data => {
                            let code = data.code;

                            // Create a temporary textarea to copy the code
                            let textarea = document.createElement('textarea');
                            textarea.value = code;
                            document.body.appendChild(textarea);
                            textarea.select();
                            document.execCommand('copy');
                            document.body.removeChild(textarea);

                            // alert('Code copied to clipboard: ' + code);
                            Toastify({
                                text: "Copy Room Code : " + code,
                                duration: 3000,
                                newWindow: true,
                                close: true,
                                gravity: "top", // `top` or `bottom`
                                position: "center", // `left`, `center` or `right`
                                stopOnFocus: true, // Prevents dismissing of toast on hover
                                style: {
                                    background: "#4B70F5",
                                    fontSize: "16px"
                                },
                                onClick: function() {} // Callback after click
                            }).showToast();
                        })
                        .catch(error => console.error('Error:', error));
                });
            });
        });
    </script>

</x-layouts-dashboard>
