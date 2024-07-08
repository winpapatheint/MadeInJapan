<x-auth-layout>
<div class="page-body">
    <!-- Product Detail Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Users Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form">
                                    <div class="mb-2 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Roles</label>
                                        <div class="col-sm-9">
                                            @if ($user->created_by)
                                                <p>sub seller</p>
                                            @else
                                            <p>{{ $user->role }}</p>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-2 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">User Name</label>
                                        <div class="col-sm-9">
                                            <p>{{ $user->name }}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Email</label>
                                        <div class="col-sm-9">
                                            <p>{{ $user->email }}</p>
                                        </div>
                                    </div>

                                    <div class="mb-2 row align-items-center">
                                        <label
                                            class="col-sm-3 col-form-label form-label-title">Phone</label>
                                        <div class="col-sm-9">
                                            @if ($user->role == 'buyer')
                                            <p>{{ $user->buyer->phone }}</p>
                                            @else
                                                @if ($user->created_by)
                                                <p>{{ $user->subSeller->phone }}</p>
                                                @else
                                                <p>{{ $user->seller->phone }}</p>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                    
                                    @if (!$user->created_by)
                                    <div class="mb-2 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Address</label>
                                        <div class="col-sm-9">
                                            @if ($user->role == 'buyer')
                                            @php
                                                $defaultAddress = $user->buyer->buyerAddresses->firstWhere('main_address', 1);
                                            @endphp
                                                <p>
                                                    {{ $defaultAddress->country->name }}
                                                    〒{{ $defaultAddress->post_code }}
                                                    {{ $defaultAddress->prefecture }}
                                                    {{ $defaultAddress->city }}
                                                    {{ $defaultAddress->chome }}
                                                    {{ $defaultAddress->building }}
                                                    {{ $defaultAddress->room_no }}
                                                </p>
                                            @else
                                                <p>
                                                    {{ $user->seller->country->name }}
                                                    〒{{ $user->seller->zip_code }}
                                                    {{ $user->seller->prefecture }}
                                                    {{ $user->seller->city }}
                                                    {{ $user->seller->chome }}
                                                    {{ $user->seller->building }}
                                                    {{ $user->seller->room }}
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product Detail End -->
</div>
</x-auth-layout>