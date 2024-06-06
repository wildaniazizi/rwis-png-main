@extends('layouts.vertical')


@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="row page-title align-items-center">
    <div class="col-sm-4 col-xl-6">
        <h4 class="mb-1 mt-0">Selamat Datang Pak RW/RT</h4>
    </div>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-4 col-xl-4">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">Jumlah Rumah</span>
                        <h2 class="mb-0">200</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-xl-4">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-18 font-weight-bold">Jumlah KK</span>
                        <h2 class="mb-0">360</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-xl-4">
        <div class="card">
            <div class="card-body p-0">
                <div class="media p-3">
                    <div class="media-body">
                        <span class="text-muted text-uppercase font-size-18 font-weight-bold ">Daftarkan warga baru?</span><br>
                        <button type="button" class="btn btn-success">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- products -->
<div class="row">
    {{-- <div class="col-xl-5">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title mt-0 mb-0 header-title">Sales By Category</h5>
                <div id="sales-by-category-chart" class="apex-charts mb-0 mt-4" dir="ltr"></div>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col--> --}}
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                {{-- <a href="" class="btn btn-primary btn-sm float-right">
                    <i class='uil uil-export ml-1'></i> Export
                </a> --}}
                <h5 class="card-title mt-0 mb-0 header-title">Informasi Rumah</h5>

                <div class="table-responsive mt-4">
                    <table class="table table-hover table-striped mb-0">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kepala Keluarga</th>
                                <th scope="col">Jumlah anggota keluarga</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- href="route halaman detail" --}}
                            <tr>
                                <td>#98754</td>
                                <td>ASOS Ridley High</td>
                                <td>Otto B</td>
                                <td>$79.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98753</td>
                                <td>Marco Lightweight Shirt</td>
                                <td>Mark P</td>
                                <td>$125.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98752</td>
                                <td>Half Sleeve Shirt</td>
                                <td>Dave B</td>
                                <td>$35.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98751</td>
                                <td>Lightweight Jacket</td>
                                <td>Shreyu N</td>
                                <td>$49.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                            <tr>
                                <td>#98750</td>
                                <td>Marco Shoes</td>
                                <td>Rik N</td>
                                <td>$69.49</td>
                                <td><a href="#" class="badge badge-primary badge-pill py-2 px-3" role="button" style="font-size: 12px;">Detail</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div> <!-- end table-responsive-->
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div> <!-- end col-->
</div>
<!-- end row -->
@endsection

@section('script')
<!-- optional plugins -->
<script src="{{ URL::asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>
<script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

<!-- datatable js -->
<script src="{{ URL::asset('public/assets/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('public/assets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
@endsection

@section('script-bottom')
<!-- init js -->
<script src="{{ URL::asset('assets/js/pages/dashboard.init.js') }}"></script>
@endsection