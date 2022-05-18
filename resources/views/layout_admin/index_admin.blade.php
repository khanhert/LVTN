@extends('master_admin')
@section('title','Admin')
@section('index_admin')
<div id="wrapper">
   @include('layout_admin.sidebar')
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      @include('layout_admin.topbar')

      <!-- Container Fluid-->
      <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
          </ol>
        </div>


        @include('layout_admin.modal_logout')
      </div>
      <!---Container Fluid-->
    </div>
    @include('layout_admin.footer')
  </div>
</div>

<!-- Scroll to top -->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
@endsection