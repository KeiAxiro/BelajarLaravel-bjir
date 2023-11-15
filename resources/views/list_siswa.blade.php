@extends('siswa')

@section('judul-halaman', 'List Siswa')

@section('main-content')
    <div class="table-responsive-xxl">
        <table
            class="table table-sm
        table-hover
        table-borderless
        table-primary
        align-middle
        text-center">
            <thead class="table-light">
                <caption>Tabel Siswa</caption>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($siswa as $s)
                    <tr class="table-primary">
                        <td scope="row">{{ $s->id }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->umur }}</td>
                        <td>{{ $s->alamat }}</td>
                        <td>{{ $s->email }}</td>
                        <td class="w-25 p-0 m-0">
                            <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                                <a name="edit" id="edit" class="btn btn-info" href="/siswa/{{ $s->id }}/edit"
                                    role="button">Edit</a>
                                <a name="edit" id="Show" class="btn btn-primary"
                                    href="/siswa/{{ $s->id }}/show" role="button">Show</a>
                                <a name="hapus" id="hapus" class="btn btn-danger"
                                     href="/siswa/{{ $s->id }}/hapus" role="button">Hapus</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
