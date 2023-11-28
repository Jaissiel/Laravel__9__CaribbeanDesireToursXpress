@extends('layouts.admin')
@section('detail_admin')
    <!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->
    
    <form action="/providers/{{ $providers->id }}" method="POST" enctype="multipart/form-data" >
            @csrf
            @method('PUT')

        <div id="providers" class="container" style="margin-top:0px">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <p style="text-align: center; "> ::::: EDIT PROVIDERS ::::: </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ $providers->name }}" placeholder="" autofocus class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="corporate_name">Corporate Name</label>
                    <input type="text" id="corporate_name" name="corporate_name" value="{{ $providers->corporate_name }}" placeholder="" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" value="{{ $providers->description }}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="telephone">Telephone</label>
                    <input type="text" id="telephone" name="telephone" value="{{ $providers->telephone }}" class="form-control">
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <label for="cell_phone">Cell Phone</label>
                    <input type="text" id="cell_phone" name="cell_phone" value="{{ $providers->cell_phone }}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="web_page">Web Page</label>
                    <input type="text" id="web_page" name="web_page" value="{{ $providers->web_page}}" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="email_1">Email (first)</label>
                    <input type="text" id="email_1" name="email_1" value="{{ $providers->email_1 }}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="email_2">Email (second)</label>
                    <input type="text" id="email_2" name="email_2" value="{{ $providers->email_2 }}" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="contact_name_1">Contact name (first)</label>
                    <input type="text" id="contact_name_1" name="contact_name_1" value="{{ $providers->contact_name_1 }}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="contact_name_2">Contact name (second)</label>
                    <input type="text" id="contact_name_2" name="contact_name_2" value="{{ $providers->contact_name_2 }}" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" value="{{ $providers->address }}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="path_image_logo">Logo</label>
                    <input type="file" id="path_image_logo" name="path_image_logo" value="{{ $providers->path_image_logo }}" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="slogan">Slogan</label>
                    <input type="text" id="slogan" name="slogan" value="{{ $providers->slogan }}" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="commentaries">Commentaries</label>
                    <textarea id="commentaries" name="commentaries" class="form-control" value="{{ $providers->commentaries }}" size=10 rows=3 cols=35> </textarea>
                </div>
            </div>

            <div class="row">
                <div class="form-group  col-sm-3">
                    <input type="reset" class="btn btn-primary" value=" ::::: R E S E T ::::: ">
                </div>
                <div class="form-group  col-sm-9">
                    <button type="submit" class="btn btn-primary">::::: G U A R D A R :::::</button>
                </div>
            </div>


        </div>


    </form>


    <!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->
@endsection
