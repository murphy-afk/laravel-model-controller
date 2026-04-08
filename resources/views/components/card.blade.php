<div class="card shadow-sm border-0" style="max-width: 22rem;">
    @php
        $vote = (float) trim($vote->toHtml());
    @endphp
    <div class="card-body">
        <h5 class="card-title fw-bold text-primary mb-1">{{ $title }}</h5>
        <h6 class="card-subtitle mb-3 text-muted">{{ $originalTitle }}</h6>

        <ul class="list-unstyled mb-0">
            <li class="mb-1">
                <span class="fw-semibold">Nationality:</span> {{ $nationality }}
            </li>
            <li class="mb-1">
                <span class="fw-semibold">Release date:</span> {{ $releaseDate }}
            </li>
            @for ($i = 0; $i <= 10; $i++)
                @if ($i < floor($vote))
                    <i class="bi bi-star-fill star"></i>
                @elseif ($i < ceil($vote))
                    <i class="bi bi-star-half star"></i>
                @else
                    <i class="bi bi-star star"></i>
                @endif
            @endfor
        </ul>
    </div>
</div>