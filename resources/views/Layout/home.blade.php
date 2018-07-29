@extends('admin.layout.index')

@section('content')
            <!-- STATISTIC-->
            <section class="statistic statistic2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Tổng quan</h3>
                        </div>
                        @include('admin.congcu.tongquan.songuoionline')
                        @include('admin.congcu.tongquan.dabantuannay')
                        @include('admin.congcu.tongquan.honmottuantruoc')
                        @include('admin.congcu.tongquan.tongthunhap')
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            <!-- STATISTIC CHART-->
            <section class="statistic-chart">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="title-5 m-b-35">Thống kê</h3>
                        </div>
                    </div>
                    <div class="row">
                        @include('admin.congcu.thongke.thongkehangthang')
                        @include('admin.congcu.thongke.top')
                        @include('admin.congcu.thongke.bieudo')
                    </div>
                </div>
            </section>
            <!-- END STATISTIC CHART-->

            <!-- DATA TABLE-->
                            <section class="p-t-20">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="admin.layout.taomoi">
                                            <h3 class="title-5 m-b-35">Gần đây</h3>
                                            <div class="table-data__tool">
                                                @include('admin.congcu.selectleft')
                                                @include('admin.congcu.selectright')
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="col-md-12">
                                <div class="table-responsive m-b-40">
                                    @include('admin.congcu.danhsach.ganday')
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                            <div class="text-center">
                                <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <a href="ganday" role="button">Xem thêm</a>
                                    </button>
                            </div>                                    
@endsection