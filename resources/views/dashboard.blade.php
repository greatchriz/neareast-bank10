{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<x-app-layout>
    <x-users.detail-card :user="$user" title="Account Number">
        <i class="las la-book"></i>
    </x-users.detail-card>

    <x-users.detail-card :user="$user" title="User Name">
        <i class="las la-user"></i>
    </x-users.detail-card>

    <x-users.detail-card :user="$user" title="Date Joined">
        <i class="las la-calendar"></i>
    </x-users.detail-card>


    <x-latest-card type="box1" title="Total Transfer" />

    <x-latest-card type="box2" title="Fixed Deposit Balance" />

    <x-latest-card type="box3" title="Total Loan Amount" />

    <x-latest-card type="box4" title="Account Balance" />



    {{-- <div class="col-lg-3 col-md-6">
        <div class="iq-card dash-hover-gradient iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between border-0">
                <div class="mb-0 font-size-32 text-dark"><i class="ri-timer-line font-weight-light"></i></div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                        <span class="dropdown-toggle" id="d-29" data-toggle="dropdown">
                            <i class="ri-more-2-fill "></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right shadow-none">
                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                            <a class="dropdown-item" href="#"><i
                                    class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-card-body">
                <h3>Loans</h3>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="card-action font-size-14 p-3">
                <span class="float-right">Tommorow</span>
                <i class="ri-timer-2-line"></i> 2:30pm
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="iq-card dash-hover-gradient iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between border-0">
                <div class="mb-0 font-size-32 text-dark"><i class="ri-account-box-line font-weight-light"></i>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                        <span class="dropdown-toggle" id="d-27" data-toggle="dropdown">
                            <i class="ri-more-2-fill "></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right shadow-none">
                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                            <a class="dropdown-item" href="#"><i
                                    class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                            <a class="dropdown-item" href="#"><i
                                    class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-card-body">
                <h3>Account</h3>
                <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="card-action font-size-14 p-3">
                <span class="float-right">Tommorow</span>
                <i class="ri-timer-2-line"></i> 2:30pm
            </div>
        </div>
    </div> --}}
    {{-- <div class="col-md-6 col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height"
            style="background: transparent; box-shadow: none;">
            <div class="iq-card-body p-0">
                <a href="#"><img src="/dash/images/booking/03.png" class="img-fluid w-100 rounded shadow"
                        alt=""></a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height"
            style="background: transparent; box-shadow: none;">
            <div class="iq-card-body p-0">
                <a href="#"><img src="/dash/images/booking/04.png" class="img-fluid w-100 rounded shadow"
                        alt=""></a>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height"
            style="background: transparent; box-shadow: none;">
            <div class="iq-card-body p-0">
                <a href="#"><img src="/dash/images/booking/05.png" class="img-fluid w-100 rounded shadow"
                        alt=""></a>
            </div>
        </div>
    </div> --}}

    {{-- <div class="col-lg-9">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title"> Recent Transactions </h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                    <span class="dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown">
                    <i class="ri-more-fill"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1"
                    style="">
                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                    <a class="dropdown-item" href="#"><i
                            class="ri-file-download-fill mr-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-card-body">
            <div id="home-chart-01"></div>
        </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title"> Recent Transactions </h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                    <span class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown">
                    <i class="ri-more-fill"></i>
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"
                    style="">
                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                    <a class="dropdown-item" href="#"><i
                            class="ri-file-download-fill mr-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-card-body">
            <ul class="tikit-lists m-0 p-0">
                <li class="d-flex mb-4 align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                    <div class="media-support-info">
                        <h6>Paul Molive</h6>
                        <p class="mb-0 font-size-12">@paul001245689</p>
                    </div>
                    </div>
                    <span>01-04-2020</span>
                </li>
                <li class="d-flex mb-4 align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                    <div class="media-support-info">
                        <h6>Anna Sthesia</h6>
                        <p class="mb-0 font-size-12">@anna4586953</p>
                    </div>
                    </div>
                    <span>05-04-2020</span>
                </li>
                <li class="d-flex mb-4 align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                    <div class="media-support-info">
                        <h6>Paige Turner</h6>
                        <p class="mb-0 font-size-12">@paige001245698</p>
                    </div>
                    </div>
                    <span>07-04-2020</span>
                </li>
                <li class="d-flex mb-4 align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                    <div class="media-support-info">
                        <h6>Barb Ackue</h6>
                        <p class="mb-0 font-size-12">@barb0012356478</p>
                    </div>
                    </div>
                    <span>10-04-2020</span>
                </li>
                <li class="d-flex mb-4 align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                    <div class="media-support-info">
                        <h6>Greta Life</h6>
                        <p class="mb-0 font-size-12">@greta001245632</p>
                    </div>
                    </div>
                    <span>10-04-2020</span>
                </li>
                <li class="d-flex mb-4 align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                    <div class="media-support-info">
                        <h6>Ira Membrit</h6>
                        <p class="mb-0 font-size-12">@ira001245856</p>
                    </div>
                    </div>
                    <span>12-04-2020</span>
                </li>
                <li class="d-flex align-items-center justify-content-between">
                    <a href="#" class="btn btn-primary w-100">View More</a>
                </li>
            </ul>
        </div>
        </div>
    </div> --}}


    {{-- <div class="col-lg-3 col-md-6">
        <div class="iq-card dash-hover-blank d-flex align-items-center iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-body text-center">
                <h5 class="">Add New Account</h5>
            </div>
        </div>
    </div> --}}

    <div class="col-lg-12">
        <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Open Invoices</h4>
                </div>
                <div class="iq-card-header-toolbar d-flex align-items-center">
                    <div class="dropdown">
                        <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                            <i class="ri-more-fill"></i>
                        </span>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                            <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                            <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                            <a class="dropdown-item" href="#"><i
                                    class="ri-file-download-fill mr-2"></i>Download</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-card-body">
                <div class="table-responsive">
                    <table class="table mb-0 table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Transaction</th>
                                <th scope="col">Paid by</th>
                                <th scope="col">Amount</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>18/10/2019</td>
                                <td><i class="ri-briefcase-fill mr-2 iq-bg-success p-2 rounded"></i>Salary</td>
                                <td>*4567</td>
                                <td>+$52,000.00</td>
                                <td><i class="ri-file-fill text-primary font-size-18"></i></td>
                            </tr>
                            <tr>
                                <td>26/10/2019</td>
                                <td><i class="ri-briefcase-fill mr-2 iq-bg-warning p-2 rounded"></i>Taxes</td>
                                <td>*5689</td>
                                <td>+$40,200.80</td>
                                <td><i class="ri-file-fill text-primary font-size-18"></i></td>
                            </tr>
                            <tr>
                                <td>18/11/2019</td>
                                <td><i class="ri-briefcase-fill mr-2 iq-bg-info p-2 rounded"></i>I return your money
                                </td>
                                <td>*7845</td>
                                <td>+$6000.02</td>
                                <td><i class="ri-file-fill text-primary font-size-18"></i></td>
                            </tr>
                            <tr>
                                <td>14/12/2019</td>
                                <td><i class="ri-briefcase-fill mr-2 iq-bg-danger p-2 rounded"></i>Grocery store
                                </td>
                                <td>*1761</td>
                                <td>+$7236.00</td>
                                <td><i class="ri-file-fill text-primary font-size-18"></i></td>
                            </tr>
                            <tr>
                                <td>24/12/2019</td>
                                <td><i class="ri-briefcase-fill mr-2 iq-bg-primary p-2 rounded"></i>Debit by ATM
                                </td>
                                <td>*2494</td>
                                <td>+$50.00</td>
                                <td><i class="ri-file-fill text-primary font-size-18"></i></td>
                            </tr>
                            <tr>
                                <td>18/10/2019</td>
                                <td><i class="ri-briefcase-fill mr-2 iq-bg-success p-2 rounded"></i>Credit Amount
                                </td>
                                <td>*4594</td>
                                <td>+$1000.00</td>
                                <td><i class="ri-file-fill text-primary font-size-18"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
