<?php
declare(strict_types=1);

$configuredEmail = getenv('CONTACT_EMAIL');
$contactEmail = is_string($configuredEmail) && filter_var($configuredEmail, FILTER_VALIDATE_EMAIL)
    ? $configuredEmail
    : null;

return [
    'pageTitle' => 'Contact',
    'pageDescription' => 'Contact Mud Monkeys about running trips, membership, or the club.',
    'currentPage' => 'contact',
    'renderContent' => static function () use ($contactEmail): void {
        ?>
        <section class="page-header py-5 text-white">
            <div class="container">
                <h1 class="display-5 fw-bold mb-3">Contact Mud Monkeys</h1>
                <p class="lead mb-0">Questions about a trip, joining the crew, or the club? Start here.</p>
            </div>
        </section>

        <section class="container py-5">
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-7">
                    <article class="details-card h-100 rounded-4 p-4 p-lg-5">
                        <p class="details-kicker mb-2">New to the crew?</p>
                        <h2 class="h3 fw-bold mb-3">Tell us which trip interests you.</h2>
                        <p class="lead">Include the trip name, your preferred distance, and a little about your recent running experience.</p>
                        <p>This helps us answer the practical questions and make sure the route is a comfortable fit.</p>
                        <div class="d-flex flex-column flex-sm-row gap-3 mt-4">
                            <a class="btn btn-dark" href="/calendar">Browse trips</a>
                            <a class="btn btn-outline-dark" href="/join">How joining works</a>
                        </div>
                    </article>
                </div>

                <div class="col-lg-5">
                    <article class="details-card details-card-bank h-100 rounded-4 p-4 p-lg-5">
                        <p class="details-kicker mb-2">Get in touch</p>
                        <h2 class="h3 fw-bold mb-3">Club enquiries</h2>
                        <?php if ($contactEmail !== null): ?>
                            <p>Send us an email and a committee member will get back to you.</p>
                            <a class="btn btn-success fw-semibold" href="mailto:<?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8') ?>">
                                Email Mud Monkeys
                            </a>
                            <p class="small text-muted mt-3 mb-0"><?= htmlspecialchars($contactEmail, ENT_QUOTES, 'UTF-8') ?></p>
                        <?php else: ?>
                            <p class="mb-0">For now, use the contact details supplied by the organiser of the trip you are interested in.</p>
                        <?php endif; ?>
                        <div class="mt-4 pt-4 border-top">
                            <p class="mb-3">Join the group for club updates, trip discussion, and community posts.</p>
                            <a class="btn btn-primary fw-semibold" href="https://www.facebook.com/groups/mudmonkeysnz" target="_blank" rel="noopener noreferrer">
                                Find us on Facebook <span aria-hidden="true">&#8599;</span>
                                <span class="visually-hidden"> (opens in a new tab)</span>
                            </a>
                        </div>
                    </article>
                </div>
            </div>


            <aside class="details-card rounded-4 p-4 p-lg-5 mb-5 mt-5">
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

        </section>

        <?php
    },
];
