@extends('layouts.template')  
@section('main')
    <h2 class="ml-2 mb-4">Edit</h2>
<form action="{{ route('pakaian.update',$data->id_pakaian) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
   <div class="container">
    <div class="mb-3">
        <label >Nama Pakaian</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}">
      </div>
    <div class="mb-3">
        <label >Kategori</label>
        <input type="text" class="form-control @error('kategori_pakaian') is-invalid @enderror" name="kategori_pakaian" value="{{ old('kategori_pakaian') }}">
      </div>
    <div class="mb-3">
        <label >Harga</label>
        <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" value="{{ old('harga') }}">
      </div>
    <div class="mb-3">
        <label >Stok</label>
        <input type="text" class="form-control @error('stock') is-invalid @enderror" name="stock" value="{{ old('stock') }}">
      </div>
    <div class="mb-3">
        <label >Gambar</label>
        <input type="file" class="form-control @error('gambar') is-invalid @enderror" name="gambar">
      </div>
    
     
      <button type="submit" class="btn btn-primary">Submit</button>
   </div>
  </form>

@endsection