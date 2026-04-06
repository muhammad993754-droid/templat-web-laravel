@extends('layouts.adminkit')

@section('title', 'Feather Icons')

@section('content')
    <h1 class="h3 mb-3"><strong>Feather</strong> Icons</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Icon Examples</h5>
                </div>
                <div class="card-body">
                    <p class="text-muted">A collection of simply beautiful open source icons from <a href="https://feathericons.com/" target="_blank" rel="noopener">feathericons.com</a>.</p>
                    <div class="row g-3">
                        @php
                            $icons = ['activity','airplay','alert-circle','alert-octagon','alert-triangle','align-center','align-justify','align-left','align-right','anchor','aperture','archive','arrow-down','arrow-left','arrow-right','arrow-up','bar-chart','bar-chart-2','battery','bell','bluetooth','book','bookmark','box','briefcase','calendar','camera','check','check-circle','chevron-down','chevron-left','chevron-right','chevron-up','clock','code','coffee','columns','command','compass','copy','cpu','credit-card','crop','database','delete','disc','download','droplet','edit','eye','feather','file','filter','flag','folder','globe','grid','heart','help-circle','home','image','inbox','info','italic','layers','layout','link','list','lock','log-in','log-out','mail','map','maximize','menu','message-circle','message-square','minimize','minus','monitor','moon','more-horizontal','more-vertical','mouse-pointer','move','music','navigation','package','paperclip','pause','percent','phone','pie-chart','play','plus','power','printer','radio','refresh-cw','repeat','rotate-cw','save','scissors','search','settings','share','shield','shopping-cart','sidebar','skip-back','skip-forward','sliders','smartphone','star','sun','tag','terminal','thumbs-up','trash','trending-up','truck','tv','type','upload','user','user-plus','users','video','wifi','x','x-circle','zap','zoom-in','zoom-out'];
                        @endphp
                        @foreach($icons as $icon)
                        <div class="col-6 col-sm-4 col-md-3 col-xl-2 text-center">
                            <i data-feather="{{ $icon }}" class="mb-1"></i>
                            <div class="small text-muted">{{ $icon }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
