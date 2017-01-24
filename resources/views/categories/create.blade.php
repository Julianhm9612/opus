@extends('layouts.app')

@section('content')
    <div style="background-color: #f8f8f8; border-bottom: 1px solid #E0E0E0;">
        <div class="container">
            <div class="subnav">
                <ul class="list-unstyled list-inline" style="margin-bottom: 0;">
                    <li>
                        <a href="{{ route('organizations.categories.index', [$organization->slug, ]) }}">Categories</a>
                    </li>
                    <li class="active">
                        <a href="{{ route('organizations.categories.create', [$organization->slug, ]) }}">Create category</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 30px;">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-7 col-md-offset-2 col-lg-6 col-lg-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="text-center" style="font-weight: 300; margin-bottom: 5px;">Create a new <span style="font-weight: 500;">Category</span></h2>
                        <p class="text-center">Wikis are divided into categories so you can interact with wikis more conveniently.</p>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('organizations.categories.store', [$organization->slug]) }}" method="POST" role="form" id="create-category-form" data-toggle="validator">
                            <div class="form-group">
                                <label for="category-name" class="control-label">Category name</label>
                                <input type="text" name="category_name" class="form-control input" id="category-name" data-error="Category name is required." required>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group pull-right" style="margin-bottom: 0;">
                                <button type="submit" class="btn btn-success">Create</button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection