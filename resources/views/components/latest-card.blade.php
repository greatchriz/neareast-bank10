@props([
    'title' => 'Account Balance',
    'type' => 'box1',
    'ids' => [
        'box1' => 'iq-chart-box1',
        'box2' => 'iq-chart-box2',
        'box3' => 'iq-chart-box3',
        'box4' => 'iq-chart-box4',
    ]
])

{{-- <section {{ $attributes->merge(['class' => "{$colors[$type]} border-b p-4"]) }}> --}}

<div class="col-sm-6 col-md-6 col-lg-3">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
       <div class="iq-card-body iq-box-relative">
          <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
             <i class="ri-focus-2-line"></i>
          </div>
          <p class="text-secondary">{{ $title }}</p>
          <div class="d-flex align-items-center justify-content-between">
             <h4><b>$18 378</b></h4>
             <div {{ $attributes->merge(['id' => "{$ids[$type]}"]) }}></div>
             <span class="text-primary"><b> +14% <i class="ri-arrow-up-fill"></i></b></span>
          </div>
       </div>
    </div>
 </div>
