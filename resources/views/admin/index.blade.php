@extends('admin.templates.layout')
@section('content')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-12">
                    <div class="box">
                        <div class="box-header no-border pb-0">
                            <h4 class="box-title">Spend Overview</h4>
                        </div>
                        <div class="box-body">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-12">
                                    <div id="spend_trend"></div>
                                </div>
                                <div class="col-xl-4 col-12">
                                    <div class="d-flex align-items-center justify-content-evenly b-1 h-300">
                                        <div>
                                            <div class="text-start mb-50">
                                                <h5>Travel Spend</h5>
                                                <h2 class="fw-600">$185k <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 2%</span></h2>
                                            </div>
                                            <div class="text-start">
                                                <h5>Savings</h5>
                                                <h2 class="fw-600">$1,415<span class="fs-16 mx-10 text-success"><i class="fa fa-arrow-up"></i> 6%</span></h2>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="text-start mb-50">
                                                <h5>Trips</h5>
                                                <h2 class="fw-600">54 <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 2%</span></h2>
                                            </div>
                                            <div class="text-start">
                                                <h5>Bookings</h5>
                                                <h2 class="fw-600">105<span class="fs-16 mx-10 text-success"><i class="fa fa-arrow-up"></i> 6%</span></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-30">
                                <div class="col-xl-4 col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div id="progressbar1" class="mx-auto w-100 my-10 position-relative"></div>
                                        </div>
                                        <div class="text-start">
                                            <h5>Flights</h5>
                                            <h3 class="fw-500">$85,254 <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 3%</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div id="progressbar2" class="mx-auto w-100 my-10 position-relative"></div>
                                        </div>
                                        <div class="text-start">
                                            <h5>Hotels</h5>
                                            <h3 class="fw-500">$48,254 <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 1%</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div id="progressbar3" class="mx-auto w-100 my-10 position-relative"></div>
                                        </div>
                                        <div class="text-start">
                                            <h5>Trains</h5>
                                            <h3 class="fw-500">$11,254 <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 2%</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div id="progressbar4" class="mx-auto w-100 my-10 position-relative"></div>
                                        </div>
                                        <div class="text-start">
                                            <h5>Cars</h5>
                                            <h3 class="fw-500">$254 <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 1%</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div id="progressbar5" class="mx-auto w-100 my-10 position-relative"></div>
                                        </div>
                                        <div class="text-start">
                                            <h5>Ground Transportation</h5>
                                            <h3 class="fw-500">$454 <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 1%</span></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-12">
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div id="progressbar6" class="mx-auto w-100 my-10 position-relative"></div>
                                        </div>
                                        <div class="text-start">
                                            <h5>Food & incidentals</h5>
                                            <h3 class="fw-500">$754 <span class="fs-16 mx-10 text-fade"><i class="fa fa-arrow-up"></i> 2%</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
</div>
@endsection