<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => 'A01',
            'fullname' => 'Alter',
            'username' => 'alter',
            'password' => Hash::make('adminkece'),
            'role' => 'admin',
            'join_date' => '2022-01-01',
            'foto' => ''
        ]);
        User::create([
            'kode' => 'A02',
            'nis' => '12345',
            'fullname' => 'Dzulfiqar',
            'username' => 'dzulfiqar',
            'password' => Hash::make('dzulfiqar'),
            'kelas' => 'XII RPL',
            'alamat' => 'Cikoko',
            'role' => 'user',
            'join_date' => '2022-01-06',
            'foto' => ''
        ]);
        User::create([
            'kode' => 'A03',
            'nis' => '13524',
            'fullname' => 'Azhar',
            'username' => 'azhar',
            'password' => Hash::make('azhar'),
            'kelas' => 'XII RPL',
            'alamat' => 'Cikoko',
            'role' => 'user',
            'join_date' => '2022-01-06',
            'foto' => ''
        ]);

        Kategori::create([
            'kode' => 'umum',
            'nama' => 'Umum'
        ]);
        Kategori::create([
            'kode' => 'sains',
            'nama' => 'Sains'
        ]);
        Kategori::create([
            'kode' => 'sejarah',
            'nama' => 'Sejarah'
        ]);

        Penerbit::create([
            'kode' => 'erlangga',
            'nama' => 'Erlangga'
        ]);
        Penerbit::create([
            'kode' => 'gramedia',
            'nama' => 'Gramedia'
        ]);
        Penerbit::create([
            'kode' => 'nasmedia',
            'nama' => 'Nasmedia'
        ]);


        Buku::create([
            'judul' => 'Cara Berpantun yang Baik',
            'kategori_id' => 1,
            'penerbit_id' => 1,
            'pengarang' => 'Udin',
            'tahun_terbit' => '2022',
            'isbn' => '245662',
            'j_buku_baik' => 6,
            'j_buku_rusak' => 2,
            'foto' => ''
        ]);
        Buku::create([
            'judul' => 'Luar Angkasa dan Sekitar',
            'kategori_id' => 2,
            'penerbit_id' => 2,
            'pengarang' => 'Bambang',
            'tahun_terbit' => '2022',
            'isbn' => '271354',
            'j_buku_baik' => 15,
            'j_buku_rusak' => 3,
            'foto' => ''
        ]);
        Buku::create([
            'judul' => 'Anatomi Hewan dan Tumbuhan',
            'kategori_id' => 3,
            'penerbit_id' => 3,
            'pengarang' => 'Sukirman',
            'tahun_terbit' => '2022',
            'isbn' => '556677',
            'j_buku_baik' => 3,
            'j_buku_rusak' => 1,
            'foto' => ''
        ]);

        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 1,
            'tanggal_peminjaman' => '2023-01-06',
            'tanggal_pengembalian' => '2023-01-13',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik'
        ]);

        Peminjaman::create([
            'user_id' => 3,
            'buku_id' => 2,
            'tanggal_peminjaman' => '2023-01-06',
            'tanggal_pengembalian' => '2023-01-13',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'rusak',
            'denda' => 50000,
        ]);

        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 3,
            'tanggal_peminjaman' => '2023-01-06',
            'tanggal_pengembalian' => '2023-02-13',
            'kondisi_buku_saat_dipinjam' => 'baik',
            'kondisi_buku_saat_dikembalikan' => 'baik',
            'denda' => 10000,
        ]);

        Pemberitahuan::create([
            'isi' => 'Server sedang error',
            'status' => 'nonaktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Sedang dalam maintenance',
            'status' => 'aktif',
        ]);

        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 2,
            'judul' => 'Pengembalian buku',
            'isi' => 'Mohon segera mengembalikan buku',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-12-01',
        ]);
        Pesan::create([
            'pengirim_id' => 1,
            'penerima_id' => 3,
            'judul' => 'Kembalikan buku',
            'isi' => 'Dimohon untuk mengembalikan buku yang dipinjam',
            'status' => 'terbaca',
            'tanggal_kirim' => '2022-12-01',
        ]);

        Identitas::create([
            'nama_app' => 'E-Perpus SMKN 10',
            'alamat_app' => 'Jalan SMEAN 6',
            'email_app' => 'smkn10@perpus.com',
            'nomor_hp' => '081192538451',
            'foto' => ''
        ]);
    }
}
