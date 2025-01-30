@extends('layouts.app')

@section('content')
    <form action="{{ route('update', $student) }}" method="post" enctype="multipart/form-data" class="mb-5">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="border-3 form-control @error('name') is-invalid @enderror" placeholder="Student's Name" value="{{$student->name}}"
                            style="height: 55px;">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="text" name="email" class="border-3 form-control @error('email') is-invalid @enderror" placeholder="Student's Email" value="{{$student->email}}"
                            style="height: 55px;">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Learning Track <span class="text-danger">*</span></label>
                        <input type="text" name="learning_track" class="border-3 form-control @error('learning_track') is-invalid @enderror" placeholder="Learning Track" value="{{$student->learning_track}}"
                            style="height: 55px;">
                        @error('learning_track')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                        <input type="number" name="phone_no" class="border-3 form-control @error('phone_no') is-invalid @enderror" placeholder="Phone Number" value="{{$student->phone_no}}"
                            style="height: 55px;">
                        @error('phone_no')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Twitter Username</label>
                        <input type="text" name="twitter_username" class="border-3 form-control @error('twitter_username') is-invalid @enderror"
                            placeholder="Twitter Username" value="{{$student->twitter_username}}" style="height: 55px;">
                        @error('twitter_username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Linkedin Username</label>
                        <input type="text" name="linkedin_username" class="border-3 form-control @error('linkedin_username') is-invalid @enderror"
                            placeholder="Linkedin Username" value="{{$student->linkedin_username}}" style="height: 55px;">
                        @error('linkedin_username')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-12">
                    <div class="mb-3">
                        <label for="" class="form-label">Upload Student's Picture</label>
                        <input type="file" name="image" class="border-3 form-control @error('image') is-invalid @enderror">
                        <small class="text-danger">Image should not be more than 3mb</small>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>

            </div>

            <div class="gap-3 mt-3 d-flex justify-content-between">
                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                <div>
                    <button type="button" class="btn btn-outline-secondary me-3" onclick="history.back()">Back</button>
                    <button type="submit" class="btn add-student">Update</button>
                </div>
            </div>
        </div>
    </form>


    <!-- Modal -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Student</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this student?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <form action="{{ route('destroy', $student) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
