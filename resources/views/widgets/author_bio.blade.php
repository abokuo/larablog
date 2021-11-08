<div class="blog-author d-flex align-items-center">
    <img src="{{ Voyager::image($author_bio->avatar) }}" class="rounded-circle float-left" alt="作者照片">
    <div>
        <h4>{{ $author_bio->user->name }}</h4>
        <div class="social-links">
            @if($author_bio->email != '')
            <a href="mailto:{{ $author_bio->email }}" target="_blank"><i class="bi bi-envelope"></i></a>
            @endif
            @if($author_bio->facebook != '')
            <a href="{{ $author_bio->facebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
            @endif
            @if($author_bio->instagram != '')
            <a href="{{ $author_bio->instagram }}" target="_blank"><i class="biu bi-instagram"></i></a>
            @endif
            @if($author_bio->line != '')
            <a href="{{ $author_bio->line }}" target="_blank"><i class="bi bi-line"></i></a>
            @endif
            @if($author_bio->twitter != '')
            <a href="{{ $author_bio->twitter }}" target="_blank"><i class="bi bi-twitter"></i></a>
            @endif
            @if($author_bio->linkedin != '')
            <a href="{{ $author_bio->linkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
            @endif
            @if($author_bio->github != '')
            <a href="{{ $author_bio->github }}" target="_blank"><i class="bi bi-github"></i></a>
            @endif
        </div>
        {!! $author_bio->profile !!}
    </div>
</div>
