@extends('shared.main_layout')

@section('styles')
    <link rel="stylesheet" href="{{asset('cesium/Widgets/widgets.css')}}">  
@stop
@section('scripts')
    <script src="{{asset('cesium/Cesium.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        Cesium.Ion.defaultAccessToken = 
    'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJqdGkiOiIzZTk4MzgxYi0yMmViLTQ4ZGQtOTE5Yy05NmRhNWI3MWZiM2IiLCJpZCI6MzM0MywiaWF0IjoxNTM3MDY1NzU2fQ.oXkTnacC0lxgGKj17FRFfUUVIHRtjO5Px6Dir8mVjGI';

    var viewer = new Cesium.Viewer('cesiumContainer', {
        fullscreenButton: false,
        timeline: false,
        infoBox: false

    });
    viewer.dataSources.add(Cesium.KmlDataSource.load('./kml/senadores.kmz',
     {
          camera: viewer.scene.camera,
          canvas: viewer.scene.canvas
     })
    );
    function updateMap(){
        viewer.dataSources.removeAll();
        viewer.dataSources.add(Cesium.KmlDataSource.load('./kml/senadores.kmz',
         {
              camera: viewer.scene.camera,
              canvas: viewer.scene.canvas
         })
        );
    }
    </script>
@stop
@section('content')
    <div id="cesiumContainer"></div>
@stop