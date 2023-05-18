@extends('master')

@section('title', 'Project Categories')

@section('content')


    <div class="content">
        <div class="content-section overflow-hidden wf-section">
            <div class="spacer-2xlarge"></div>
            <div class="content-wrapper">
                <div class="section-title-wrapper">
                    <h1 class="secton-title">Work</h1>
                </div>
                <div class="spacer-medium"></div>
                <div class="w-dyn-list">
                    <div role="list" class="cms-filter w-dyn-items">
                        <div role="listitem" class="w-dyn-item">
                            <div class="magnetic-link">
                                <a href="#" class="cms-filter-link w-inline-block">
                                    <div class="magnetic-item">
                                        <div class="link-overflow">
                                            <div class="link-label"></div>
                                            <div class="link-label on-hover"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-dyn-empty">
                        <div>No items found.</div>
                    </div>
                </div>
                <div class="spacer-medium"></div>
                <div class="cms-work-wrapper w-dyn-list">
                    <div role="list" class="cms-work-list w-dyn-items">
                        <div role="listitem" class="cms-work-item w-dyn-item">
                            <a data-w-id="00be540e-22d7-9013-aa4a-86d289b131b0" href="#"
                                class="work-thumb-wrapper w-inline-block"><img loading="lazy" src="" alt=""
                                    class="thumbnail-image"><img loading="lazy" style="opacity:0" src=""
                                    alt="" class="thumbnail-image-hover">
                                <div class="work-thumb-title-copy"></div>
                            </a>
                        </div>
                    </div>
                    <div class="w-dyn-empty">
                        <div>No items found.</div>
                    </div>
                </div>
            </div>
            <div class="spacer-xlarge"></div>
        </div>
        <div data-w-id="5559a037-86cf-5206-779b-5886b9d5a8d4" class="rounded-div-wrapper">
            <div class="rounded-div">
                <div class="rounded-div-background"></div>
            </div>
        </div>
    </div>
@endsection
