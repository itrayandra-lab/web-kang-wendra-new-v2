{{-- "Start with the need" block: copy + portrait, then the needs grid / photo cards --}}
<div class="cap-block cap-need">
    <div class="cap-wrap">
        <div class="cap-split {{ ($block['photoSide'] ?? 'right') === 'left' ? 'cap-split--rev' : '' }}">
            <div class="cap-split-text">
                <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>{{ $block['eyebrow'] }}</div>
                @include('pages.client.capabilities.partials.title', ['lines' => $block['title'], 'accent' => $block['accent'] ?? 1, 'id' => 'cap-' . $cat['id'] . '-title'])
                <p class="cap-kicker">{{ $block['kicker'] }}</p>
                @foreach ($block['body'] as $para)
                    <p class="cap-body">{{ $para }}</p>
                @endforeach
            </div>
            <figure class="cap-split-media cap-media--portrait">
                <img src="{{ $img($block['photo']) }}" alt="{{ $block['photoAlt'] }}" loading="lazy" decoding="async">
            </figure>
        </div>

        @if (($block['needsStyle'] ?? 'icons') === 'photoCards')
            <ul class="cap-photo-cards {{ count($block['needs']) > 6 ? 'cap-photo-cards--8' : '' }}">
                @foreach ($block['needs'] as $need)
                    @php [$nImg, $nIcon, $nTitle, $nSub, $nDesc] = $need; $nTag = $need[5] ?? null; @endphp
                    <li class="cap-photo-card">
                        <div class="cap-photo-card-img">
                            <img src="{{ $img($nImg) }}" alt="" loading="lazy" decoding="async">
                            <span class="cap-photo-card-badge">@include('pages.client.capabilities.partials.icon', ['name' => $nIcon])</span>
                        </div>
                        <div class="cap-photo-card-body">
                            <h3 class="cap-photo-card-title">{{ $nTitle }}</h3>
                            <p class="cap-photo-card-sub">{{ $nSub }}</p>
                            <p class="cap-photo-card-desc">{{ $nDesc }}</p>
                        </div>
                        @if ($nTag)
                            <p class="cap-card-tag">{{ $nTag }}</p>
                        @endif
                    </li>
                @endforeach
            </ul>
        @else
            <div class="cap-needs">
                <div class="cap-needs-head">
                    <h3 class="cap-rule-label"><span>{{ $block['needsLabel'] }}</span></h3>
                    @if (!empty($block['needsSub']))
                        <p class="cap-needs-sub">{{ $block['needsSub'] }}</p>
                    @endif
                </div>
                <ul class="cap-needs-grid">
                    @foreach ($block['needs'] as [$nIcon, $nTitle, $nDesc])
                        <li class="cap-need-item">
                            <span class="cap-need-bubble">@include('pages.client.capabilities.partials.icon', ['name' => $nIcon])</span>
                            <h4 class="cap-need-title">{{ $nTitle }}</h4>
                            <p class="cap-need-desc">{{ $nDesc }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (!empty($block['extra']))
            @php $extra = $block['extra']; @endphp
            <div class="cap-extra cap-extra--{{ $extra['type'] }}">
                <div class="cap-extra-head">
                    <h3 class="cap-panel-title">{{ $extra['label'] }}</h3>
                    <p class="cap-panel-sub">{{ $extra['sub'] }}</p>
                </div>
                <ul class="cap-extra-grid">
                    @foreach ($extra['items'] as $item)
                        <li>
                            <img src="{{ $img($item[0]) }}" alt="{{ $item[1] }}" loading="lazy" decoding="async">
                            <span class="cap-extra-name">{{ $item[1] }}</span>
                            @if (!empty($item[2]))
                                <span class="cap-extra-desc">{{ $item[2] }}</span>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('pages.client.capabilities.partials.cta', ['cta' => $block['cta']])
    </div>
</div>
