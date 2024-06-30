@props(['position' => '', 'message' => ''])

@if ($message != '')
    @php
        $date = new DateTime($message->create_at);
        $time = $date->format('H:i');
    @endphp
    <li class="{{ $position }}">
        <div class="conversation-list">
            <div class="ctext-wrap">
                <div class="ctext-wrap-content">
                    <h5 class="conversation-name">
                        <a href="#" class="user-name">{{ $message->sender->name }}</a>
                        <span class="time">{{ $time }}</span>
                    </h5>
                    <p class="mb-0">{{ $message->message }}</p>
                </div>
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Copy</a>
                        <a class="dropdown-item" href="#">Save</a>
                        <a class="dropdown-item" href="#">Forward</a>
                        <a class="dropdown-item" href="#">Delete</a>
                    </div>
                </div>
            </div>
        </div>

    </li>
@endif
