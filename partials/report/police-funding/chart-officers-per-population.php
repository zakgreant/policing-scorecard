<?php if (isset($scorecard['police_funding']['total_officers_2013']) && isset($scorecard['police_funding']['total_officers_2014']) && isset($scorecard['police_funding']['total_officers_2015'])): ?>
<div class="stat-wrapper">
  <h3>Number of officers per 1k population</h3>
  <p>More officers per population than <?= num($scorecard['police_funding']['percentile_officers_per_population'], 0, '%', true) ?> of Depts</p>

  <p>
    <canvas id="bar-chart-officers-per-population"></canvas>
  </p>

  <p class="source-link-wrapper">Source: <a href="https://www.openicpsr.org/openicpsr/project/102180/version/V8/view" class="source-link" target="_blank">Federal LEOKA Database</a></p>
</div>
<?php endif; ?>
