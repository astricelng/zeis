@extends('www.layouts.master')

@push('meta-data')

    <title>@lang('pages/'.$page->localization_file.'.page-title') - {{ config('app.name') }}</title>

    <!-- BASE META DATA -->
    <meta name="title" property="title" content="@lang('pages/'.$page->localization_file.'.metadata.base.title')" />
    <meta name="description" property="description" content="@lang('pages/'.$page->localization_file.'.metadata.base.description')" />
    <meta name="keywords" property="keywords" content="@lang('pages/'.$page->localization_file.'.metadata.base.keywords')" />

    <!-- FACEBOOK OG META DATA -->
    <meta property="og:title" content="@lang('pages/'.$page->localization_file.'.metadata.og.title')" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta property="og:type" content="@lang('pages/'.$page->localization_file.'.metadata.og.type')" />
    <meta property="og:description" content="@lang('pages/'.$page->localization_file.'.metadata.og.description')" />
    <meta property="og:site_name" content="@lang('pages/'.$page->localization_file.'.metadata.og.site-name')" />

    <!-- TWITTER META DATA -->
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@lang('pages/'.$page->localization_file.'.metadata.twitter.title')" />
    <meta name="twitter:description" content="@lang('pages/'.$page->localization_file.'.metadata.twitter.description')" />
    <meta name="twitter:url" content="{{ request()->url() }}" />

@endpush

@push('styles')
    <link href="{{ asset('/assets/www/css/pages/'.$page->style_file.'.css') }}" rel="stylesheet">
@endpush