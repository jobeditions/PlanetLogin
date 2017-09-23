@extends('layouts.app-admin')

@section('title')
        Tableau de Bord-Admin
      @endsection

      @section('links')
         @include('partials.admin.links')   
          
      @endsection

      @section('scripts')
         <script src="/js/jquery.js"></script>
         @include('partials.admin.scripts')   
          
      @endsection
