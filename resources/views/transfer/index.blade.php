<x-app-layout>

    <div class="col-sm-12 col-lg-6">

        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Transfer Funds</h4>
                </div>
            </div>
            <div class="iq-card-body">
                <p>Send money from your account to another account.</p>
                <!-- Button trigger modal -->

                <button type="button" class="btn btn-primary" data-toggle="modal"
                    data-target="#exampleModalCenteredScrollable">
                    Make Transfer
                </button>
                <!-- Modal -->

                <div id="exampleModalCenteredScrollable" class="modal fade" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenteredScrollableTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="iq-card">
                                    <div class="iq-card-header d-flex justify-content-between">
                                        <div class="iq-header-title">
                                            <h4 class="card-title">Input</h4>
                                        </div>
                                    </div>
                                    <div class="iq-card-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex
                                            ac venenatis mollis, diam nibh finibus leo</p>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleInputText1">Input Text </label>
                                                <input type="text" class="form-control" id="exampleInputText1"
                                                    value="Mark Tech" placeholder="Enter Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail3">Email Input</label>
                                                <input type="email" class="form-control" id="exampleInputEmail3"
                                                    value="markTech@gmail.com" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputurl">Url Input</label>
                                                <input type="url" class="form-control" id="exampleInputurl"
                                                    value="https://getbootstrap.com" placeholder="Enter Url">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputphone">Teliphone Input</label>
                                                <input type="tel" class="form-control" id="exampleInputphone"
                                                    value="1-(555)-555-5555">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputNumber1">Number Input</label>
                                                <input type="number" class="form-control" id="exampleInputNumber1"
                                                    value="2356">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword3">Password Input</label>
                                                <input type="password" class="form-control" id="exampleInputPassword3"
                                                    value="markTech123" placeholder="Enter Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputdate">Date Input</label>
                                                <input type="date" class="form-control" id="exampleInputdate"
                                                    value="2019-12-18">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputmonth">Month Input</label>
                                                <input type="month" class="form-control" id="exampleInputmonth"
                                                    value="2019-12">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputweek">Week Input</label>
                                                <input type="week" class="form-control" id="exampleInputweek"
                                                    value="2019-W46">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputtime">Time Input</label>
                                                <input type="time" class="form-control" id="exampleInputtime"
                                                    value="13:45">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputdatetime">Date and Time Input</label>
                                                <input type="datetime-local" class="form-control"
                                                    id="exampleInputdatetime" value="2019-12-19T13:45:00">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            <button type="submit" class="btn iq-bg-danger">Cancel</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



    <div class="col-12">

        <div class="iq-card">
            <div class="iq-card-header d-flex justify-content-between">
                <div class="iq-header-title">
                    <h4 class="card-title">Latest Transfers</h4>
                </div>
            </div>

            <div class="row iq-card-body">

                <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center mt-3">
                                <div class="icon iq-icon-box rounded iq-bg-danger mr-3">
                                    <i class="ri-shopping-bag-line"></i>
                                </div>
                                <div class="iq-details col-sm-9 p-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="title text-dark">Dailly expenses</span>
                                        <div class="percentage"><b><span>$</span> 620 </b></div>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                        <div class="iq-progress-bar">
                                            <span class="bg-danger" data-percent="100"></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="">45 Transaction</span>
                                        <div class="percentage">67<span>%</span></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 rounded">
                    <div class="iq-card iq-card-block iq-card-stretch">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center mt-3">
                                <div class="icon iq-icon-box rounded iq-bg-danger mr-3">
                                    <i class="ri-shopping-bag-line"></i>
                                </div>
                                <div class="iq-details col-sm-9 p-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="title text-dark">Dailly expenses</span>
                                        <div class="percentage"><b><span>$</span> 620 </b></div>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                        <div class="iq-progress-bar">
                                            <span class="bg-danger" data-percent="100"></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="">45 Transaction</span>
                                        <div class="percentage">67<span>%</span></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center mt-3">
                                <div class="icon iq-icon-box rounded iq-bg-danger mr-3">
                                    <i class="ri-shopping-bag-line"></i>
                                </div>
                                <div class="iq-details col-sm-9 p-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="title text-dark">Dailly expenses</span>
                                        <div class="percentage"><b><span>$</span> 620 </b></div>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                        <div class="iq-progress-bar">
                                            <span class="bg-danger" data-percent="100"></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="">45 Transaction</span>
                                        <div class="percentage">67<span>%</span></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="iq-card iq-card-block iq-card-stretch">
                        <div class="iq-card-body">
                            <div class="d-flex align-items-center mt-3">
                                <div class="icon iq-icon-box rounded iq-bg-danger mr-3">
                                    <i class="ri-shopping-bag-line"></i>
                                </div>
                                <div class="iq-details col-sm-9 p-0">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="title text-dark">Dailly expenses</span>
                                        <div class="percentage"><b><span>$</span> 620 </b></div>
                                    </div>
                                    <div class="iq-progress-bar-linear d-inline-block w-100">
                                        <div class="iq-progress-bar">
                                            <span class="bg-danger" data-percent="100"></span>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between">
                                        <span class="">45 Transaction</span>
                                        <div class="percentage">67<span>%</span></div>
                                    </div>
                                </div>
                            </div>
                            <hr class="mt-4 mb-4">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
