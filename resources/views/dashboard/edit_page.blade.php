@section('title','Edit Page')
@extends('layouts.dashboard')
@section('content')
<div class="container-fluid">
    @error('heading')
                  <div class="alert-danger">{{ $message }}</div>
                  @enderror
                 <!--  @error('slug')
                  <div class="alert-danger">{{ $message }}</div>
                  @enderror -->
    <form action="{{ route('update_page',$pages->id)}}" method="post">
        @csrf
        @method('PUT')
                    <button type="button" class="btn btn-block as-seo-btn" data-toggle="collapse" data-target="#demo"><i
                            class="fa fa-angle-down"></i> SEO Content</button>
                    <div id="demo" class="collapse as-seo-content-label">
                        <label for="fname" class="mt-4">Meta Title</label>
                        <input type="text" id="meta-title" name="seo_title" value="{{ $pages->seo_title }}" class="form-control"><br>
                        <label for="lname">Meta Description</label>
                        <input type="text" id="meta-description" name="seo_desc" value="{{ $pages->seo_desc }}" class="form-control"><br>
                        <label for="fname">Meta keywords</label>
                        <input type="text" id="meta-keyboard" name="seo_keywords" value="{{ $pages->seo_keywords }}" class="form-control"><br>
                        <label for="lname">Canonical Tag </label>
                        <input type="text" id="canonical-tag" name="cnonical_tag" value="{{ $pages->cnonical_tag }}" class="form-control"><br>
                        <label for="fname">Google Plus Title Content</label>
                        <input type="text" id="gptc" name="gp_title" value="{{ $pages->gp_title }}" class="form-control"><br>
                        <label for="lname">Google Plus Description Content</label>
                        <input type="text" id="gpdc" name="gp_desc" value="{{ $pages->gp_desc }}" class="form-control"><br>
                        <label for="fname">FBTitle Content</label>
                        <input type="text" id="fbtitle-content" name="fb_title" value="{{ $pages->fb_title }}" class="form-control"><br>
                        <label for="lname">FBDescription</label>
                        <input type="text" id="fb-description" name="fb_desc" value="{{ $pages->fb_desc }}" class="form-control"><br>
                        <label for="fname">Page Name(Breadcrumb)</label>
                        <input type="text" id="top-heading" name="heading"  value="{{ $pages->heading }}" class="form-control mb-4"><br>
                        <!-- <label for="fname">Slug</label>
                        <input type="text" id="slug" name="slug" value="{{ $pages->slug }}" class="form-control mb-4"><br> -->
                        <div class="row">
                            <div class="col-lg-3">
                                <label class="radio-inline">
                                    Footer Link
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="footer_link" @if($pages->footer_link == 1) checked @endif value="1">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="footer_link" @if($pages->footer_link == 0) checked @endif value="0">No
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline">
                                    Indexable
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="index" @if($pages->index == 1) checked @endif value="1">Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="index" @if($pages->index == 0) checked @endif value="0">No
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline">
                                    IsActiveDeal
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="deal" @if($pages->deal == 1) checked @endif value="1">Active
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="deal" @if($pages->deal == 0) checked @endif value="0">InActive
                                </label>
                            </div>
                            <div class="col-lg-3">
                                <label class="radio-inline">
                                    Status
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" @if($pages->status == 1) checked @endif value="1">Active
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="status" @if($pages->status == 0) checked @endif value="0">InActive
                                </label>
                            </div>
                        </div>

                        <!-- <div class="row mt-2">
                            <div class="col-lg-3">
                                <label for="fname">Breadcrumb</label>
                                <input type="text" name="brd" class="form-control"><br>
                            </div>
                            <div class="col-lg-6">
                                <label for="fname"></label>
                                <input type="url" name="brd" class="form-control" style="margin-top: 0.5rem;"><br>
                            </div>
                            <div class="col-lg-3">
                                <label for="fname"></label>
                                <input type="text" name="brd" class="form-control" style="margin-top: 0.5rem;"><br>
                            </div>
                        </div> -->
                    </div>

                    <button type="button" class="btn btn-block as-seo-btn mt-4" data-toggle="collapse"
                        data-target="#newtemplate"><i class="fa fa-angle-down"></i> New Template Content</button>
                    <div id="newtemplate" class="collapse as-seo-content-label">
                        <div class="row mt-4">
                            <!-- <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Header Type</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>H1</option>
                                        <option>H2</option>
                                        <option>H3</option>
                                        <option>H4</option>
                                        <option>H5</option>
                                        <option>H6</option>
                                    </select>
                                </div>
                            </div> -->

                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Header For Hero</label>
                                    <input type="text" id="header" name="hero_heading" value="{{ $pages->hero_heading }}" class="form-control"><br>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">IsContentVarition</label>
                                    <input type="checkbox" name="content_variation" @if($pages->content_variation == 1) checked @endif  value="1"><br>
                                </div>
                            </div>
                        </div>

                        
                        <label for="lname" >SubContent</label>
                        <textarea class="form-control" rows="2" id="comment"  name="subheading">{{ $pages->subheading }}</textarea>

                        <div class="container-fluid">
                            <div class="row">
                                <label for="lname" class="mt-4">Content</label>
                                <div class="col-lg-12 nopadding">
                                    <textarea id="txtEditor" name="content"> {{ $pages->content }}</textarea>
                                </div>
                            </div>
                        </div>




                    </div>
                    <input type="submit" name="submit">
            </form>
                </div>
@endsection