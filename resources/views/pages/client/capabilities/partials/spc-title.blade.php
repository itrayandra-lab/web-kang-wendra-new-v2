{{-- Serif display title: lines from index $accent onward render in salmon --}}
<{{ $tag ?? 'h2' }} class="spc-title" @isset($id) id="{{ $id }}" @endisset>
    @foreach ($lines as $i => $line)
        <span class="{{ $i >= ($accent ?? 1) ? 'spc-accent' : '' }}">{{ $line }}</span>
    @endforeach
</{{ $tag ?? 'h2' }}>
