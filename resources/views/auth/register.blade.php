@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                                {{-- $table->char('nis', 20)->nullable();
                                $table->string('fullname', 125);
                                $table->string('username', 50);
                                $table->string('password');
                                $table->string('kelas', 50)->nullable();
                                $table->text('alamat')->nullable(); --}}
                            <div class="row mb-3">
                                <label for="nis" class="col-md-4 col-form-label text-md-end">{{ __('Nis') }}</label>
                                <div class="col-md-6">
                                    <input id="nis" type="number"
                                        class="form-control @error('nis') is-invalid @enderror" name="nis"
                                        value="{{ old('nis') }}" required autocomplete="nis" autofocus>

                                    @error('nis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullname" class="col-md-4 col-form-label text-md-end">{{ __('fullname') }}</label>
                                <div class="col-md-6">
                                    <input id="fullname" type="number"
                                        class="form-control @error('fullname') is-invalid @enderror" name="fullname"
                                        value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                    @error('fullname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('username') }}</label>
                                <div class="col-md-6">
                                    <input id="username" type="number"
                                        class="form-control @error('username') is-invalid @enderror" name="username"
                                        value="{{ old('username') }}" required autocomplete="username" autofocus>

                                    @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="kelas" class="col-md-4 col-form-label text-md-end">{{ __('kelas') }}</label>
                                <div class="col-md-6">
                                    <input id="kelas" type="number"
                                        class="form-control @error('kelas') is-invalid @enderror" name="kelas"
                                        value="{{ old('kelas') }}" required autocomplete="kelas" autofocus>

                                    @error('kelas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('alamat') }}</label>
                                <div class="col-md-6">
                                    <input id="alamat" type="number"
                                        class="form-control @error('alamat') is-invalid @enderror" name="alamat"
                                        value="{{ old('alamat') }}" required autocomplete="alamat" autofocus>

                                    @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
