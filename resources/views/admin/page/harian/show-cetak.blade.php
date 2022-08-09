@extends('admin.layouts.kasir')
{{-- Meta --}}
@section('meta-name', 'Kasir Rekapan Sampah Harian, Selesai Transaksi')
@section('meta-description', 'Data Kasir Rekapan Sampah Harian, Selesai Transaksi')
@section('meta-keyword', 'Kasir Rekapan Sampah Harian, Selesai Transaksi')
{{-- End Meta --}}
@section('title', 'Kasir Rekapan Sampah Harian - Selesai Transaksi')
@section('footer')
    <script>
        $(document).ready(function() {
            window.history.pushState(null, "", window.location.href);
            window.onpopstate = function() {
                window.history.pushState(null, "", window.location.href);
            };
        });
    </script>
@endsection
@section('content')

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('harian') }}" class="btn btn-danger mb-3"><i
                                class="icon-arrow-left"></i>Kembali</a>
                    </div>
                </div>
                <!-- Card end -->

                <!-- Card start -->
                <div class="card">
                    <div class="card-header-lg">
                        <h4>Informasi Rekapan Sampah Harian {{ $rekapan->status }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <!-- Row start -->
                            <div class="row justify-content-center">
                                <div class="col-xl-8 text-center col-lg-8 col-md-12 col-sm-12 col-12">
                                    <h5>Rekapan Sampah Harian {{ $rekapan->status }} Dengan Kode Transaksi
                                        {{ $rekapan->kode_transaksi }} Berhasil
                                        Dilakukan, Data Jumlah Sampah Telah Diupdate Ke Masing-Masing Kategori Sampah,
                                        Silahkan pilih menu berikut untuk melanjutkan</h5>
                                    <div class="row mt-4">
                                        <div class="col-4 text-center">
                                            <form target="_blank" rel="noopener noreferrer"
                                                action="{{ route('harian.cetak.aksi', $rekapan->id) }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary"> Cetak Invoice</button>
                                            </form>
                                        </div>
                                        <div class="col-4 text-center">
                                            <a href="{{ route('harian') }}"><button class="btn btn-success">Tambah
                                                    Penyetoran Lain</button></a>
                                        </div>
                                        <div class="col-4 text-center">
                                            <a href="{{ route('rekapan-harian') }}"><button class="btn btn-warning">Lihat
                                                    History</button></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- Row end -->
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->
    </div>
@endsection
