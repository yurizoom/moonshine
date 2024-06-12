@props([
    'title' => '',
    'items' => [],
    'album' => false
])
<div class=" carousel @if($album) album @endif " x-data='carousel( @json($items) )'>
    <template x-for="(slide, index) in slides">
        <carousel-slide class="carousel-slide" :class="(activeSlide === index) ? 'active' : ''">
            <img :src="slide" alt="{{ $title }}">
        </carousel-slide>
    </template>
    <div class="carousel-navigation">
        <a @click.prevent="previous" href="#" class="carousel-navigation-next">
            <x-moonshine::icon icon="heroicons.chevron-left" size="7"/>
        </a>
        <a @click.prevent="next" href="#" class="carousel-navigation-prev">
            <x-moonshine::icon icon="heroicons.chevron-right" size="7"/>
        </a>
    </div>
    <div class="carousel-slide-count">
        <span x-text="activeSlide+1"></span> / {{count($items)}}
    </div>
</div>
