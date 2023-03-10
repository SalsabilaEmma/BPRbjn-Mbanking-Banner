@extends('layout.app')
@section('content')
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>{{ $title }}</h4>
                        </div>
                        <div class="card-body">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible show fade">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            @if ($message = Session::get('error'))
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $message }}</strong>
                                </div>
                            @endif
                            <div style="padding-left: 25px">
                                <button type="button" class="btn btn-outline-success" data-toggle="modal"
                                    data-target="#tambahdata">Tambah Data</button>
                            </div><br>
                            <div class="table-responsive">
                                <table class="table table-striped" id="save-stage" style="width:100%;">
                                    {{--  id="save-stage myTable" --}}
                                    <thead>
                                        <tr class="text-center">
                                            <th>Preview</th>
                                            <th style="width: 250px">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $dir = 'image/banner/';
                                        // Sort in descending order
                                        $data_banner = scandir($dir, 1);
                                        // dd($data_banner);
                                        ?>
                                        @foreach ($data_banner as $banner)
                                            @if (strlen($banner) > 4)
                                                <tr>
                                                    <td>
                                                        <div class="zoom">
                                                            <img id="file" class="profile-user-img img-responsive"
                                                                style="height: 150px; width: auto; display: block; margin: auto;"
                                                                src="{{ url('image/banner/' . $banner) }}" alt="Banner">
                                                        </div>
                                                    </td>
                                                    <td class="text-center">
                                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');"
                                                            action="{{ route('banner.destroy', $banner) }}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-sm btn-outline-danger"><i
                                                                    data-feather="trash-2"></i>
                                                                Hapus</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal tambah data -->
    <div class="modal fade" id="tambahdata" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModal">Tambah {{ $title }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('banner.store') }}" id="form" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>File</label>
                            <div class="input-group">
                                <input type="file" required name="file" accept="image/*" id="file-input"
                                    onchange="imageExtensionValidate(this)"
                                    class="form-control @error('file') is-invalid @enderror" placeholder="Deskripsi Banner">
                                @error('file')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-outline-primary m-t-15 waves-effect g-recaptcha"
                                data-sitekey="{{ env('GOOGLE_CLIENT_ID') }}" data-callback='onSubmit'
                                data-action='submit'>Submit</button>
                            <button type="button" class="btn btn-outline-dark m-t-15 waves-effect"
                                data-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
    function onSubmit(token) {
        document.getElementById("form").submit();
    }
</script>
