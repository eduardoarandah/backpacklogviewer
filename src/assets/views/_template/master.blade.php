@extends('backpack::layout')
@section('after_styles')    
    @include('log-viewer::_template.style')    
@append
@section('header')
    <section class="content-header">  
        
        <span class="text-muted pull-right hidden-xs">
            LogViewer - <span class="label label-info">version {{ log_viewer()->version() }}</span>
            by ARCANEDEV <sup>&copy;</sup>
        </span>

        <a class="logviewer-menu-item" href="{{ route('log-viewer::dashboard') }}">
          <i class="fa fa-dashboard"></i> Summary
        </a>
        <a class="logviewer-menu-item" href="{{ route('log-viewer::logs.list') }}">
          <i class="fa fa-archive"></i> Logs
        </a>
        
    </section>
@endsection
@section('after_scripts')    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.1/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.15.35/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        Chart.defaults.global.responsive      = true;        
        Chart.defaults.global.animationEasing = "easeOutQuart";
    </script>
    @yield('modals')
    @yield('scripts')
@endsection