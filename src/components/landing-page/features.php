<div class="landing-page-feature">
    <?php 
    require_once __DIR__ .'/../../statics/landing-page-features.php';
    foreach($FeaturesData as $feature): 
    ?>
        <div class="feature-data">
            <span><?=  htmlspecialchars($feature->title) ?></span>
            <span><?=  htmlspecialchars($feature->content) ?></span>
        </div>
    <?php endforeach; ?>
</div>