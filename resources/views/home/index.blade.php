@extends('main')
@section('title','Home')
@section('content')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-6 mt-6">
    <div class="bg-black drop text-white p-6 rounded-lg">
     <div class="flex justify-between items-center">
      <div>
       <div class="text-lg">
        Revenue Status
       </div>
       <div class="text-3xl font-bold">
        $432
       </div>
       <div class="text-sm">
        Jan 01 - Jan 10
       </div>
      </div>
      <i class="fas fa-chart-line text-4xl">
      </i>
     </div>
    </div>
    <div class="bg-black drop text-white p-6 rounded-lg shadow-lg">
     <div class="flex justify-between items-center">
      <div>
       <div class="text-lg">
        Page View
       </div>
       <div class="text-3xl font-bold">
        $432
       </div>
      </div>
      <i class="fas fa-eye text-4xl">
      </i>
     </div>
    </div>
    <div class="bg-black drop text-white p-6 rounded-lg shadow-lg">
     <div class="flex justify-between items-center">
      <div>
       <div class="text-lg">
        Bounce Rate
       </div>
       <div class="text-3xl font-bold">
        $432
       </div>
      </div>
      <i class="fas fa-chart-area text-4xl">
      </i>
     </div>
    </div>
    <div class="bg-black drop text-white p-6 rounded-lg shadow-lg">
     <div class="flex justify-between items-center">
      <div>
       <div class="text-lg">
        Revenue Status
       </div>
       <div class="text-3xl font-bold">
        $432
       </div>
       <div class="text-sm">
        Jan 01 - Jan 10
       </div>
      </div>
      <i class="fas fa-chart-line text-4xl">
      </i>
     </div>
    </div>
   </div>
@endsection
@push('css')
    <style>
        .drop{
            filter: drop-shadow(0px 0px 10px #00000054);
        }
    </style>
@endpush