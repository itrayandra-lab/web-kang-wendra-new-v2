{{-- "From need to product" block: copy + product photo, then panels or image cards --}}
<div class="cap-block cap-format" id="cap-{{ $cat['id'] }}-formats">
    <div class="cap-wrap">
        <div class="cap-split cap-split--product">
            <div class="cap-split-text">
                <div class="cap-eyebrow"><span class="cap-eyebrow-dash"></span>{{ $block['eyebrow'] }}</div>
                @include('pages.client.capabilities.partials.title', ['lines' => $block['title'], 'accent' => $block['accent'] ?? 1, 'id' => $cat['need'] ? null : 'cap-' . $cat['id'] . '-title'])
                <p class="cap-kicker">{{ $block['kicker'] }}</p>
                @foreach ($block['body'] as $para)
                    <p class="cap-body">{{ $para }}</p>
                @endforeach
            </div>
            <figure class="cap-split-media cap-media--product">
                <img src="{{ $img($block['photo']) }}" alt="{{ $block['photoAlt'] }}" loading="lazy" decoding="async">
            </figure>
        </div>

        @if ($block['layout'] === 'panels')
            <div class="cap-panels">
                <div class="cap-panel cap-panel--formats">
                    <h3 class="cap-panel-title">{{ $block['formats']['label'] }}</h3>
                    <p class="cap-panel-sub">{{ $block['formats']['sub'] }}</p>
                    @php $fmtCount = count($block['formats']['items']); @endphp
                    {{-- 2 even rows up to 12 formats (6×2, 5×2), 3 rows beyond that so thumbs stay legible --}}
                    <ul class="cap-fmt-grid" style="--fmt-cols: {{ $fmtCount <= 12 ? (int) ceil($fmtCount / 2) : (int) ceil($fmtCount / 3) }}; --fmt-cols-wide: {{ (int) ceil($fmtCount / 2) }}">
                        @foreach ($block['formats']['items'] as [$fImg, $fLabel])
                            <li>
                                <span class="cap-fmt-thumb"><img src="{{ $img($fImg) }}" alt="{{ $fLabel }}" loading="lazy" decoding="async"></span>
                                <span class="cap-fmt-label">{{ $fLabel }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="cap-panel cap-panel--texture">
                    <h3 class="cap-panel-title">{{ $block['texture']['label'] }}</h3>
                    <p class="cap-panel-sub">{{ $block['texture']['sub'] }}</p>
                    <ul class="cap-tex-grid {{ count($block['texture']['items']) === 4 ? 'cap-tex-grid--4' : '' }}">
                        @foreach ($block['texture']['items'] as $tex)
                            <li>
                                <img src="{{ $img($tex[0]) }}" alt="Tekstur {{ $tex[1] }}" loading="lazy" decoding="async">
                                <span class="cap-tex-label">{{ $tex[1] }}</span>
                                @if (!empty($tex[2]))
                                    <span class="cap-tex-sub">{{ $tex[2] }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <ul class="cap-sliders" aria-label="Contoh profil sensorial">
                        @foreach ($block['texture']['sliders'] as [$sLeft, $sRight, $sPos])
                            <li>
                                <span class="cap-slider-end">{{ $sLeft }}</span>
                                <span class="cap-slider-track"><span class="cap-slider-dot" style="left: {{ $sPos }}%"></span></span>
                                <span class="cap-slider-end cap-slider-end--right">{{ $sRight }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @php $third = $block['third']; @endphp
                <div class="cap-panel cap-panel--{{ $third['type'] }}">
                    <h3 class="cap-panel-title">{{ $third['label'] }}</h3>
                    <p class="cap-panel-sub">{{ $third['sub'] }}</p>
                    @if ($third['type'] === 'photos')
                        <ul class="cap-sup-grid">
                            @foreach ($third['items'] as [$sImg, $sLabel])
                                <li>
                                    <img src="{{ $img($sImg) }}" alt="{{ $sLabel }}" loading="lazy" decoding="async">
                                    <span>{{ $sLabel }}</span>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        <ul class="cap-solutions">
                            @foreach ($third['items'] as [$sIcon, $sTitle, $sDesc])
                                <li>
                                    @include('pages.client.capabilities.partials.icon', ['name' => $sIcon, 'class' => 'cap-icon cap-solution-icon'])
                                    <div>
                                        <h4>{{ $sTitle }}</h4>
                                        <p>{{ $sDesc }}</p>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        @else
            @if (!empty($block['cardsLabel']))
                <h3 class="cap-rule-label cap-rule-label--center"><span>{{ $block['cardsLabel'] }}</span></h3>
            @endif
            <ul class="cap-cards">
                @foreach ($block['cards'] as [$cImg, $cTitle, $cItems, $cTag])
                    <li class="cap-card">
                        <div class="cap-card-img"><img src="{{ $img($cImg) }}" alt="{{ $cTitle }}" loading="lazy" decoding="async"></div>
                        <div class="cap-card-body">
                            <h3 class="cap-card-title">{{ $cTitle }}</h3>
                            <ul class="cap-card-list {{ !empty($block['cardsInline']) ? 'cap-card-list--inline' : '' }}">
                                @foreach ($cItems as $cItem)
                                    <li>{{ $cItem }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <p class="cap-card-tag">{{ $cTag }}</p>
                    </li>
                @endforeach
            </ul>
        @endif

        @if (!empty($block['concentration']))
            @php $conc = $block['concentration']; @endphp
            <div class="cap-conc">
                <div class="cap-conc-head">
                    <h3 class="cap-panel-title">{{ $conc['label'] }}</h3>
                    <p class="cap-panel-sub">{{ $conc['sub'] }}</p>
                </div>
                <ul class="cap-conc-grid">
                    @foreach ($conc['items'] as [$kImg, $kPct, $kName, $kLine1, $kLine2])
                        <li>
                            <img src="{{ $img($kImg) }}" alt="{{ $kName }}" loading="lazy" decoding="async">
                            <div>
                                <strong class="cap-conc-pct">{{ $kPct }}</strong>
                                <span class="cap-conc-name">{{ $kName }}</span>
                                <span class="cap-conc-desc">{{ $kLine1 }}<br>{{ $kLine2 }}</span>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <p class="cap-conc-note">{{ $conc['note'] }}</p>
            </div>
        @endif

        @include('pages.client.capabilities.partials.cta', ['cta' => $block['cta']])
    </div>
</div>
