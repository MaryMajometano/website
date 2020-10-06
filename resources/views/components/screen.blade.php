    <div {{ $attributes ?? ''}} style="{{ $content->theme() }}">
        <div class="max-h-full max-w-full flex items-center justify-center">
            @if($component->has('sizes'))
            <picture {{$content->attributes(['screen.item'])}}>
                <source media="(min-width: 500px)" srcset="{{ asset($component->get('sizes.large'), []) }}">
                <img {{$content->attributes(['screen.item'])}} src="{{ asset($component->get('sizes.small'), []) }}" alt="{{ $component->get('alt') }}">
            </picture>
            @elseif($component->has('path'))
                <img {{$content->attributes(['screen.item'])}} src="{{ asset($component->get('path'), []) }}" alt="{{ $component->get('alt') }}">
            @endif
        </div>
    </div>

    @if($component->has('caption'))
        <figcaption class="px-10 font-sans text-center text-sm xl:text-like-sm">
            {{ $component->get('caption') }}
        </figcaption>
    @endif