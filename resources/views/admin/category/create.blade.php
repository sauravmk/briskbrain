@extends('layouts.master')

@section('title', 'Add Category')

@section('content')

<div class="container-fluid px-4">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header category-form-header">
                <h1 class="">Add Category</h1>
            </div>
            <div class="card-body">
                <form action="{{ url('admin/add-category')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Category Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" id="slug">
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"></textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="image">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="meta_title" class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" id="meta_title">
                        @error('meta_title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" id="meta_description"></textarea>
                        @error('meta_description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="meta_keywords" class="form-label">Meta Keywords</label>
                        <textarea name="meta_keywords" class="form-control @error('meta_keywords') is-invalid @enderror" id="meta_keywords"></textarea>
                        @error('meta_keywords')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <h6>Status Mode</h6>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="navbar_status">Navbar Status</label>
                            <input type="checkbox" name="navbar_status" id="navbar_status" value="1">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="status">Status</label>
                            <input type="checkbox" name="status" id="status" value="1">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
