@extends('admin::layouts.content')

@section('page_title')
    {{ __('admin::app.settings.development.title') }}
@stop

@section('content')
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h1>{{ __('admin::app.settings.development.title') }}</h1>
            </div>
        </div>

        <div class="page-content">
            <a href="{{ route('admin.development.tools.webconsole') }}" class="development-dashboard-tool-title-link" target="_blank">
                <div class="rad-info-box">
                    <p>
                        <span class="heading">{{ __('admin::app.settings.development.tools.webconsole') }}</span>
                    </p>
                    <p>
                        <i class="icon cms-icon"></i>
                    </p>
                </div>
            </a>
        </div>
    </div>
@stop