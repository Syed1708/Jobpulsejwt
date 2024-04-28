@extends('layout.common-sidenav-layout')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card px-5 py-5">
                    <div class="row justify-content-between ">
                        <div class="align-items-center col">
                            <h4>Blog Posts</h4>
                        </div>
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                
                                <h4 class="alert-heading">{{ session('success') }}</h4>
                              </div>
                            @endif
                        <div class="align-items-center col">
                            <a href="{{ route('posts.create') }}" class="float-end btn m-0 bg-gradient-primary">Create</a>
                        </div>
                    </div>
                    <hr class="bg-dark"/>
                   
                        <table class="table" id="tableData">
                            <thead>
                                <tr class="bg-light">
                                    <th>#</th>
                                    <th>Post Title</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th>Published Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="tableList">
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ ucwords($post->category) }}</td>
                                        <td>
                                            {{ ucwords(implode(', ' ,$post->tags)) }}
                                         </td>
                                         
                                    
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        
                                        <td>
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">View</a>
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    

                </div>
            </div>
        </div>
    </div>
@endsection




