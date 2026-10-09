{{-- Handwritten script accent laid over a photo; decorative, so hidden from assistive tech --}}
@if (!empty($lines))
    <p class="spc-script {{ $class ?? '' }}" aria-hidden="true">
        @foreach ($lines as $line)
            <span>{{ $line }}</span>
        @endforeach
    </p>
@endif
