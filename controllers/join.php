<?php
declare(strict_types=1);

return [
        'pageTitle' => 'Join',
        'pageDescription' => 'Find out how to join Mud Monkeys for a trail-running trip or weekend away.',
        'currentPage' => 'join',
        'renderContent' => static function (): void {
            ?>
            <section class="page-header py-5 text-white">
                <div class="container">
                    <h1 class="display-5 fw-bold mb-3">Join Mud Monkeys</h1>
                    <p class="lead mb-0">Choose an adventure, find the right distance, and come run with us.</p>
                </div>
            </section>

            <section class="container py-5">
                <div class="join-panel rounded-4 p-4 p-lg-5 mb-5">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-4">
                            <span class="badge rounded-pill text-bg-warning mb-3">Membership update</span>
                            <h2 class="h3 fw-bold mb-0">Memberships opening soon</h2>
                        </div>
                        <div class="col-lg-8">
                            <p class="lead mb-0">We are preparing for our first AGM as an incorporated society. Once that is complete, we will be able to welcome new members.</p>
                        </div>
                    </div>
                </div>

                <aside class="details-card rounded-4 p-4 p-lg-5 mb-5">
                    <div class="row align-items-center g-4 g-lg-5">
                        <div class="col-lg-5">
                            <span class="badge rounded-pill text-bg-success mb-3">Meet us locally</span>
                            <h2 class="h3 fw-bold mb-3">Want to meet us before committing to a weekend away?</h2>
                            <p class="mb-0">Join a relaxed Thursday run, or meet us afterwards for a drink and a chat.</p>
                        </div>
                        <div class="col-lg-7">
                            <dl class="details-list details-list-grid mb-0">
                                <div>
                                    <dt>When</dt>
                                    <dd>Thursday, 6:30pm</dd>
                                </div>
                                <div>
                                    <dt>Start point</dt>
                                    <dd>Albany Shoe Science</dd>
                                </div>
                                <div>
                                    <dt>Distance options</dt>
                                    <dd>5–10 km</dd>
                                </div>
                                <div>
                                    <dt>Just joining socially?</dt>
                                    <dd>Meet us around 7:30pm at the pub next door</dd>
                                </div>
                            </dl>
                        </div>
                    </div>
                </aside>

                <div class="mb-4">
                    <span class="details-kicker d-block mb-2">Simple and transparent</span>
                    <h2 class="display-6 fw-bold mb-2">Proposed costs</h2>
                    <p class="text-muted mb-0">Membership and trip fees help cover the real cost of running the club.</p>
                </div>

                <div class="row g-4">
                    <div class="col-lg-4">
                        <article class="details-card details-card-bank h-100 rounded-4 p-4 p-lg-5">
                            <span class="badge rounded-pill text-bg-success mb-3">Annual fee</span>
                            <p class="display-5 fw-bold mb-1">$25</p>
                            <h3 class="h4 fw-bold mb-3">Membership</h3>
                            <p class="mb-0">The proposed membership fee is $25 per year. Membership is required to take part in organised trips.</p>
                        </article>
                    </div>
                    <div class="col-lg-8">
                        <article class="details-card h-100 rounded-4 p-4 p-lg-5">
                            <span class="badge rounded-pill text-bg-warning mb-3">Varies by adventure</span>
                            <h3 class="h4 fw-bold mb-3">Trip costs</h3>
                            <p>Each trip has its own price covering transport, accommodation, selected meals, and other shared expenses.
                                </p>
                            <p class="mb-0">Mud Monkeys is a registered non-profit. Trip prices cover expected costs plus approximately 20% for contingencies.
                                Any small surplus helps subsidise future trips and allow the club to organise bigger adventures in the future.</p>
                        </article>
                    </div>
                </div>

                <div class="join-panel rounded-4 p-4 p-lg-5 mt-5">
                    <div class="row align-items-center g-4">
                        <div class="col-lg-7">
                            <span class="details-kicker d-block mb-2">New runners welcome</span>
                            <h2 class="fw-bold mb-3">You do not have to be the fastest.</h2>
                            <p class="lead mb-2">We care more about a good day out than race pace.</p>
                            <p class="mb-0">Many trips offer shorter-route options, and every listing explains the
                                expected distance and terrain so you can make an informed choice.</p>
                        </div>
                        <div class="col-lg-5 text-lg-end">
                            <div class="d-flex flex-column flex-sm-row flex-lg-column flex-xl-row justify-content-lg-end gap-3">
                                <a class="btn btn-dark btn-lg" href="/calendar">View calendar</a>
                                <a class="btn btn-outline-dark btn-lg" href="/contact">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
        },
];
