
    <div class="modal fade" tabindex="-1" id="callingScreen" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="tyn-chat-call">
                    <div class="tyn-chat-cover">
                        <img src="<?php echo $this->url; ?>images/cover/1.jpg" alt="">
                    </div>
                    <div class="tyn-media-group tyn-media-vr tyn-media-center mt-n4 pb-4">
                        <div class="tyn-media tyn-size-xl tyn-circle border border-2 border-white">
                            <img src="<?php echo $this->url; ?>images/avatar/1.jpg" alt="">
                        </div>
                        <div class="tyn-media-col">
                            <div class="tyn-media-row has-dot-sap">
                                <span class="meta">Calling ...</span>
                            </div>
                            <div class="tyn-media-row">
                                <h6 class="name">Konstantin Frank</h6>
                            </div>
                        </div>
                    </div><!-- .tyn-media-group -->
                    <ul class="tyn-list-inline gap gap-3 m-auto py-4">
                        <li>
                            <button class="btn btn-light" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#videoCallingScreen">
                                <span>Switch To</span>
                                <!-- camera-video-fill -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                </svg>
                            </button>
                        </li>
                    </ul><!-- .tyn-list-inline -->
                    <ul class="tyn-list-inline gap gap-3 mx-auto py-4">
                        <li>
                            <button class="btn btn-icon btn-pill btn-light">
                                <!-- person-plus-fill -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-icon btn-pill btn-light">
                                <!-- mic-mute-fill -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                    <path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4.02 4.02 0 0 0 12 8V7a.5.5 0 0 1 1 0v1zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a4.973 4.973 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4zm3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3z" />
                                    <path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607zm-7.84-9.253 12 12 .708-.708-12-12-.708.708z" />
                                </svg>
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                <!-- telephone-x-fill -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </button>
                        </li>
                    </ul><!-- .tyn-list-inline -->
                </div><!-- .tyn-chat-call -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="videoCallingScreen" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="tyn-chat-call tyn-chat-call-video">
                    <div class="tyn-chat-call-stack">
                        <div class="tyn-chat-call-cover">
                            <img src="<?php echo $this->url; ?>images/v-cover/1.jpg" alt="">
                        </div>
                    </div><!-- .tyn-chat-call-stack -->
                    <div class="tyn-chat-call-stack on-dark">
                        <div class="tyn-media-group p-4">
                            <div class="tyn-media-col align-self-start pt-3">
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="meta">Talking With ...</span>
                                </div>
                                <div class="tyn-media-row">
                                    <h6 class="name">Konstantin Frank</h6>
                                </div>
                                <div class="tyn-media-row has-dot-sap">
                                    <span class="content">02:09 min</span>
                                </div>
                            </div>
                            <div class="tyn-media tyn-media-1x1_3 tyn-size-3xl border border-2 border-dark">
                                <img src="<?php echo $this->url; ?>images/v-cover/2.jpg" alt="">
                            </div>
                        </div><!-- .tyn-media-group -->
                        <ul class="tyn-list-inline gap gap-3 mx-auto py-4 justify-content-center  mt-auto">
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <!-- person-plus-fill -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="btn btn-icon btn-pill btn-light" data-bs-toggle="modal" data-bs-target="#callingScreen">
                                    <!-- camera-video-fill -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5z" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="btn btn-icon btn-pill btn-light">
                                    <!-- mic-mute-fill -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mic-mute-fill" viewBox="0 0 16 16">
                                        <path d="M13 8c0 .564-.094 1.107-.266 1.613l-.814-.814A4.02 4.02 0 0 0 12 8V7a.5.5 0 0 1 1 0v1zm-5 4c.818 0 1.578-.245 2.212-.667l.718.719a4.973 4.973 0 0 1-2.43.923V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 1 0v1a4 4 0 0 0 4 4zm3-9v4.879L5.158 2.037A3.001 3.001 0 0 1 11 3z" />
                                        <path d="M9.486 10.607 5 6.12V8a3 3 0 0 0 4.486 2.607zm-7.84-9.253 12 12 .708-.708-12-12-.708.708z" />
                                    </svg>
                                </button>
                            </li>
                            <li>
                                <button class="btn btn-icon btn-pill btn-danger" data-bs-dismiss="modal">
                                    <!-- telephone-x-fill -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-x-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zm9.261 1.135a.5.5 0 0 1 .708 0L13 2.793l1.146-1.147a.5.5 0 0 1 .708.708L13.707 3.5l1.147 1.146a.5.5 0 0 1-.708.708L13 4.207l-1.146 1.147a.5.5 0 0 1-.708-.708L12.293 3.5l-1.147-1.146a.5.5 0 0 1 0-.708z" />
                                    </svg>
                                </button>
                            </li>
                        </ul><!-- .tyn-list-inline -->
                    </div><!-- .tyn-chat-call-stack -->
                </div><!-- .tyn-chat-call -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="muteOptions">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body p-4">
                    <h4 class="pb-2">Mute conversation</h4>
                    <ul class="tyn-media-list gap gap-2">
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor15min">
                                <label class="form-check-label" for="muteFor15min"> For 15 minutes </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Hour" checked>
                                <label class="form-check-label" for="muteFor1Hour"> For 1 Hours </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteFor1Days" checked>
                                <label class="form-check-label" for="muteFor1Days"> For 1 Days </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="muteFor" id="muteForInfinity" checked>
                                <label class="form-check-label" for="muteForInfinity"> Until I turn back On </label>
                            </div>
                        </li>
                    </ul><!-- .tyn-media-list -->
                    <ul class="tyn-list-inline gap gap-3 pt-3">
                        <li>
                            <button class="btn btn-md btn-danger js-chat-mute">Mute</button>
                        </li>
                        <li>
                            <button class="btn btn-md btn-light" data-bs-dismiss="modal">Close</button>
                        </li>
                    </ul><!-- .tyn-list-inline -->
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <!-- x-lg -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </button>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="newChat">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body p-4">
                    <h4 class="pb-2">Search by Name</h4>
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <div class="form-control-icon start">
                                <!-- search -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                </svg>
                            </div>
                            <input type="text" class="form-control form-control-solid" id="search-contact" placeholder="Search contact">
                        </div>
                    </div>
                    <ul class="tyn-media-list gap gap-3 pt-4">
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="<?php echo $this->url; ?>images/avatar/1.jpg" alt="">
                                </div>
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Jasmine Thompson</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@thompson_jasmine</p>
                                    </div>
                                </div>
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <!-- three-dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <!-- chat-left-text -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <!-- telephone -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                        </svg>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <!-- camera-video -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                                                        </svg>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="<?php echo $this->url; ?>images/avatar/2.jpg" alt="">
                                </div>
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Konstantin Frank</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@konstantin_frank</p>
                                    </div>
                                </div>
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <!-- three-dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <!-- chat-left-text -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <!-- telephone -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                        </svg>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <!-- camera-video -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                                                        </svg>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="<?php echo $this->url; ?>images/avatar/3.jpg" alt="">
                                </div>
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Mathias Devos</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@mathias_devos</p>
                                    </div>
                                </div>
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <!-- three-dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <!-- chat-left-text -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <!-- telephone -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                        </svg>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <!-- camera-video -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                                                        </svg>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="<?php echo $this->url; ?>images/avatar/4.jpg" alt="">
                                </div>
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Marie George</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@marie_george</p>
                                    </div>
                                </div>
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <!-- three-dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <!-- chat-left-text -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <!-- telephone -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                        </svg>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <!-- camera-video -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                                                        </svg>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                        <li>
                            <div class="tyn-media-group">
                                <div class="tyn-media">
                                    <img src="<?php echo $this->url; ?>images/avatar/5.jpg" alt="">
                                </div>
                                <div class="tyn-media-col">
                                    <div class="tyn-media-row">
                                        <h6 class="name">Phillip Burke</h6>
                                    </div>
                                    <div class="tyn-media-row">
                                        <p class="content">@phillip_burke</p>
                                    </div>
                                </div>
                                <ul class="tyn-media-option-list me-n1">
                                    <li class="dropdown">
                                        <button class="btn btn-icon btn-white btn-pill dropdown-toggle" data-bs-toggle="dropdown" data-bs-offset="0,0" data-bs-auto-close="outside">
                                            <!-- three-dots -->
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots" viewBox="0 0 16 16">
                                                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z" />
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <ul class="tyn-list-links">
                                                <li>
                                                    <button data-bs-dismiss="modal">
                                                        <!-- chat-left-text -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-left-text" viewBox="0 0 16 16">
                                                            <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                                            <path d="M3 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 6a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 6zm0 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                                        </svg>
                                                        <span>Start Texting</span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <a href="#callingScreen" data-bs-toggle="modal">
                                                        <!-- telephone -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                                        </svg>
                                                        <span>Audio Call</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#videoCallingScreen" data-bs-toggle="modal">
                                                        <!-- camera-video -->
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-video" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd" d="M0 5a2 2 0 0 1 2-2h7.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 4.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 13H2a2 2 0 0 1-2-2V5zm11.5 5.175 3.5 1.556V4.269l-3.5 1.556v4.35zM2 4a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H2z" />
                                                        </svg>
                                                        <span>Video Call</span>
                                                    </a>
                                                </li>
                                            </ul><!-- .tyn-list-links -->
                                        </div><!-- .dropdown-menu -->
                                    </li><!-- li -->
                                </ul><!-- .tyn-media-option-list -->
                            </div><!-- .tyn-media-group -->
                        </li><!-- li -->
                    </ul><!-- .tyn-media-list -->
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <!-- x-lg -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </button>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <div class="modal fade" tabindex="-1" id="deleteChat">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0">
                <div class="modal-body">
                    <div class="py-4 px-4 text-center">
                        <h3>Delete chat</h3>
                        <p class="small">Once you delete your copy of this conversation, it cannot be undone.</p>
                        <ul class="tyn-list-inline gap gap-3 pt-1 justify-content-center">
                            <li>
                                <button class="btn btn-danger" data-bs-dismiss="modal">Delete</button>
                            </li>
                            <li>
                                <button class="btn btn-light" data-bs-dismiss="modal">No</button>
                            </li>
                        </ul>
                    </div>
                </div><!-- .modal-body -->
                <button class="btn btn-md btn-icon btn-pill btn-white shadow position-absolute top-0 end-0 mt-n3 me-n3" data-bs-dismiss="modal">
                    <!-- x-lg -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                    </svg>
                </button>
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->
    <script src="assets/js/bundle1c4a.js?v131"></script>
    <!-- <script src="assets/js/app1c4a.js?v131"></script> -->
</body>


<!-- Mirrored from connectme-html.themeyn.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Sep 2023 07:50:32 GMT -->
</html>