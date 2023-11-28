@extends('layouts.admin')
@section('detail_admin')
    <!--+----------+----------------+-----------------+------------------------------------+-------------------------------+-------------------------+--------------+------------+ -->
    <form action="/providers" method="POST" enctype="multipart/form-data">
        @csrf


        <div id="providers" class="container" style="margin-top:0px">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <p style="text-align: center; "> ::::: INSERT PROVIDERS ::::: </p>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="" autofocus value="{{ old('name') }}" class="form-control">
                    @error('name')
                        <small>*{{ $message }}</small>
                    @enderror 
                </div>
                <div class="col-md-6">
                    <label for="corporate_name">Corporate Name</label>
                    <input type="text" id="corporate_name" name="corporate_name" placeholder="" value="{{ old('corporate_name') }}" class="form-control">
                    @error('corporate_name')
                        <small>*{{ $message }}</small>
                    @enderror 
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="description">Description</label>
                    <input type="text" id="description" name="description" value="{{ old('description') }}" class="form-control">
                    @error('description')
                        <small>*{{ $message }}</small>
                    @enderror 
                </div>
                <div class="col-sm-6">
                    <label for="telephone">Telephone</label>
                    <input type="text" id="telephone" name="telephone" class="form-control">
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <label for="cell_phone">Cell Phone</label>
                    <input type="text" id="cell_phone" name="cell_phone" value="{{ old('cell_phone') }}" class="form-control">
                    @error('cell_phone')
                        <small>*{{ $message }}</small>
                    @enderror 
                </div>
                <div class="col-sm-6">
                    <label for="web_page">Web Page</label>
                    <input type="text" id="web_page" name="web_page" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="email_1">Email (first)</label>
                    <input type="text" id="email_1" name="email_1" value="{{ old('email_1') }}" class="form-control">
                    @error('email_1')
                    <small class="alert-danger">*{{ $message }}</small>
                    @enderror 
                </div>
                <div class="col-sm-6">
                    <label for="email_2">Email (second)</label>
                    <input type="text" id="email_2" name="email_2" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="contact_name_1">Contact name (first)</label>
                    <input type="text" id="contact_name_1" name="contact_name_1" value="{{ old('contact_name_1') }}" class="form-control">
                    @error('contact_name_1')
                        <small>*{{ $message }}</small>
                    @enderror 
                </div>
                <div class="col-sm-6">
                    <label for="contact_name_2">Contact name (second)</label>
                    <input type="text" id="contact_name_2" name="contact_name_2" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="path_image_logo">Logo</label>
                    <input type="file" id="path_image_logo" name="path_image_logo" class="form-control">
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <label for="slogan">Slogan</label>
                    <input type="text" id="slogan" name="slogan" class="form-control">
                </div>
                <div class="col-sm-6">
                    <label for="commentaries">Commentaries</label>
                    <textarea id="commentaries" name="commentaries" class="form-control" value="" size=10 rows=3 cols=35> </textarea>
                </div>
            </div>

            <div class="row" style="margin-top:10px">
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
