<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1734 pt-5 pb-5">
    <div class="container-fluid">
        <div class="text-center">
            <h2 class="font-weight-bold">Recent Projects</h2>
        </div>
        <hr class="separation mb-5">
        <div class="logo-link">
            <div class="grid-container">
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
                <div class="grid-item">
                    <div class="position-relative content-infor">
                        <div class="infor-link d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <a class="hyperlink_website" href="#">
                                    <i class="fas fa-plus"></i>
                                </a>
                                <h3 class="mt-3"><a href="" class="font-weight-bold">Fusce eget arcu</a></h3>
                                <span><a href="">Design</a></span>  
                            </div>
                        </div>
                        <img src="images/logo.png" alt="logo.png" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
        <div class="hyperlink text-center font-weight-bold mt-5">
            <a class="px-4 py-3" href="">
                <span>View full portfolio</span>
                <i class="fas fa-briefcase ml-1"></i>
            </a>
        </div>
    </div>
</div>