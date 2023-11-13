@extends('layout.root')
@php($title = 'Home')
@section('content')
  <div class="flex-1 flex justify-center items-center text-center">
    <h1
      class="text-3xl font-bold underline bg-zinc-600 bg-gradient-to-r from-blue-500/90 to-green-500/90 p-2 bg-clip-text text-transparent inline-block">
      Hello world! TailwindCSS Test.
    </h1>
  </div>
@endsection
@push('scripts')
  <script type="text/javascript">
    console.log("Hello world! Testing scripts.");
  </script>
@endpush
