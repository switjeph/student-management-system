@extends('layouts.app')

@section('content')
    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-danger">*</label>
                        <input type="text" name="name" class="border-3 form-control @error('name') is-invalid @enderror" placeholder="Student's Name" value="{{ old('name') }}"
                            style="height: 55px;">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-danger">*</label>
                        <input type="text" name="email" class="border-3 form-control @error('email') is-invalid @enderror" placeholder="Student's Email" value="{{ old('email') }}"
                            style="height: 55px;">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-danger">*</label>
                        <input type="text" name="learning_track" class="border-3 form-control @error('learning_track') is-invalid @enderror" placeholder="Learning Track" value="{{ old('learning_track') }}"
                            style="height: 55px;">
                        @error('learning_track')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label text-danger">*</label>
                        <input type="number" name="phone_no" class="border-3 form-control @error('phone_no') is-invalid @enderror" placeholder="Phone Number" value="{{ old('phone_no') }}"
                            style="height: 55px;">
                        @error('phone_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="twitter_username" class="border-3 form-control @error('twitter_username') is-invalid @enderror"
                            placeholder="Twitter Username" value="{{ old('twitter_username') }}" style="height: 55px;">
                        @error('twitter_username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" name="linkedin_username" class="border-3 form-control @error('linkedin_username') is-invalid @enderror"
                            placeholder="Linkedin Username" value="{{ old('linkedin_username') }}" style="height: 55px;">
                        @error('linkedin_username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Student's Picture <span
                                class="text-danger">*</span></label>
                        <input type="file" name="image" class="border-3 form-control @error('image') is-invalid @enderror">
                        <small class="text-danger">Image should not be more than 3mb</small>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>

            </div>

            <div class="gap-3 mt-3 d-flex justify-content-end">
                <button type="button" class="btn btn-outline-secondary" onclick="history.back()">Back</button>
                <button type="submit" class="btn add-student">Submit</button>
            </div>
        </div>
    </form>
@endsection
