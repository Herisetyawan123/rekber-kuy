<x-layouts-dashboard>

    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Chat</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                        <li class="breadcrumb-item active">Chat</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="d-lg-flex">
        <div class="w-100 user-chat mt-4 mt-sm-0 ms-lg-1">
            <div class="card">
                <div class="p-3 px-lg-4 border-bottom">
                    <div class="row">
                        <div class="col-xl-4 col-7">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 avatar-sm me-3 d-sm-block d-none">
                                    <img src="{{ asset(isset($rooms->seller->profile->foto) ? $rooms->seller->profile->foto : 'assets/images/users/avatar-2.jpg') }}"
                                        alt="" class="img-fluid d-block rounded-circle">
                                </div>
                                <div class="flex-grow-1">
                                    <h5 class="font-size-14 mb-1 text-truncate"><a href="#"
                                            class="text-dark">{{ $rooms->title }}</a></h5>
                                    <p class="text-muted text-truncate mb-0">{{ $rooms->seller->name }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-8 col-5" style="display: flex; justify-content: end;">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-bs-whatever="@mdo">Create Transaction</button>
                        </div>
                    </div>
                </div>

                <div class="chat-conversation p-3 px-2" data-simplebar>
                    <ul class="list-unstyled mb-0" id="chat-content-scroll-to-bottom">
                        <li class="chat-day-title">
                            <span class="title">Today</span>
                        </li>
                        @foreach ($rooms->messages as $message)
                            <x-bubble-chat :position="Auth::user()->id == $message->user_id ? 'right' : ''" :message="$message" />
                        @endforeach
                    </ul>
                </div>

                <div class="p-3 border-top">
                    <form action="{{ route('chat.store') }}" class="row" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $rooms->id }}" name="chat_id">
                        <div class="col">
                            <div class="position-relative">
                                <input name="message" type="text" class="form-control border bg-light-subtle"
                                    placeholder="Enter Message...">
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary chat-send w-md waves-effect waves-light"><span
                                    class="d-none d-sm-inline-block me-2">Send</span> <i
                                    class="mdi mdi-send float-end"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end user chat -->
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Recipient:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Send message</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function autoScroll() {
            var scrollable = document.getElementById('chat-content-scroll-to-bottom');
            scrollable.scrollTop = scrollable.scrollHeight;
        }

        document.addEventListener('DOMContentLoaded', autoScroll)

        // Panggil fungsi autoScroll setiap kali chat diperbarui (misalnya setelah form disubmit)
        const chatForm = document.querySelector('form[action="{{ route('chat.store') }}"]');
        chatForm.addEventListener('submit', function() {
            setTimeout(autoScroll, 100); // Tambahkan sedikit delay untuk memastikan chat ditambahkan
        });
    </script>
</x-layouts-dashboard>
