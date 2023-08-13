<!-- Global Announcement -->
@if (isset($global_announcement))
    <div class="header__enouncement">
        <div class="container">
            <div class="header__enouncement-inner">
                <p>
                    {!! $global_announcement->parsed_body !!}
                </p>

                @if ($global_announcement->action_url)
                    <a href="{{ $global_announcement->action_url }}">
                        {{ $global_announcement->action_text }}
                    </a>
                @endif
            </div>
        </div>
    </div>
@endif