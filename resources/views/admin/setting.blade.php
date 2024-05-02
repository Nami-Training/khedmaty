@extends('admin.layout.master')

@section('title', 'Settings')

@section('content')

    <div class="page-body px-xl-4 px-sm-2 px-0 py-lg-2 py-1 ">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body" style="min-height: calc(100vh - 196px);">
                    <form class="row g-3 from-submit-global" method="post" action="{{route('setting.update', $setting->id)}}"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="col-3">
                            <label for="TextInput" class="form-label">Site Name</label>
                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-globe "></i>
                                </div>
                                <input type="text" name="website_name" value="{{$setting->website_name}}" class="form-control">
                            </fieldset>
                        </div>

                        <div class="col-3">
                            <label for="TextInput" class="form-label">Location</label>
                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <input type="text" name="location" value="{{$setting->location}}" class="form-control">
                            </fieldset>
                        </div>
                        <div class="col-3">
                            <label for="TextInput" class="form-label">Currency</label>
                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <input type="text" name="currency" value="{{$setting->currency}}" class="form-control">
                            </fieldset>
                        </div>
                        <hr>
                        <div class="col-4">
                            <label for="TextInput" class="form-label">Email</label>
                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <input type="email" name="email" class="form-control" value="{{$setting->email}}">
                            </fieldset>
                        </div>

                        <div class="col-4">
                            <label for="TextInput" class="form-label">Phone</label>

                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-mobile"></i>
                                </div>
                                <input type="text" name="phone" class="form-control" value="{{$setting->phone}}">
                            </fieldset>
                        </div>

                        <div class="col-4">
                            <label for="TextInput" class="form-label">Other Phone</label>
                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input type="text" name="other_phone" class="form-control" value="{{$setting->other_phone}}">
                            </fieldset>
                        </div>

                        <hr>
                        <div class="col-3">
                            <label for="TextInput" class="form-label">Twitter Link</label>

                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-twitter"></i>
                                </div>
                                <input type="text" name="twitter" class="form-control" value="{{$setting->twitter}}">
                            </fieldset>

                        </div>

                        <div class="col-3">
                            <label for="TextInput" class="form-label">Facebook Linke</label>

                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-facebook"></i>
                                </div>
                                <input type="text" name="facebook" class="form-control" value="{{$setting->facebook}}">
                            </fieldset>

                        </div>

                        <div class="col-3">
                            <label for="TextInput" class="form-label">Instagram Link</label>
                            <fieldset class="form-icon-group right-icon position-relative">
                                <div class="form-icon position-absolute">
                                    <i class="fa fa-instagram"></i>
                                </div>
                                <input type="text" name="instagram" class="form-control" value="{{$setting->instagram}}">
                            </fieldset>
                        </div>
                        <hr>
                        <div class="col-3">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Header Logo</h6>
                                        <input type="file"  name="logo_header" class="dropify"  data-default-file="{{asset($setting->logo_header)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>Footer Logo</h6>
                                        <input type="file"  name="logo_footer" class="dropify"  data-default-file="{{asset($setting->logo_footer)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>FavIcon</h6>
                                        <input type="file"  name="favicon" class="dropify"  data-default-file="{{asset($setting->favicon)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h6>About US Image</h6>
                                        <input type="file"  name="aboutus_image" class="dropify"  data-default-file="{{asset($setting->aboutus_image)}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12">
                            <label for="TextInput" class="form-label">Terms Conditions</label>
                            <textarea class="form-control" rows="10" name="terms_conditions">{{$setting->terms_conditions}}</textarea>

                        </div>
                        <hr>
                        <div class="col-12">
                            <label for="TextInput" class="form-label">Privacy</label>
                            <textarea class="form-control" rows="10" name="privacy">{{$setting->privacy}}</textarea>
                        </div>
                        <hr>
                        <div class="col-12">
                            <label for="TextInput" class="form-label">About App</label>
                            <textarea class="form-control" rows="10" name="about_app" >{{$setting->about_app}}</textarea>

                        </div>
                        <hr>
                        <div class="col-12">
                            <label for="TextInput" class="form-label">Footer Text</label>
                            <textarea class="form-control" rows="5" name="footer_text">{{$setting->footer_text}}</textarea>
                        </div>

                        <div class="col-12 modal-footer">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <button class="btn btn-outline-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


@push('style')
@endpush