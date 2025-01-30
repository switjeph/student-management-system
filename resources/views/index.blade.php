@extends('layouts.app')

@section('content')
    <div class="container pt-3 pb-5">
        <div class="mb-5 d-flex justify-content-end">

            <!-- add student modal trigger button -->
            <a href="{{ route('create') }}" class="btn add-student">
                Add Student
            </a>
        </div>

        {{-- students div --}}
        <div class="row g-5">
            @forelse ($students as $student )
                <div class="col-lg-4 col-md-6">
                <div class="rounded-3 row g-0 student-card">
                    <div class="col-10" style="min-height: 200px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute w-100 h-100" src="{{ asset('storage/'.$student->image) }}"
                                style="object-fit: cover;">
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="h-100 d-flex flex-column align-items-center justify-content-start bg-light">
                            <a class="btn" href="{{$student->linkedin_username?'https://www.linkedin.com/'.$student->linkedin_username : ''}}"><i class="fab fa-linkedin"></i></a>

                            <a class="btn" href="{{$student->twitter_username?'https://www.twitter.com/'.$student->twitter_username : ''}}"><i class="fab fa-twitter"></i></a>

                            <a class="btn" href="{{route('edit', $student)}}"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="p-4 bg-light">
                            <h4 class="text-uppercase">{{$student->name}}</h4>
                            <span class="mb-2 d-block"><b>Email: </b> {{$student->email}}</span>
                            <span class="mb-2 d-block"><b>Learning Track: </b>{{$student->learning_track}}</span>
                            <span class="d-block"><b>Phone: </b>{{$student->phone_no}}</span>
                        </div>
                    </div>

                </div>
            </div>
            @empty

            @endforelse

        </div>
    </div>
@endsection
