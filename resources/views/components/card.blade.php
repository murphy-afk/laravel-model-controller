<div class="card shadow-sm border-0" style="max-width: 22rem;">
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
            <li>
                <span class="fw-semibold">Vote:</span>
                <span class="badge bg-success">{{ $vote }}</span>
            </li>
        </ul>
    </div>
</div>