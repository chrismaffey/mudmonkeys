<?php
$pageTitle = 'Calendar';
$currentPage = 'calendar';
$events = [
    [
        'date' => 'December 2026',
        'time' => '2 nights',
        'title' => 'Timber Trail',
        'location' => 'Central North Island',
        'distance' => '42km on Saturday and Sunday',
        'details' => "Weekend away with two days on the trail.\nAccommodation and transport details to be confirmed.\nSuitable for runners comfortable with long back-to-back days.",
    ],
    [
        'date' => 'December 2026',
        'time' => 'Long day out',
        'title' => 'Rangitoto',
        'location' => 'Rangitoto',
        'distance' => '17 Kms',
        'details' => "Private boats to Rangitoto and a BBQ Lunch",
    ],
    [
        'date' => 'October 2026',
        'time' => '2 Days',
        'title' => 'Tongariro northern circuit ',
        'location' => 'Whakapapa',
        'distance' => '37kms',
        'details' => "This is the big one",
    ],
];
require __DIR__ . '/../includes/header.php';
?>
<section class="page-header py-5 text-white">
    <div class="container">
        <h1 class="display-5 fw-bold mb-3">Trip calendar</h1>
        <p class="lead mb-0">Upcoming mudmonkeys trips, trail weekends, and out-of-town running plans.</p>
    </div>
</section>

<section class="container py-5">
    <div class="row g-4">
        <?php foreach ($events as $event): ?>
            <div class="col-lg-4">
                <article class="card event-card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-start gap-3 mb-3">
                            <div>
                                <span class="badge text-bg-success mb-2"><?= htmlspecialchars($event['date'], ENT_QUOTES, 'UTF-8') ?></span>
                                <h2 class="h4 mb-0"><?= htmlspecialchars($event['title'], ENT_QUOTES, 'UTF-8') ?></h2>
                            </div>
                            <span class="fw-bold text-nowrap"><?= htmlspecialchars($event['time'], ENT_QUOTES, 'UTF-8') ?></span>
                        </div>
                        <dl class="row small mb-3">
                            <dt class="col-4">Location</dt>
                            <dd class="col-8"><?= htmlspecialchars($event['location'], ENT_QUOTES, 'UTF-8') ?></dd>
                            <dt class="col-4">Distance</dt>
                            <dd class="col-8 mb-0"><?= htmlspecialchars($event['distance'], ENT_QUOTES, 'UTF-8') ?></dd>
                        </dl>
                        <h3 class="h6 text-uppercase text-muted mb-2">Details</h3>
                        <p class="small mb-0"><?= nl2br(htmlspecialchars($event['details'], ENT_QUOTES, 'UTF-8')) ?></p>
                    </div>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<?php require __DIR__ . '/../includes/footer.php'; ?>
