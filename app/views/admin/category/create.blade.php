@extends('admin.layouts.master')

@section('page-title')
Create Category
@endsection

@section('breadcrumb')
<li>
    <a href="/admin/category">Categories</a>
    <i class="fa fa-angle-right"></i>
</li>
<li><span>Add New</span></li>
@endsection

@section('content')
<div class="row">
        <div class="col-md-12">
            <!-- BEGIN Portlet PORTLET-->
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase"> Add New Category</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;"> </a>
                    </div>
                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    @include('admin.layouts._partials.errors')
                    <form action="/admin/category" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-body">
                                    <div class="form-group {{ $errors->first('category_name') ? 'has-error' : null }}">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="category_name" id="category_name" class="form-control" value="{{ Input::old('category_name') }}">
                                        @if($errors->first('category_name'))
                                        <span class="help-block">
                                             {{ $errors->first('category_name') }}
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ Input::old('description') }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Parent Categories</label>
                                        <select name="parent_id" id="parent_id" class="form-control">
                                            <option value="0">- Select Parent Category -</option>
                                            @foreach($parentCategories as $parentCategory)
                                                <option value="{{ $parentCategory->id }}">{{ $parentCategory->category_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="#" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END FORM-->
                </div>
            </div>
            <!-- END Portlet PORTLET-->
        </div>
    </div>
@endsection