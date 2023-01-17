{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-th-list"></i> Users</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('home') }}"><i class="nav-icon la la-th-list"></i> Home</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('about') }}"><i class="nav-icon la la-th-list"></i> About</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('post') }}"><i class="nav-icon la la-th-list"></i> Posts</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('faqs') }}"><i class="nav-icon la la-th-list"></i> Faqs</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('testimonials') }}"><i class="nav-icon la la-th-list"></i> Testimonials</a></li>