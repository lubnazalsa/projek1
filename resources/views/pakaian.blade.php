@extends('layouts.template')
@section('main')
    <h2 class="produk">Produk</h2>

    <!-- Tombol tambah data -->
    <a href="{{ route('pakaian.create') }}" class="btn btn-primary"> <i class="bi bi-plus-lg"></i>Tambah Data</a>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stock</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pakaian as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->kategori_pakaian }}</td>
                            <td>{{ $p->harga }}</td>
                            <td>{{ $p->stock }}</td>
                            <td>
                                @if ($p->gambar)
                                    <img src="{{ asset('storage/' . $p->gambar) }}" width="150px">
                                @else
                                    Tidak ada gambar
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('pakaian.edit', $p->id_pakaian) }}" class="btn btn-warning mb-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                            
                                <!-- Form delete -->
                                <form action="{{ route('pakaian.destroy', $p->id_pakaian) }}" method="POST"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data?')">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
