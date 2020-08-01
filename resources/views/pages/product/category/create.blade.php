@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
        </div>

        <div class="section-body">
            <h2 class="section-title">
                {{ $title }}
            </h2>
            <p class="section-lead">
                Halaman untuk menambahkan kategori produk baru.
            </p>

            <div class="card">

                <form action="{{ route('product-category.store') }}" method="post">
                    @csrf
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger col-lg-3">
                                @foreach ($errors->all() as $error)
                                    {{ $error }} <br/>
                                @endforeach    
                            </div>                
                        @endif

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-pencil-alt"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <textarea class="form-control" name="description">{{ old('description') }}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
