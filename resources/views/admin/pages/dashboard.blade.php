@extends('admin\layout\AdminLayout')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title">
                    Tableau de bord
                </h3>
            </div>
            <div class="row grid-margin">
                <div class="col-12">
                    <div class="card card-statistics">
                        <div class="card-body">
                            <div class="d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa  fa-th-list mr-2"></i>
                                        Les Categories
                                    </p>
                                    <h2>0</h2>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-font  mr-2"></i>
                                        Articles
                                    </p>
                                    <h2>0</h2>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-globe mr-2"></i>
                                        Posts
                                    </p>
                                    <h2>0</h2>
                                </div>
                                <div class="statistics-item">
                                    <p>
                                        <i class="icon-sm fa fa-envelope mr-2"></i>
                                        Messages
                                    </p>
                                    <h2>5</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">
                                <i class="fas fa-envelope"></i>
                                Inbox(31)
                            </h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="py-1">
                                                <img src="{{ asset('melody/images/faces/face13.jpg') }}" alt="profile"
                                                    class="img-sm rounded-circle" />
                                            </td>
                                            <td class="font-weight-bold">
                                                Andrew Bowen
                                            </td>
                                            <td>
                                                <label class="badge badge-light badge-pill">Development</label>
                                            </td>
                                            <td>
                                                The required fields are added in the database
                                            </td>
                                            <td>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="py-1">
                                                <img src="{{ asset('melody/images/faces/face2.jpg') }}" alt="profile"
                                                    class="img-sm rounded-circle" />
                                            </td>
                                            <td class="font-weight-bold">
                                                Mae Saunders
                                            </td>
                                            <td>
                                                <label class="badge badge-light badge-pill">Development</label>
                                            </td>
                                            <td>
                                                The application will be completed by tomorrow
                                            </td>
                                            <td>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="py-1">
                                                <div class="img-sm rounded-circle bg-warning profile-image-text">M</div>
                                            </td>
                                            <td class="font-weight-bold">
                                                Manuel Yates
                                            </td>
                                            <td>
                                                <label class="badge badge-light badge-pill">Design</label>
                                            </td>
                                            <td>
                                                The new design is uploaded in zeplin
                                            </td>
                                            <td>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="py-1">
                                                <img src="{{ asset('melody/images/faces/face2.jpg') }}" alt="profile"
                                                    class="img-sm rounded-circle" />
                                            </td>
                                            <td class="font-weight-bold">
                                                Marguerite Phillips
                                            </td>
                                            <td>
                                                <label class="badge badge-light badge-pill">Development</label>
                                            </td>
                                            <td>
                                                Please send me the latest requirements
                                            </td>
                                            <td>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input">
                                                    </label>
                                                </div>
                                            </td>
                                            <td class="py-1">
                                                <div class="img-sm rounded-circle bg-info profile-image-text">C</div>
                                            </td>
                                            <td class="font-weight-bold">
                                                Clifford Wilson
                                            </td>
                                            <td>
                                                <label class="badge badge-light badge-pill">Testing</label>
                                            </td>
                                            <td>
                                                The issues are documented in the shared sheet
                                            </td>
                                            <td>
                                                <i class="fas fa-ellipsis-v"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-md-flex justify-content-between align-items-center">
                                <div class="d-flex align-items-center mb-3 mb-md-0">
                                    <button class="btn btn-social-icon btn-facebook btn-rounded">
                                        <i class="fab fa-facebook-f"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Facebook</h5>
                                        <p class="mb-0">813 friends</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 mb-md-0">
                                    <button class="btn btn-social-icon btn-twitter btn-rounded">
                                        <i class="fab fa-twitter"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Twitter</h5>
                                        <p class="mb-0">9000 followers</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center mb-3 mb-md-0">
                                    <button class="btn btn-social-icon btn-google btn-rounded">
                                        <i class="fab fa-google-plus-g"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Google plus</h5>
                                        <p class="mb-0">780 friends</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-social-icon btn-linkedin btn-rounded">
                                        <i class="fab fa-linkedin-in"></i>
                                    </button>
                                    <div class="ml-4">
                                        <h5 class="mb-0">Linkedin</h5>
                                        <p class="mb-0">1090 connections</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        @include('admin.footer')
    </div>
@endsection
