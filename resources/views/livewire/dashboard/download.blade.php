<div>
    <li>
        <h6>{{ $download->user->name }}</h6>
        <p>melakukan download document <strong>{{ $download->document->name }}</strong></p>
        <p class="text-muted mb-4">
            <i class="mdi mdi-clock-outline"></i>
            {{ $download->created_at->diffForHumans() }}
        </p>
    </li>
</div>
