@extends('cms.layout.TemplateAdmin')
@section('content')
    <div class="col-sm-12">
        <h5 class="mt-4">Data Wali Murid</h5>
        <hr>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-table-tab" data-toggle="pill" href="#pills-table" role="tab"
                    aria-controls="pills-table" aria-selected="true">Tabel</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-form-tab" data-toggle="pill" href="#pills-form" role="tab"
                    aria-controls="pills-form" aria-selected="false">Form</a>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-table" role="tabpanel" aria-labelledby="pills-table-tab">
                <div class="col-md-12">
                    <h5>Tabel Data Wali Murid</h5>
                    <div class="table-responsive">
                        <table class="table table-inverse" id="DataTable">
                            <thead>
                                <tr>
                                    <th style="width: 5px;">#</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th>Jk</th>
                                    <th style="width: 30px;">info</th>
                                    <th style="width: 25px;">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>5530332393</td>
                                    <td>Irwandi Paputungan</td>
                                    <td>Laki laki</td>
                                    <td>
                                        <a href="#" class="link-button"><i class="feather icon-info"></i> Detail</a>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-secondary"><i
                                                class="feather icon-camera"></i>Edit</button>
                                        <button class="btn btn-rounded btn-sm btn-danger">x</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-form" role="tabpanel" aria-labelledby="pills-form-tab">
                <h5>Basic Componant</h5>
                <h5>Form controls</h5>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">Well never share your email with
                                    anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Text">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#DataTable').DataTable();
        });
    </script>
@endsection
