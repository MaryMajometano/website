<figure class="{{ $class ?? '' }}">
    <div>
        <picture class="w-full pointer-events-none">
            <source media="(min-width: 500px)" srcset="{{ $component->get('sizes.large') }}">
            <img class="w-full" src="{{ $component->get('sizes.small') }}" alt="{{ $component->get('alt') }}">
        </picture>
    </div>

    @if($component->has('caption'))
        <figcaption class="text-center">
            {{ $component->get('caption') }}
        </figcaption>
    @endif
</figure>
