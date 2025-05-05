@extends('layouts.app')

@section('content')
    <div class="flex items-center space-x-4">
        @if(request()->has('username'))
            <span class="text-sm text-gray-900 mr-4">Halo, {{ request()->get('username') }}</span>
        @endif
    </div>
@endsection
