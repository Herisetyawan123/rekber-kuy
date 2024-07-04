<x-dashboard-layouts>

    @if (session('success'))
    <div class="alert alert-success alert-border-left alert-dismissible fade show" role="alert">
        <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Success</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger alert-border-left alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-3 align-middle"></i><strong>Error</strong> {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Rekening List</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Rekening</a></li>
                        <li class="breadcrumb-item active">Rekening List</li>
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
                                <button type="button" class="btn btn-light waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#addModal"><i
                                        class="bx bx-plus me-1" ></i> Add Rekening</button>
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
                                    <th style="width: 120px;">ID</th>
                                    <th>Nama</th>
                                    <th>Jenis Bank</th>
                                    <th>No Rekening</th>
                                    <th>User</th>
                                    <th style="width: 150px;">Download Pdf</th>
                                    <th style="width: 90px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($getRekening as $item)
                                    <tr>
                                        <td>
                                            <div class="form-check font-size-16">
                                                <input type="checkbox" class="form-check-input">
                                                <label class="form-check-label"></label>
                                            </div>
                                        </td>
                                        <td><a href="javascript:void(0);" class="text-body fw-medium">{{$loop->iteration}}</a></td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->jenis}}</td>
                                        <td>{{$item->no_rekening}}</td>
                                        <td>
                                            <div class="badge badge-soft-success font-size-12">{{$item->user->name}}</div>
                                        </td>
                                        <td>
                                            <div>
                                                <button type="button"
                                                    class="btn btn-soft-light btn-sm w-xs waves-effect btn-label waves-light"><i
                                                        class="bx bx-download label-icon"></i> Pdf</button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="dropdown d-flex gap-2">
                                                <button type="button" class="editButton btn btn-soft-warning waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#editModal" data-id="{{$item->id}}"><i class="bx bx-edit font-size-16 align-middle"></i></button>
                                                <button type="button" class="detailButton btn btn-soft-info waves-effect waves-light" data-bs-toggle="modal" data-bs-target="#detailModal" data-id="{{$item->id}}"><i class="bx bx-show-alt font-size-16 align-middle"></i></button>
                                                <form action="{{route('rekening.destroy', $item->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-soft-danger waves-effect waves-light"><i class="bx bx-trash font-size-16 align-middle"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach

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
    {{-- add modal --}}
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Rekening</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="rekeningForm" action="{{route('rekening.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="recipient-name" required>
                            @error('name')
                                <p class="text-danger">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jenis Bank</label>
                            <input type="text" name="jenis" class="form-control" id="recipient-name" required>
                            @error('jenis')
                                <p class="text-danger">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">No Rekening</label>
                            <input type="text" name="no_rekening" class="form-control" id="recipient-name" required>
                            @error('no_rekening')
                                <p class="text-danger">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama User</label>
                            <select class="form-select" name="user_id" required>
                                @foreach ($getUser as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <p class="text-danger">
                                    {{$message}}
                                </p>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end add modal --}}

    {{-- detail modal --}}
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Rekening</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="rekeningForm">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="name" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Jenis Bank</label>
                            <input type="text" name="jenis" class="form-control" id="jenis" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">No Rekening</label>
                            <input type="text" name="no_rekening" class="form-control" id="no_rekening" required readonly>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">User</label>
                            <input type="text" name="user_id" class="form-control" id="user_id" required readonly>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end detail modal --}}

    {{-- edit modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Rekening</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editRekeningForm">
                        <input type="hidden" name="edit_id" id="edit_id">
                        <div class="mb-3">
                            <label for="name" class="col-form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="edit_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="jenis" class="col-form-label">Jenis Bank</label>
                            <input type="text" name="jenis" class="form-control" id="edit_jenis" required>
                        </div>
                        <div class="mb-3">
                            <label for="no_rekening" class="col-form-label">No Rekening</label>
                            <input type="text" name="no_rekening" class="form-control" id="edit_no_rekening" required>
                        </div>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nama User</label>
                            <select class="form-select" name="user_id" id="edit_user_id" required>
                                @foreach ($getUser as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end edit modal --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        document.querySelectorAll('tr[data-url]').forEach(row => {
            row.addEventListener('click', () => {
                window.location.href = row.getAttribute('data-url');
            });
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.detailButton').click(function() {
                var itemId = $(this).data('id');
                $.ajax({
                    url: '/rekening/' + itemId,
                    type: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#name').val(response.name);
                        $('#jenis').val(response.jenis);
                        $('#no_rekening').val(response.no_rekening);
                        $('#user_id').val(response.user_name);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#editModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);
                var id = button.data('id');
                console.log(id);

                var form = document.getElementById('editRekeningForm');
                form.action = "{{ route('rekening.update', ':id') }}".replace(':id', id);
                form.innerHTML += '@method('put')'
                $.ajax({
                    url: '/rekening/' + id,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);
                        $('#edit_id').val(id);
                        $('#edit_name').val(response.name);
                        $('#edit_jenis').val(response.jenis);
                        $('#edit_no_rekening').val(response.no_rekening);
                        $('#edit_user_id').val(response.user_id);
                    }
                });
            });

            $('#editRekeningForm').on('submit', function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                var id = $('#edit_id').val();
                $.ajax({
                    url: "{{ route('rekening.update', ':id') }}".replace(':id', id),
                    method: 'PUT',
                    data: formData,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        $('#editModal').modal('hide');
                        location.reload()
                    }
                });
            });
        });
    </script>

</x-dashboard-layouts>
