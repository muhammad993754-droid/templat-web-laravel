@extends('layouts.adminkit')

@section('title', 'Google Maps')

@section('content')
    <h1 class="h3 mb-3"><strong>Google</strong> Maps</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">World Vector Map</h5>
                </div>
                <div class="card-body">
                    <div id="world_map_full" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    var map = new jsVectorMap({
        map: "world",
        selector: "#world_map_full",
        zoomButtons: true,
        zoomOnScroll: false
    });
    window.addEventListener("resize", () => { map.updateSize(); });
});
</script>
@endpush
