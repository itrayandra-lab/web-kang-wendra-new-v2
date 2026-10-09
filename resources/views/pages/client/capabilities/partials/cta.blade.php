{{-- Closing strip under each block: tagline lines · headline or pillar icons · aside · button --}}
<div class="cap-cta">
    <p class="cap-cta-lines">
        @foreach ($cta['lines'] as $line)
            <span>{{ $line }}</span>
        @endforeach
    </p>

    @if (!empty($cta['headline']))
        <p class="cap-cta-headline">{{ $cta['headline'] }}</p>
    @elseif (!empty($cta['pillars']))
        <ul class="cap-cta-pillars">
            @foreach ($cta['pillars'] as [$pIcon, $pLabel])
                <li>
                    @include('pages.client.capabilities.partials.icon', ['name' => $pIcon, 'class' => 'cap-icon cap-cta-pillar-icon'])
                    <span>{{ $pLabel }}</span>
                </li>
            @endforeach
        </ul>
    @endif

    @if (!empty($cta['aside']))
        <p class="cap-cta-aside">
            @foreach ($cta['aside'] as $line)
                <span>{{ $line }}</span>
            @endforeach
        </p>
    @endif

    <a href="{{ !empty($cta['toFormats']) ? '#cap-' . $cat['id'] . '-formats' : $ctaHref }}" class="cap-btn">
        <span>{{ $cta['button'] }}</span>
        @include('pages.client.capabilities.partials.icon', ['name' => !empty($cta['toFormats']) ? 'arrow-down' : 'arrow', 'class' => 'cap-btn-icon', 'stroke' => 2])
    </a>
</div>
