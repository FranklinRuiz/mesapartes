<div class="timeline-container top-circle">
    <section class="timeline">
        <?php foreach ($data as $d) { ?>
            <div class="timeline-block">
                <div class="timeline-point small">
                </div>
                <!-- timeline-point -->
                <div class="timeline-content">
                    <div class="card social-card share full-width">
                        <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                        </div>
                        <div class="card-header clearfix">
                            <h5><?= $d["area"] ?> - <?= strtoupper($d["estado"]) ?></h5>
                            <h6 class="d-flex align-items-center">
                                <span class="location semi-bold d-flex align-items-center">
                                    <i class="pg-icon">calendar</i> 
                                    <?= $d["fecha"] ?>
                                </span>
                            </h6>
                        </div>
                    </div>
                </div>
                <!-- timeline-content -->
            </div>
        <?php } ?>
    </section>
    <!-- timeline -->
</div>