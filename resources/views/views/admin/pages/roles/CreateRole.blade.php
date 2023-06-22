@extends('admin\layout\AdminLayout')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"> Ajouter un role</h4>

                            <form class="forms-sample" method="POST" action="{{ route('CreateRolePost') }}">

                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="exampleInputUsername1">Nom de role</label>
                                            <input type="text" name="role_name"
                                                class="form-control @error('role_name') is-invalid @enderror"
                                                id="exampleInputUsername1" placeholder="role..."
                                                value="{{ old('role_name') }}">

                                            @error('role_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Ajouter</button>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                        href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="far fa-heart text-danger"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>
@endsection
