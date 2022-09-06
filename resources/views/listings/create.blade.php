@extends('layout')

@section('content')
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="cta-content bg-white  rounded mt-4">
                    <h3 class="mb-4">Create Job</h3>
                    <form method="POST" action="/listings/store">
                        @csrf
                        <div class="form-group">
                            <label for="company">Company Name</label>
                            <input name="company" id="company" type="text" class="form-control"
                                placeholder="Company name" value={{old('company')}}>
                            @error('company')
                            <span class="text-danger "><em>{{$message}}</em></span>
                            @enderror
                        </div>
                        <div class="Job Title">
                            <label for="title">Job Title</label>
                            <input name="title" id="title" type="text" class="form-control"
                                placeholder="Example: Full Stack Developer" value={{old('title')}}>
                            @error('title')
                            <span class="text-danger "><em>{{$message}}</em></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">Job Location</label>
                            <input name="location" id="location" type="text" class="form-control"
                                placeholder="Example: On-site: Makati" value={{old('location')}}>
                            @error('location')
                            <span class="text-danger "><em>{{$message}}</em></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input name="website" id="website" type="text" class="form-control"
                                placeholder="Website/Application URL" value={{old('website')}}>
                            @error('website')
                            <span class="text-danger "><em>{{$message}}</em></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Contact Email</label>
                            <input name="email" id="email" type="text" class="form-control"
                                placeholder="Website/Application URL" value={{old('email')}}>
                            @error('email')
                            <span class="text-danger "><em>{{$message}}</em></span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tags">Tags (Comma separated)</label>
                            <input name="tags" id="tags" type="text" class="form-control"
                                placeholder="Example: html, css, laravel, full-stack" value={{old('tags')}}>
                            @error('tags')
                            <span class="text-danger "><em>{{$message}}</em></span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">
                            <label for="companylogo">Choose file to upload</label><br>
                            <input name="companylogo" id="companylogo" type="file">
                        </div> --}}
                        <div class="form-group-2 mb-4">
                            <label for="description">Job Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"
                                placeholder="Include tasks, requirements, salary, etc.">{{old('description')}}</textarea>
                            @error('description')
                            <span class="text-danger "><em>{{$message}}</em></span>
                            @enderror
                        </div>

                        <div class="form-group-2 mb-4 text-center">
                            <div class="row">
                                <div class="col-6">
                                    <button type="submit" class="btn btn-main w-100">Submit</button>
                                </div>
                                <div class="col-6">
                                    <a href="/listings" class="btn btn-secondary w-100"><i
                                            class="fa fa-angle-left mr-2"></i>back</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection