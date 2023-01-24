@extends('layouts.app')

@section('content')

<?php
$month = date('m');
$day = date('d');
$year = date('Y');
$today = $year . '-' . $month . '-' . $day;
$return_day = $year . '-' . $month . '-' . $day + 7; // 7 days
?>

    <div class="container">
        @include('components.user.sidebar')

        <div class="card">
            <div class="card-header">
                <h4>Form Peminjaman</h4>
            </div>

            <div class="card-body" style="max-width: 40%">
                <form action="{{ route('user.submit_peminjaman') }}" method="POST" class="form-group">
                    @csrf
                    <div class="mb-3">
                        <label for="">Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_peminjaman" value="<?php echo $today; ?>" class="form-control">
                        <input type="hidden" name="tanggal_pengembalian" value="<?php echo $return_day; ?>" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="">Pilih Buku</label>

                        <select name="buku_id" id="" class="form-select">

                            <option disabled selected>--Pilih Opsi--</option>

                            @foreach ($bukus as $b)
                            <option value="{{ $b->id }}" {{ isset($buku_id) ?
                                $buku_id == $b->id ? "selected" : "" : "" }}>{{
                                $b->judul }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="">Kondisi buku</label>
                        <select name="kondisi_buku_saat_dipinjam" id="" class="form-select"
                            name="kondisi_buku_saat_dipinjam">
                            <option value="" disabled selected>--Pilih Opsi--</option>
                            <option value="baik">Baik</option>
                            <option value="buruk">Buruk</option>
                        </select>
                    </div>

                    <input type="hidden" value="{{ Auth::user()->id }}" name="user_id">
                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
@endsection
