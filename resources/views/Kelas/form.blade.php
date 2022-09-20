@extends('layout.app')

@section('title')
    Kelas
@endsection

@section('content')
<div class="card mt-3">
  <div class="card-header">
    <div class="card-title">
      <h5>Edit Nama Kelas</h5>

      <div class="card-body">
        <form action="{{route('kelas.update', $kelas->id)}}" 
          method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama Kelas</label>
            <input type="text" name="nama" id="nama" value="{{$kelas->nama}}" class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
                <div class="text-danger">
                  {{ $message }}
                </div>
            @enderror
          </div>
          
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection


    