@extends('layouts.adminkit')

@section('title', 'Typography')

@section('content')
    <h1 class="h3 mb-3"><strong>Typography</strong></h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Headings</h5>
                </div>
                <div class="card-body">
                    <h1>h1. Bootstrap heading</h1>
                    <h2>h2. Bootstrap heading</h2>
                    <h3>h3. Bootstrap heading</h3>
                    <h4>h4. Bootstrap heading</h4>
                    <h5>h5. Bootstrap heading</h5>
                    <h6>h6. Bootstrap heading</h6>
                </div>
            </div>

            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Body Text</h5>
                </div>
                <div class="card-body">
                    <p class="lead">Lead paragraph. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                    <p>Default paragraph. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <p><small>Small text. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</small></p>
                    <p><strong>Bold text.</strong> <em>Italic text.</em> <u>Underlined text.</u></p>
                    <p class="text-muted">Muted text example.</p>
                    <p class="text-primary">Primary color text.</p>
                    <p class="text-success">Success color text.</p>
                    <p class="text-danger">Danger color text.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
