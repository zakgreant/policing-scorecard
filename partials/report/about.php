<div class="section why">
  <div class="content">
    <h1 class="title">
      About This Scorecard
    </h1>
    <p>
      <strong>This is the first nationwide evaluation of policing in the United States.</strong> It was built using data from state and federal databases, public records requests to local police departments, and media reports.
    </p>
    <p>
      <a href="/about" class="button">methodology</a>
      <a href="https://drive.google.com/drive/folders/1XAT1uFPXj5AsvNTzFeNeeTXGLP09HEIh" target="_blank" class="button">Source Data</a>
    </p>
    <p>&nbsp;</p>
    <p>
      <strong>Use this Scorecard to identify issues within police departments that require the most urgent interventions and hold officials accountable for implementing solutions.</strong> For example, cities with higher rates of arrests for low level offenses could benefit most from solutions that create alternatives to policing and arrest for these offenses. In cities where police make fewer arrests overall but use more force when making arrests, communities could benefit significantly from policies designed to <a href="http://useofforceproject.org/" target="_blank">limit police use force</a>. And cities where complaints of police misconduct are rarely ruled in favor of civilians could benefit from creating an oversight structure to independently investigate these complaints.
    </p>
    <p>&nbsp;</p>
    <p class="take-action">Here's how to start pushing for change:</p>
  </div>
  <div class="content">
    <p>&nbsp;</p>
  </div>
  <div class="content">
    <div class="left number number-1">
      <ul>
        <li>
          <?php if ($type === 'sheriff'): ?>
          <strong>Contact Your County Sheriff</strong>, share this scorecard with them and urge them to enact policies to address the issues you've identified:
          <?php else: ?>
          <strong>Contact your Mayor and Police Chief</strong>, share this scorecard with them and urge them to enact policies to address the issues you've identified:
          <?php endif; ?>

          <ul class="contacts">
          <?php if (!empty($scorecard['agency']['mayor_name'])): ?>
            <li>
              <strong>Mayor <?= $scorecard['agency']['mayor_name'] ?></strong>
            <?php if (!empty($scorecard['agency']['mayor_phone'])): ?>
              <br>
              Phone:&nbsp; <a href="tel:1-<?= $scorecard['agency']['mayor_phone'] ?>"><?= $scorecard['agency']['mayor_phone'] ?></a>
            <?php endif; ?>
            <?php if (!empty($scorecard['agency']['mayor_email'])): ?>
              <br>
              Email:&nbsp; <a href="mailto:<?= $scorecard['agency']['mayor_email'] ?>"><?= $scorecard['agency']['mayor_email'] ?></a>
            <?php endif; ?>
            </li>
          <?php endif; ?>
          <?php if (!empty($scorecard['agency']['police_chief_name'])): ?>
            <li>
              <strong><?= ($type === 'police-department') ? 'Police Chief' : '' ?> <?= $scorecard['agency']['police_chief_name'] ?></strong>
            <?php if (!empty($scorecard['agency']['police_chief_phone'])): ?>
              <br>
              Phone:&nbsp; <a href="tel:1-<?= $scorecard['agency']['police_chief_phone'] ?>"><?= $scorecard['agency']['police_chief_phone'] ?></a>
            <?php endif; ?>
            <?php if (!empty($scorecard['agency']['police_chief_email'])): ?>
              <br>
              Email:&nbsp; <a href="mailto:<?= $scorecard['agency']['police_chief_email'] ?>"><?= $scorecard['agency']['police_chief_email'] ?></a>
            <?php endif; ?>
            </li>
          <?php endif; ?>
          </ul>

          <div class="advocacy-tip">
            <strong>Advocacy Tip:</strong>&nbsp; <?= $stateName ?>'s new deadly force law goes into effect in January - requiring departments to adopt more restrictive deadly force policies. Tell your <?= ($type === 'sheriff') ? 'Sheriff' : 'Mayor and Police Chief' ?> to adopt a policy that explicitly requires police to exhaust all available alternatives prior to using deadly force.&nbsp; <a href="http://useofforceproject.org/s/Use-of-Force-Study.pdf" target="_blank"><strong>Research</strong></a> shows this policy saves lives.
          </div>
        </li>
      </ul>
    </div>
    <div class="right number number-2">
      <ul>
        <li><strong>Find your US Senator and US Representative</strong> using the Campaign Zero Advocacy Tool and urge them to support the <strong>PEACE Act</strong>, which would require police departments to adopt policies requiring de-escalation and alternatives to deadly force, a change that would reduce police shootings nationwide.
          <br />
        <a href="https://www.joincampaignzero.org/advocacy" class="button" target="_blank">Campaign Zero Advocacy Tool</a></li>
      </ul>
    </div>
  </div>
  <div class="content">
    <p>&nbsp;</p>
    <p>If you have feedback, questions about the project, or need support with an advocacy campaign, contact our Project Lead, <a href="mailto:sam@thisisthemovement.org">Samuel Sinyangwe</a>.</p>
  </div>
</div>