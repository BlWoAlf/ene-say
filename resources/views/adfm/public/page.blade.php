@extends('adfm::public.layout')
@section('meta-title', $page->title)
@section('content')
<section class="content-section">
    <div class="container">
        <div class="content-section__header">
            <h1 class="h1-header">{{$page->title}}</h1>
        </div>
        <div class="content-section__content">
            @if(isset($page->content))
            <div class="text-block">
                {!! $page->content !!}
            </div>
            @endif
            @if(count($page->files) > 0)
            <div class="food-menu-book menu-page__food-menu-book">
                <div class="row">
                    @foreach($page->files as $file)
                        <div class="col-3">
                            <div class="food-menu-book__page menu-page__food-menu-book__page" alt="{{$file->original_name}}">
                                <img src="{!! $file->url !!}">
                            </div>
                        </div>
                    @endforeach                    
                </div>
            </div>
            <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

                <!-- Background of PhotoSwipe. 
                     It's a separate element as animating opacity is faster than rgba(). -->
                <div class="pswp__bg"></div>
            
                <!-- Slides wrapper with overflow:hidden. -->
                <div class="pswp__scroll-wrap">
            
                    <!-- Container that holds slides. 
                        PhotoSwipe keeps only 3 of them in the DOM to save memory.
                        Don't modify these 3 pswp__item elements, data is added later on. -->
                    <div class="pswp__container">
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                        <div class="pswp__item"></div>
                    </div>
            
                    <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
                    <div class="pswp__ui pswp__ui--hidden">
            
                        <div class="pswp__top-bar">
            
                            <!--  Controls are self-explanatory. Order can be changed. -->
            
                            <div class="pswp__counter"></div>
            
                            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            
                            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            
                            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            
                            <!-- Preloader demo https://codepen.io/dimsemenov/pen/yyBWoR -->
                            <!-- element will get class pswp__preloader--active when preloader is running -->
                            <div class="pswp__preloader">
                                <div class="pswp__preloader__icn">
                                  <div class="pswp__preloader__cut">
                                    <div class="pswp__preloader__donut"></div>
                                  </div>
                                </div>
                            </div>
                        </div>
            
                        <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                            <div class="pswp__share-tooltip"></div> 
                        </div>
            
                        <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
                        </button>
            
                        <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
                        </button>
            
                        <div class="pswp__caption">
                            <div class="pswp__caption__center"></div>
                        </div>
            
                    </div>
            
                </div>
            
            </div>
            @endif
            <div class="question-contacts menu-page__question-contacts">
                <ul class="list vertical-list">
                    <li class="list__item">Напишите нам и мы ответим на все Ваши вопросы</li>
                    <li class="list__item"><a href="">+7 913 050 0393</a></li>
                    <li class="list__item"><a href="">+7 913 447 447 8</a></li>
                    <li class="list__item">(WhatsApp, Viber)</li>
                    <li class="list__item"><a href="">262965@mail.ru</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection
