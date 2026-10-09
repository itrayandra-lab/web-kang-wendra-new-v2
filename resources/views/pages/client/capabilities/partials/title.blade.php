<{{ $tag ?? 'h2' }} class="cap-title" @isset($id) id="{{ $id }}" @endisset>
    @foreach ($lines as $i => $line)
        <span class="{{ $i === ($accent ?? 1) ? 'cap-accent' : '' }}">{{ $line }}</span>
    @endforeach
</{{ $tag ?? 'h2' }}>
