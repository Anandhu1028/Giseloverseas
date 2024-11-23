@extends('layouts.admin.app')
@section('content')
<div class="container-fluid p-0 mx-auto mt-5" style="max-width: 1140px;">
    <div class="card h-100 p-0 radius-12 overflow-hidden">
        <div class="card-body p-4">
            <div class="bg-primary-50 px-4 py-3 radius-8 mb-6">
                <h6 class="fw-semibold mb-0 text-center"> Create a New Item </h6>
             </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
                    <div class="row gy-4">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <form class="form-floating" action="{{route('admin.news_store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div style="text-align: right;">
                                        <button type="submit" class="btn btn-primary-100 text-primary-600 radius-8 px-20 py-11 mb-2">Update</button>
                                        <a href="/admin/awards" class="btn btn-primary-100 text-primary-600 radius-8 px-20 py-11 mb-2">Cancel</a>
                                    </div>
                                    <div class="mb-4">
                                        <label for="headline" class="form-label">Headline</label>
                                        <input type="text" class="form-control" id="headline" placeholder="Name" name="headline" required>
                                    </div>
                                    <div class="mb-4">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control" id="description" placeholder="" name="description" required cols="30" rows="5"></textarea>
                                    </div>
                                    <div class="mb-4">
                                        <label for="published_date" class="form-label">Date</label>
                                        <input type="date" id="date" name="date" class="form-control" required>
                                    </div>
                                    
                                    <div class="mb-4">
                                        <label for="img" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="img" name="img" required>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection