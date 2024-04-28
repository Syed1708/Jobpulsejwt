@extends('layout.common-sidenav-layout')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Post</div>

                <div class="card-body">
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" value="{{ old('title')}}" id="title" class="form-control" >
                            @error('title')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description') }}</textarea>
                            @error('description')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Category -->
                        <div class="form-group">
                        <label for="category">Category:</label>
                        <select name="category" id="category" class="form-control">
                            <option value="" disabled selected>Select Category</option>
                            <option value="technology" {{ old('category') == 'technology' ? 'selected' : '' }}>Technology</option>
                    <option value="lifestyle" {{ old('category') == 'lifestyle' ? 'selected' : '' }}>Lifestyle</option>
                    <option value="travel" {{ old('category') == 'travel' ? 'selected' : '' }}>Travel</option>
                    <option value="fashion" {{ old('category') == 'fashion' ? 'selected' : '' }}>Fashion</option>
                            {{-- @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach --}}
                        </select>
                        @error('category')
                        <p class="alert-danger ">{{ $message }}</p>
                        @enderror

                        </div>
                        <div class="mb-4">
                            <label class="block text-sm font-medium">Tags</label>
                            <div class="flex flex-wrap">
                                <label class="inline-flex items-center mr-4">
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="PHP" {{ in_array('PHP', old('tags', [])) ? 'checked' : '' }}>
                                    <span class="ml-2">PHP</span>
                                </label>
                                
                                <label class="inline-flex items-center mr-4">
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="JS" {{in_array('JS', old('tags', [])) ? 'checked' : '' }}>
                                    <span class="ml-2">JS</span>
                                </label>
                                <label class="inline-flex items-center mr-4">
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="Python" {{ in_array('Python', old('tags', [])) ? 'checked' : '' }}>
                                    <span class="ml-2">Python</span>
                                </label>
                            </div>
                            @error('tags')
                            <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                      
                        <!-- Status Checkbox -->
                        <div class="form-group">
                            <label>Status:</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="published" value="published" {{ old('status') == 'published' ? 'checked' : '' }}>
                                <label class="form-check-label" for="published">Published</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="draft" value="draft" {{ old('status') == 'draft' ? 'checked' : '' }}>
                                <label class="form-check-label" for="draft">Draft</label>
                            </div>
                        </div>
                <!-- Featured Image Field -->
                <div class="mb-4">
                    <img id="featuredImageDisplay" alt="Featured Image" class="w-64 hidden">
                    <label for="featuredImage" class="block text-sm font-medium">Featured Image</label>
                    <input type="file" id="featuredImage" name="featured_image"
                        class="mt-1 p-2 w-full bg-gray-800 text-white rounded-md shadow-sm focus:outline-none focus:border-blue-300">
                        @error('featuredImage')
                        <p class="alert-danger ">{{ $message }}</p>
                        @enderror
                </div>           


                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




