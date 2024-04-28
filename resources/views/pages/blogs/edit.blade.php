@extends('layout.common-sidenav-layout')


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Post</div>

                <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        {{-- @method('PUT') --}}
                        
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" name="title" value="{{old('title', $post->title) }}"vid="title" class="form-control" >
                            @error('title')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control">{{ old('description', $post->description) }}</textarea>
                            @error('description')
                            <p class="alert-danger ">{{ $message }}</p>
                            @enderror
                        </div>
                        <!-- Category -->
                        <div class="form-group">
                        <label for="category">Category:</label>
                        <select name="category" id="category" class="form-control">
                            <option value="" disabled selected>Select Category</option>
                            <option value="technology" @if (old('category', $post->category) == 'technology') selected @endif>Technology</option>
                    <option value="lifestyle" @if (old('category', $post->category) == 'lifestyle') selected @endif>Lifestyle</option>
                    <option value="travel" @if (old('category', $post->category) == 'travel') selected @endif>Travel</option>
                    <option value="fashion" @if (old('category', $post->category) == 'fashion') selected @endif>Fashion</option>
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
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="PHP" {{ in_array('PHP', $post->tags) ? 'checked' : '' }}>
                                    <span class="ml-2">PHP</span>
                                </label>
                                <label class="inline-flex items-center mr-4">
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="JS" {{ in_array('JS', $post->tags) ? 'checked' : '' }}>
                                    <span class="ml-2">JS</span>
                                </label>
                                <label class="inline-flex items-center mr-4">
                                    <input type="checkbox" class="form-checkbox text-blue-500" name="tags[]" value="Python" {{ in_array('Python', $post->tags) ? 'checked' : '' }}>
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
                                <input class="form-check-input" type="radio" name="status" id="published" value="published" {{ $post->status == 'published' ? 'checked' : '' }}>
                                <label class="form-check-label" for="published">Published</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="draft" value="draft" {{ $post->status == 'draft' ? 'checked' : '' }}>
                                <label class="form-check-label" for="draft">Draft</label>
                            </div>
                        </div>

                    <!-- Featured Image Field -->
                    <div> 
                        <img id="featuredImageDisplay" src="{{ asset('images/' . $post->featured_image) }}" alt="Featured Image"  width="200" height="200">
                    </div>
                    <div class="mb-4">
                        <label for="featuredImage" class="block text-sm font-medium">Featured Image</label>
                        <input type="file" id="featuredImage" name="featured_image"
                            class="mt-1 p-2 w-full bg-gray-800 text-white rounded-md shadow-sm focus:outline-none focus:border-blue-300">
                        @error('featured_image')
                            <p class="text-red-500">{{ $message }}</p>
                        @enderror
                    </div>           


                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    
    document.getElementById("featuredImage")
    .addEventListener("change", function () {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            document.querySelector("#featuredImageDisplay").src = reader.result;
            featuredImageDisplay.classList.remove("hidden");
        });
        reader.readAsDataURL(this.files[0]);
    });
</script>


