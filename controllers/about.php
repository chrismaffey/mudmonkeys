<?php
declare(strict_types=1);

return [
    'pageTitle' => 'About',
    'pageDescription' => 'Learn about the Mud Monkeys running crew and our trail adventures.',
    'currentPage' => 'about',
    'renderContent' => static function (): void {
        ?>
        <section class="page-header py-5 text-white">
            <div class="container">
                <h1 class="display-5 fw-bold mb-3">About Mud Monkeys</h1>
                <p class="lead mb-0">A running crew for people looking for out of town adventures.</p>
            </div>
        </section>

        <section class="container py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="about-logo-panel rounded-4 p-4 p-md-5 text-center">
                        <img class="about-logo" src="/assets/nad.png" alt="Nad the Mud Monkeys mascot logo" width="256" height="256">
                    </div>
                </div>
                <div class="col-lg-7">
                    <span class="badge rounded-pill text-bg-warning mb-3">Our crew</span>
                    <h2 class="display-6 fw-bold mb-4">Good running adventures are better shared.</h2>
                    <p class="lead">Mud Monkeys is an Auckland based running club that brings runners together for out-of-town adventures, trail weekends, and memorable days on foot.</p>
                    <p>We choose interesting destinations, plan the important details, and make it easier to get beyond the usual local loop. The focus is simple: explore new places, enjoy the company, and come home with a little more mud on the shoes.</p>
                    <p class="mb-4">Trips vary in distance and difficulty, so check the calendar listing before committing and choose an adventure that suits your experience.


                    </p>
                    <a class="btn btn-dark btn-lg" href="/calendar">Explore upcoming trips</a>
                </div>
            </div>
            <div class="row align-items-center g-5 mt-4">
                <div class="col-lg-5">

                </div>
                <div class="col-lg-7">


                    <h3 class=" fw-bold mb-4 mt-4">Why start a new running club and incorporated society?</h3>
                    <p>There are plenty of great running clubs and groups around Auckland who organise regular weekly group runs.</p>
                    <p>We wanted to create a community for runners who enjoy exploring new places and sharing memorable experiences beyond the weekly group run.</p>
                    <p>By forming an incorporated society, we can organize trips more effectively, spread the load for the organisers, and provide a structured environment for our members.</p>
                </div>
            </div>
        </section>
        <section class="club-details py-5">
            <div class="container">
                <div class="mb-4 mb-lg-5">
                    <span class="badge rounded-pill text-bg-success mb-3">Official details</span>
                    <h2 class="display-6 fw-bold mb-2">Club information</h2>
                    <p class="text-muted mb-0">Banking and registration details for Mud Monkeys Inc.</p>
                </div>

                <div class="row g-4 align-items-stretch">
                    <div class="col-lg-4">
                        <article class="details-card details-card-bank h-100 rounded-4 p-4 p-xl-5">
                            <p class="details-kicker mb-2">Payments</p>
                            <h3 class="h4 fw-bold mb-4">Bank account</h3>
                            <dl class="details-list mb-0">
                                <div>
                                    <dt>Account name</dt>
                                    <dd>Mud Monkeys Inc</dd>
                                </div>
                                <div>
                                    <dt>Account number</dt>
                                    <dd class="account-number">38 9028 0094441 00</dd>
                                </div>
                            </dl>
                        </article>
                    </div>

                    <div class="col-lg-8">
                        <article class="details-card h-100 rounded-4 p-4 p-xl-5">
                            <div class="d-sm-flex justify-content-between align-items-start gap-3 mb-4">
                                <div>
                                    <p class="details-kicker mb-2">New Zealand register</p>
                                    <h3 class="h4 fw-bold mb-0">Incorporated society</h3>
                                </div>
                                <span class="status-badge mt-3 mt-sm-0">Registered</span>
                            </div>
                            <dl class="details-list details-list-grid mb-0">
                                <div>
                                    <dt>Society name</dt>
                                    <dd>Mud Monkeys Inc</dd>
                                </div>
                                <div>
                                    <dt>NZBN</dt>
                                    <dd>9429053756657</dd>
                                </div>
                                <div>
                                    <dt>Incorporation number</dt>
                                    <dd>50264271</dd>
                                </div>
                                <div>
                                    <dt>Date of incorporation</dt>
                                    <dd><time datetime="2026-06-18">18 June 2026</time></dd>
                                </div>
                                <div>
                                    <dt>Governing legislation</dt>
                                    <dd>Incorporated Societies Act 2022</dd>
                                </div>
                                <div>
                                    <dt>More than 10 members</dt>
                                    <dd>Yes <span class="text-muted fw-normal">— section 8(1)</span></dd>
                                </div>
                            </dl>
                            <div class="pt-4 mt-2 border-top">
                                <a class="btn btn-outline-success fw-semibold" href="http://localhost/about" target="_blank" rel="noopener noreferrer">
                                    View Companies Office Record <span aria-hidden="true">&#8599;</span>
                                    <span class="visually-hidden"> (opens in a new tab)</span>
                                </a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <?php
    },
];
