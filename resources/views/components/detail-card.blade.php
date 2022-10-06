<div class="col-md-6 col-lg-4">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-bg-primary rounded">
       <div class="iq-card-body">
          <div class="d-flex align-items-center justify-content-between">
             <div class="icon iq-icon-box rounded bg-primary rounded shadow" data-wow-delay="0.2s">
                {{ $slot }}
                {{-- <i class="las la-users"></i> --}}
             </div>
             <div class="iq-text">
                <h6 class="text-white">{{ $title }}</h6>
                <h3 class="text-white">{{ $detail }}</h3>
             </div>
          </div>
       </div>
    </div>
 </div>
