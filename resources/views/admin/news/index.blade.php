@extends('layouts.admin.app')
@section('content')

<div class="container-fluid p-0 mx-auto mt-5" style="max-width: 1140px;">
  <div class="card h-100 p-0 radius-12 overflow-hidden">
    <div class="card-body p-24">
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
          <div class="row gy-4">
            <div class="card-body">
              <div class="bg-primary-50 px-4 py-3 radius-8 mb-6">
                <h6 class="fw-semibold mb-0 text-center"> News And Blog </h6>
             </div>
              <div class="table-responsive">
                <table class="table bordered-table mb-0">
                    <div style="text-align: right;">
                        <a href="{{route('admin.create_news')}}" class="btn btn-primary-100 text-primary-600 radius-8 px-20 py-11 mb-5" style="display: inline-block; ">Add</a>
                    </div>         
                        <thead>
                    <tr>
                      <th scope="col">Image</th>
                      <th scope="col">Headline</th>
                      <th scope="col">Description</th>
                      <th scope="col">Date</th>
                      <th scope="col">Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($news as $item)
                    <tr>
                      <td>
                        <img src="{{ $item->img }}" alt="{{ $item->title }}" width="100px">
                      </td>
                      <td>{{ $item->headline }}</td>
                      <td>{{ \Illuminate\Support\Str::words($item->description, 3) }}</td>

                      <td>{{ $item->date }}</td>

                      <td>
                        <a href="{{route('admin.news_edit',['id'=>$item->id])}}" class="w-32-px h-32-px bg-primary-light text-primary-600 rounded-circle d-inline-flex align-items-center justify-content-center">
                          <iconify-icon icon="ph:file-pdf-thin"></iconify-icon> Edit
                        </a>

                        <a href="{{route('admin.news_delete',['id'=>$item->id])}}" onclick="return confirm('Are you sure you want to delete this item?')" class="w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center">
                          <iconify-icon icon="mingcute:delete-2-line"></iconify-icon> Delete
                        </a>
                      </td>
                    </tr>
                    @endforeach
                   
                  </tbody>
                </table>
              </div>
            </div>
      </div>
@endsection