<?php

use App\Models\Buku;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

Route::prefix('user')->group(function () {
    Route::get('/dashboard', [User\DashboardController::class, 'index'])->name('user.dashboard')->middleware('auth');

    Route::get('/peminjaman', function () {
        $peminjamans = Peminjaman::where('user_id', Auth::user()->id)->get();
        return view('user.peminjaman', compact('peminjamans'));
    })->name('user.peminjaman');

    Route::get('/peminjaman/form', function () {
        $bukus = Buku::all();

        return view('user.form_peminjaman', compact('bukus'));
    })->name('user.form_peminjaman');

    Route::post('form_peminjaman' ,function(Request $request){
        $buku_id = $request->buku_id;
        $bukus = Buku::all();

        return view('user.form_peminjaman' , compact("bukus", "buku_id"));
    });

    Route::post('form_peminjaman', function(Request $request){
        $buku_id = $request->buku_id;
        $bukus = Buku::all();

        return view('user.form_peminjaman', compact("bukus", "buku_id"));
    })->name('user.form_peminjaman_dashboard');

    Route::post('submit_peminjaman' , function(Request $request){
        $tanggal_peminjaman = $request->tanggal_peminjaman;
        $tanggal_pengembalian = $request->tanggal_pengembalian;
        $buku_id = $request->buku_id;
        $kondisi_buku_saat_dipinjam = $request->kondisi_buku_saat_dipinjam;

        $peminjaman = Peminjaman::create([
            "tanggal_peminjaman" => $tanggal_peminjaman,
            "tanggal_pengembalian" => $tanggal_pengembalian,
            "buku_id" => $buku_id,
            "kondisi_buku_saat_dipinjam" => $kondisi_buku_saat_dipinjam,
            "user_id" => Auth::user()->id
        ]);

        if ($peminjaman) {
            return redirect()->route('user.peminjaman')->with("status", "success")
            ->with("message", "Berhasil Meminjam Buku");
        }
        return redirect()->back()->with("status", "danger")
        ->with("message", "Gagal Meminjam Buku");
    })->name('user.submit_peminjaman');

    Route::get('/pengembalian', function () {
        return view('user.pengembalian');
    })->name('user.pengembalian');

    Route::get('/pesan', function () {
        return view('user.pesan');
    })->name('user.pesan');

    Route::get('/profil', function () {
        return view('user.profil');
    })->name('user.profil');

    Route::put('profile', function(Request $request){
        $user = User::find(Auth::user()->id)->update($request->all());
        $user2 = User::find(Auth::user()->id)->update([
            "password" => Hash::make($request->password)
        ]);

        if($user && $user2) {
            return redirect()->back()->with("status", "success")->with('message',
            'Berhasil mengubah profile');
        }
            return redirect()->back()->with("status", "danger")->with('message', 'Gagal mengubah profile');
    })->name('user.profil.update');
});
