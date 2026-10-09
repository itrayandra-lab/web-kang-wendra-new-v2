{{-- "Developed through / Backed by … expertise" bar --}}
<div class="spc-experts">
    <p class="spc-experts-label">{{ $experts['label'] }}</p>
    <ul class="spc-experts-list {{ count($experts['items']) >= 6 ? 'spc-experts-list--6' : '' }}">
        @foreach ($experts['items'] as [$eIcon, $eTitle, $eDesc])
            <li>
                <span class="spc-bubble spc-bubble--sm">@include('pages.client.capabilities.partials.icon', ['name' => $eIcon])</span>
                <div>
                    <strong>{{ $eTitle }}</strong>
                    <span>{{ $eDesc }}</span>
                </div>
            </li>
        @endforeach
    </ul>
    @if (!empty($closing))
        <p class="spc-experts-closing">
            @foreach ($closing as $line)
                <span>{{ $line }}</span>
            @endforeach
        </p>
    @endif
</div>
