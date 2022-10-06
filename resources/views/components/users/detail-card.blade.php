@props([
    'title' => 'Account Number',
    'details' => [
        'Account Number' => $user->account_number,
        'User Name' => $user->name,
        'Date Joined' => Carbon\Carbon::parse($user->created_at)->toFormattedDateString(),
    ]
])

<div class="col-md-6 col-lg-4">
    <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-bg-primary rounded">
       <div class="iq-card-body">
          <div class="d-flex align-items-center justify-content-between">
             <div class="icon iq-icon-box rounded bg-primary rounded shadow" data-wow-delay="0.2s">

                {{-- <i class="las la-book"></i> --}}
                    {{ $slot }}
             </div>
             <div class="iq-text">
                <h6 class="text-white">{{ $title }}</h6>
                <h3 class="text-white">{{  $details[$title] }}</h3>
             </div>
          </div>
       </div>
    </div>
 </div>
