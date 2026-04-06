@extends('layouts.adminkit')

@section('title', 'Typography')

@section('content')
    <h1 class="h3 mb-3"><strong>Typography</strong></h1>

    <div class="row">
        <div class="col-12 col-lg-6">

            {{-- Headings --}}
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

            {{-- Display Headings --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Display Headings</h5>
                </div>
                <div class="card-body">
                    <p class="display-1 lh-1 mb-2">Display 1</p>
                    <p class="display-2 lh-1 mb-2">Display 2</p>
                    <p class="display-3 lh-1 mb-2">Display 3</p>
                    <p class="display-4 lh-1 mb-2">Display 4</p>
                    <p class="display-5 lh-1 mb-2">Display 5</p>
                    <p class="display-6 lh-1 mb-0">Display 6</p>
                </div>
            </div>

            {{-- Body Text --}}
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
                    <p class="text-danger mb-0">Danger color text.</p>
                </div>
            </div>

            {{-- Blockquote --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Blockquotes</h5>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote">
                        <p>A well-known quote, contained in a blockquote element.</p>
                    </blockquote>
                    <blockquote class="blockquote">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                    </blockquote>
                    <figure>
                        <blockquote class="blockquote">
                            <p>A well-known quote, contained in a blockquote element.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption>
                    </figure>
                </div>
            </div>

        </div>

        <div class="col-12 col-lg-6">

            {{-- Lists --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Lists</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <h6>Unordered</h6>
                            <ul>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <h6>Ordered</h6>
                            <ol>
                                <li>Lorem ipsum dolor sit amet</li>
                                <li>Consectetur adipiscing elit</li>
                                <li>Integer molestie lorem at massa</li>
                                <li>Facilisis in pretium nisl aliquet</li>
                            </ol>
                        </div>
                    </div>
                    <h6>Unstyled</h6>
                    <ul class="list-unstyled">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipiscing elit</li>
                        <li>Integer molestie lorem at massa</li>
                    </ul>
                    <h6>Inline</h6>
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">Lorem ipsum</li>
                        <li class="list-inline-item">&middot;</li>
                        <li class="list-inline-item">Phasellus iaculis</li>
                        <li class="list-inline-item">&middot;</li>
                        <li class="list-inline-item">Nulla volutpat</li>
                    </ul>
                </div>
            </div>

            {{-- Code & Pre --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Code</h5>
                </div>
                <div class="card-body">
                    <p>Inline code: <code>&lt;section&gt;</code> should be wrapped as inline.</p>
                    <p>User input: press <kbd>ctrl</kbd> + <kbd>,</kbd> to open settings.</p>
                    <p>Sample output: <samp>This text is meant to be treated as sample output from a computer program.</samp></p>
                    <pre><code>p {
    color: red;
    text-align: center;
}</code></pre>
                </div>
            </div>

            {{-- Abbreviations --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Abbreviations &amp; Description Lists</h5>
                </div>
                <div class="card-body">
                    <p><abbr title="attribute">attr</abbr> — hover for the full term.</p>
                    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> — smaller font-size abbreviation.</p>
                    <hr />
                    <dl class="row mb-0">
                        <dt class="col-sm-3">Description lists</dt>
                        <dd class="col-sm-9">A description list is perfect for defining terms.</dd>
                        <dt class="col-sm-3">Euismod</dt>
                        <dd class="col-sm-9">Vestibulum id ligula porta felis euismod semper.</dd>
                        <dt class="col-sm-3">Malesuada porta</dt>
                        <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>
                    </dl>
                </div>
            </div>

            {{-- Text Utilities --}}
            <div class="card mt-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Text Utilities</h5>
                </div>
                <div class="card-body">
                    <p class="text-start">Start aligned text on all viewport sizes.</p>
                    <p class="text-center">Center aligned text on all viewport sizes.</p>
                    <p class="text-end">End aligned text on all viewport sizes.</p>
                    <p class="text-truncate" style="max-width:250px">This text is very long and will be truncated because the element has a max-width set.</p>
                    <p class="fw-bold">Bold weight text.</p>
                    <p class="fw-normal">Normal weight text.</p>
                    <p class="fw-light">Light weight text.</p>
                    <p class="fst-italic">Italic text.</p>
                    <p class="text-decoration-underline">Underlined text.</p>
                    <p class="text-decoration-line-through mb-0">Strikethrough text.</p>
                </div>
            </div>

        </div>
    </div>
@endsection
