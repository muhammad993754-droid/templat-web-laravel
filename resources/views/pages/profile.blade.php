@extends('layouts.adminkit')

@section('title', 'Profile')

@section('content')
    <h1 class="h3 mb-3"><strong>Profile</strong></h1>

    <div class="row">
        {{-- Left column: profile card + friends --}}
        <div class="col-md-4 col-xl-3">
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Profile Details</h5>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('img/avatars/avatar.jpg') }}" alt="{{ auth()->user()->name ?? 'User' }}"
                        class="img-fluid rounded-circle mb-2" width="128" height="128" />
                    <h5 class="card-title mb-0">{{ auth()->user()->name ?? 'Charles Hall' }}</h5>
                    <div class="text-muted mb-2">{{ auth()->user()->email ?? 'charleshal@adminkit.io' }}</div>
                    <div>
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-sm">Edit Profile</a>
                        <a href="#" class="btn btn-outline-secondary btn-sm ms-1">Follow</a>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">About</h5>
                    <ul class="list-unstyled mb-0">
                        <li class="mb-1"><i class="align-middle me-1" data-feather="home"></i> <span class="text-muted">Lives in</span> <strong>San Francisco, CA</strong></li>
                        <li class="mb-1"><i class="align-middle me-1" data-feather="briefcase"></i> <span class="text-muted">Works at</span> <strong>AdminKit Inc.</strong></li>
                        <li class="mb-1"><i class="align-middle me-1" data-feather="calendar"></i> <span class="text-muted">Member since</span> <strong>{{ auth()->user()->created_at?->format('M Y') ?? now()->format('M Y') }}</strong></li>
                    </ul>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <h5 class="h6 card-title">Skills</h5>
                    <a href="#" class="badge bg-primary me-1 my-1">HTML</a>
                    <a href="#" class="badge bg-primary me-1 my-1">JavaScript</a>
                    <a href="#" class="badge bg-primary me-1 my-1">PHP</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Bootstrap</a>
                    <a href="#" class="badge bg-primary me-1 my-1">Laravel</a>
                </div>
            </div>

            {{-- Friends --}}
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">Friends <span class="badge bg-primary ms-1">6</span></h5>
                </div>
                <div class="card-body">
                    @php
                        $friends = [
                            ['name' => 'Vanessa Tucker', 'avatar' => 'avatar-5.jpg', 'mutual' => 5],
                            ['name' => 'William Harris', 'avatar' => 'avatar-2.jpg', 'mutual' => 3],
                            ['name' => 'Sharon Lessman', 'avatar' => 'avatar-3.jpg', 'mutual' => 8],
                            ['name' => 'Christina Mason', 'avatar' => 'avatar-4.jpg', 'mutual' => 2],
                            ['name' => 'Robin Wilson', 'avatar' => 'avatar-1.jpg', 'mutual' => 4],
                            ['name' => 'Leonard Lane', 'avatar' => 'avatar.jpg', 'mutual' => 1],
                        ];
                    @endphp
                    @foreach ($friends as $friend)
                    <div class="d-flex align-items-center mb-2">
                        <img src="{{ asset('img/avatars/' . $friend['avatar']) }}"
                            class="avatar img-fluid rounded-circle me-2"
                            width="36" height="36" alt="{{ $friend['name'] }}" />
                        <div class="flex-grow-1">
                            <strong class="d-block">{{ $friend['name'] }}</strong>
                            <span class="text-muted small">{{ $friend['mutual'] }} mutual friends</span>
                        </div>
                        <button class="btn btn-outline-primary btn-sm">Follow</button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{-- Main column: about + social feed --}}
        <div class="col-md-8 col-xl-9">
            {{-- About --}}
            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title mb-0">About</h5>
                </div>
                <div class="card-body h-100">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                    <p class="mb-0">Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium.</p>
                </div>
            </div>

            {{-- New post --}}
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex">
                        <img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                            width="40" height="40" alt="{{ auth()->user()->name ?? 'User' }}" />
                        <div class="flex-grow-1">
                            <textarea class="form-control" rows="2" placeholder="What's on your mind?"></textarea>
                            <div class="mt-2 d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="#" class="text-muted me-2"><i data-feather="image"></i> Photo</a>
                                    <a href="#" class="text-muted me-2"><i data-feather="video"></i> Video</a>
                                    <a href="#" class="text-muted"><i data-feather="map-pin"></i> Location</a>
                                </div>
                                <button class="btn btn-primary btn-sm">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Post 1: with photo --}}
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                            width="40" height="40" alt="{{ auth()->user()->name ?? 'User' }}" />
                        <div>
                            <strong>{{ auth()->user()->name ?? 'Charles Hall' }}</strong>
                            <div class="text-muted small">2 hours ago &bull; <i data-feather="globe" style="width:12px;height:12px;"></i></div>
                        </div>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a href="#" class="text-muted" data-bs-toggle="dropdown"><i data-feather="more-horizontal"></i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="edit-2"></i> Edit Post</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="align-middle me-1" data-feather="trash-2"></i> Delete Post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Just finished building a new feature for our dashboard. Excited to share it with everyone! 🚀</p>
                    <img src="{{ asset('img/photos/unsplash-1.jpg') }}" alt="Post photo" class="img-fluid rounded mb-3" />
                    <div class="d-flex justify-content-between text-muted small mb-2">
                        <span>24 Likes &bull; 8 Comments</span>
                        <span>3 Shares</span>
                    </div>
                    <hr class="my-2" />
                    <div class="d-flex justify-content-around">
                        <a href="#" class="text-muted d-flex align-items-center gap-1 text-decoration-none">
                            <i data-feather="thumbs-up"></i> Like
                        </a>
                        <a href="#" class="text-muted d-flex align-items-center gap-1 text-decoration-none">
                            <i data-feather="message-square"></i> Comment
                        </a>
                        <a href="#" class="text-muted d-flex align-items-center gap-1 text-decoration-none">
                            <i data-feather="share-2"></i> Share
                        </a>
                    </div>
                    <hr class="my-2" />
                    {{-- Comments --}}
                    <div class="mt-3">
                        <div class="d-flex mb-2">
                            <img src="{{ asset('img/avatars/avatar-5.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                                width="32" height="32" alt="Vanessa Tucker" />
                            <div class="bg-light rounded p-2 flex-grow-1">
                                <strong class="d-block small">Vanessa Tucker</strong>
                                <span class="small">Looks amazing! Great work 🎉</span>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <img src="{{ asset('img/avatars/avatar-2.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                                width="32" height="32" alt="William Harris" />
                            <div class="bg-light rounded p-2 flex-grow-1">
                                <strong class="d-block small">William Harris</strong>
                                <span class="small">Can't wait to see it live! 🙌</span>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                                width="32" height="32" alt="{{ auth()->user()->name ?? 'User' }}" />
                            <div class="flex-grow-1 d-flex gap-2">
                                <input type="text" class="form-control form-control-sm" placeholder="Write a comment…" />
                                <button class="btn btn-primary btn-sm">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Post 2: photo gallery --}}
            <div class="card mb-3">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                            width="40" height="40" alt="{{ auth()->user()->name ?? 'User' }}" />
                        <div>
                            <strong>{{ auth()->user()->name ?? 'Charles Hall' }}</strong>
                            <div class="text-muted small">Yesterday &bull; <i data-feather="globe" style="width:12px;height:12px;"></i></div>
                        </div>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a href="#" class="text-muted" data-bs-toggle="dropdown"><i data-feather="more-horizontal"></i></a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="edit-2"></i> Edit Post</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="align-middle me-1" data-feather="trash-2"></i> Delete Post</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p>Team outing last weekend — great times with great people! 📸</p>
                    <div class="row g-1 mb-3">
                        <div class="col-8">
                            <img src="{{ asset('img/photos/unsplash-2.jpg') }}" alt="Photo 1" class="img-fluid rounded" style="height:200px;object-fit:cover;width:100%;" />
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('img/photos/unsplash-3.jpg') }}" alt="Photo 2" class="img-fluid rounded" style="height:200px;object-fit:cover;width:100%;" />
                        </div>
                    </div>
                    <div class="d-flex justify-content-between text-muted small mb-2">
                        <span>41 Likes &bull; 12 Comments</span>
                        <span>7 Shares</span>
                    </div>
                    <hr class="my-2" />
                    <div class="d-flex justify-content-around">
                        <a href="#" class="text-muted d-flex align-items-center gap-1 text-decoration-none">
                            <i data-feather="thumbs-up"></i> Like
                        </a>
                        <a href="#" class="text-muted d-flex align-items-center gap-1 text-decoration-none">
                            <i data-feather="message-square"></i> Comment
                        </a>
                        <a href="#" class="text-muted d-flex align-items-center gap-1 text-decoration-none">
                            <i data-feather="share-2"></i> Share
                        </a>
                    </div>
                    <hr class="my-2" />
                    <div class="mt-3">
                        <div class="d-flex mb-2">
                            <img src="{{ asset('img/avatars/avatar-4.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                                width="32" height="32" alt="Christina Mason" />
                            <div class="bg-light rounded p-2 flex-grow-1">
                                <strong class="d-block small">Christina Mason</strong>
                                <span class="small">Such a great day! Thanks for organizing 😊</span>
                            </div>
                        </div>
                        <div class="d-flex mb-2">
                            <img src="{{ asset('img/avatars/avatar-3.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                                width="32" height="32" alt="Sharon Lessman" />
                            <div class="bg-light rounded p-2 flex-grow-1">
                                <strong class="d-block small">Sharon Lessman</strong>
                                <span class="small">Best team ever! 🏆</span>
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <img src="{{ asset('img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded-circle me-2"
                                width="32" height="32" alt="{{ auth()->user()->name ?? 'User' }}" />
                            <div class="flex-grow-1 d-flex gap-2">
                                <input type="text" class="form-control form-control-sm" placeholder="Write a comment…" />
                                <button class="btn btn-primary btn-sm">Post</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
