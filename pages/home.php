<?php

$page = [
    'layout' => 'home',
    'title' => 'Custom Software Development Agency Jakarta | Web & Mobile Apps | DIRAIT',
    'description' => 'DIRAIT builds custom web, mobile, and IoT software for businesses in Indonesia, Singapore, and Europe. React, React Native, Laravel, Next.js — 30+ projects delivered. Free consultation.',
    'canonical' => 'https://dirait.id/en',
    'scripts' => ['home'],
];

$data = site();
$contact = $data['contact']['minimal'];
$services = $data['services'];
$capabilities = implode(' · ', array_map(static fn (array $service): string => $service['title'], $services)) . ' · ';
$img = static fn (string $file): string => url('/images/home/' . $file);

$projects = [
    ['Brinks', 'Logistics platform'],
    ['Eleganza', 'Retail POS & inventory'],
    ['Go Lumi Marketing', 'CRM & reporting'],
    ['Logeren bij de Molen', 'Booking site'],
    ['Parq Restaurant', 'POS & reservations'],
    ['Winner Research', 'Survey platform'],
];
$clients = ['Brinks', 'Eleganza', 'Go Lumi Marketing', 'Logeren bij de Molen', 'Parq Restaurant', 'Winner Research'];
?>
      <section class="hero" aria-labelledby="hero-title">
        <div class="hero-main wrap">
          <p class="hero-status"><span>All systems live · last deploy 09:43</span></p>
          <h1 id="hero-title">Software for work that <em>can’t stop.</em></h1>
          <div class="hero-foot">
            <div class="hero-copy">
              <p>Custom web, mobile, IoT and AI systems. One team from first screen to field, then on call while it runs. Jakarta, Singapore, Europe.</p>
              <div class="hero-actions">
                <a class="btn light" href="#contact">Start a project</a>
                <a class="btn outline" href="#work">See the work</a>
              </div>
            </div>
            <ol class="console" aria-label="Recent deploys">
              <li><time>09:43</time><b>checkout-api</b><span>v2.14.0 → production</span><em>✓</em></li>
              <li><time>09:21</time><b>fleet-console</b><span>v1.8.2 → production</span><em>✓</em></li>
              <li><time>08:57</time><b>bookings</b><span>v4.1.0 → production</span><em>✓</em></li>
              <li><time>08:30</time><b>payments-sync</b><span>v0.9.4 → staging</span><em class="warn">review</em></li>
            </ol>
          </div>
        </div>
        <ul class="hero-stats">
          <li><b>30+</b><span>systems shipped since 2023</span></li>
          <li><b>240</b><span>devices on MQTT today</span></li>
          <li><b>3</b><span>regions · ID, SG, EU</span></li>
          <li><b>0</b><span>failures in the last 24h</span></li>
        </ul>
      </section>

      <div class="marquee" aria-hidden="true">
        <div class="marquee-track"><span><?= e($capabilities) ?></span><span><?= e($capabilities) ?></span></div>
      </div>

      <section id="services" class="bento wrap" aria-labelledby="services-title">
        <div class="tile head">
          <h2 id="services-title">Six systems, one team.</h2>
          <p>We build the layer a company runs on, then stay to keep it running.</p>
        </div>
        <div class="tile stat"><b>30+</b><span>systems shipped since 2023</span></div>
        <div class="tile service tall">
          <h3><a href="<?= e(url('/services-swiss/web-apps')) ?>">Web &amp; mobile</a></h3>
          <p>React, Next.js, Laravel and React Native. Pixel-accurate builds, offline sync and BLE hardware.</p>
          <span class="meta">22 live</span>
        </div>
        <div class="tile iot">
          <h3><a href="<?= e(url('/services-swiss/iot')) ?>">IoT platforms</a></h3>
          <b>240</b>
          <span>devices reporting through MQTT today</span>
        </div>
        <div class="tile service">
          <h3><a href="<?= e(url('/services-swiss/ai-api')) ?>">AI &amp; APIs</a></h3>
          <p>Payments, WhatsApp, LLMs and GraphQL, wired into the core.</p>
        </div>
        <div class="tile cta-tile"><p>What has to keep working?</p><a class="brandbtn" href="#contact">Tell us</a></div>
        <figure class="tile photo p1">
          <img src="<?= e($img('dutch-colonial-buildings-on-jalan-kali-besar.jpg')) ?>" alt="Dutch colonial buildings on Jalan Kali Besar, Jakarta" width="1920" height="1440" loading="lazy">
          <figcaption>Kali Besar, Jakarta</figcaption>
        </figure>
        <figure class="tile photo p2">
          <img src="<?= e($img('city-activity-jakarta-unsplash.jpg')) ?>" alt="Jakarta traffic passing under trees and towers" width="1920" height="1283" loading="lazy">
          <figcaption>Jakarta, where most systems run</figcaption>
        </figure>
      </section>

      <section id="work" class="work wrap" aria-labelledby="work-title">
        <div class="work-head">
          <h2 id="work-title"><span>Built here.</span><em>Running everywhere.</em></h2>
          <p>Selected systems across logistics, retail, hospitality and research.</p>
          <ul class="work-stats">
            <li><b>30+</b><span>systems shipped</span></li>
            <li><b>3</b><span>regions</span></li>
          </ul>
        </div>
        <div class="work-body">
        <ul class="projects">
<?php foreach ($projects as [$name, $discipline]): ?>
          <li><b><?= e($name) ?></b><span><?= e($discipline) ?></span></li>
<?php endforeach; ?>
        </ul>
        <div class="strip">
          <figure><img src="<?= e($img('jakarta-s-skyline-from-pedestrian-crossing.jpg')) ?>" alt="Jakarta skyline seen from a pedestrian crossing" width="1920" height="1440" loading="lazy"><figcaption>Sudirman, Jakarta</figcaption></figure>
          <figure><img src="<?= e($img('munster-hafen-am-mittelhafen-56-2026-0239.jpg')) ?>" alt="Harbour buildings in Münster, Germany" width="1920" height="1280" loading="lazy"><figcaption>Münster, Germany</figcaption></figure>
          <figure><img src="<?= e($img('jakarta-skyline-2.jpg')) ?>" alt="Jakarta skyline at dusk" width="1024" height="453" loading="lazy"><figcaption>Jakarta at dusk</figcaption></figure>
          <figure><img src="<?= e($img('jakarta-skyline-part-2.jpg')) ?>" alt="Wide view of the Jakarta skyline" width="1546" height="768" loading="lazy"><figcaption>The business district</figcaption></figure>
        </div>
        </div>
      </section>

      <section class="proof" aria-labelledby="proof-title">
        <div class="wrap">
          <h2 id="proof-title">Shipped for</h2>
          <ul class="clients">
<?php foreach ($clients as $client): ?>
            <li><?= e($client) ?></li>
<?php endforeach; ?>
          </ul>
          <ul class="facts">
            <li><b>3</b><span>countries, one delivery team</span></li>
            <li><b>99.96%</b><span>uptime across managed systems</span></li>
            <li><b>6</b><span>people who stay after launch</span></li>
            <li><b>2023</b><span>the year the studio started</span></li>
          </ul>
        </div>
      </section>

      <section id="pricing" class="pricing wrap" aria-labelledby="pricing-title">
        <div class="pricing-head">
          <h2 id="pricing-title">Clear prices for a defined build.</h2>
          <p>Fixed scope, fixed price. Larger systems are quoted after one call.</p>
        </div>
        <div class="plans">
<?php foreach ($data['pricing'] as $tier): ?>
          <?php $quote = $tier['priceNote'] === 'info'; ?>
          <article class="plan<?= $tier['popular'] ? ' featured' : '' ?>">
            <h3><?= e($tier['name']) ?></h3>
            <p class="price"><?= $quote ? 'Contact us' : e($tier['price']) ?></p>
            <span class="per"><?= $quote ? 'for a scoped quote' : e($tier['priceNote']) ?></span>
            <ul>
<?php foreach ($tier['features'] as $feature): ?>
              <li><?= e($feature) ?></li>
<?php endforeach; ?>
            </ul>
            <a class="btn<?= $tier['popular'] ? '' : ' ghost' ?>" href="#contact"><?= e($tier['cta']) ?></a>
          </article>
<?php endforeach; ?>
        </div>
      </section>

      <section id="faq" class="faq wrap" aria-labelledby="faq-title">
        <h2 id="faq-title">Before the first call.</h2>
        <div class="faq-list">
<?php foreach ($data['faq'] as $item): ?>
          <details name="faq">
            <summary><?= e($item['question']) ?><span aria-hidden="true"></span></summary>
            <p><?= e($item['answer']) ?></p>
          </details>
<?php endforeach; ?>
        </div>
      </section>

      <section id="contact" class="cta" aria-labelledby="cta-title">
        <div class="wrap cta-inner">
          <h2 id="cta-title">Tell us what has to work.</h2>
          <div class="cta-side">
            <p>One call, a written scope, a dated plan. Reply within one working day.</p>
            <a class="btn dark" href="mailto:<?= e($contact['email']) ?>?subject=Project%20enquiry">Email <?= e($contact['email']) ?></a>
            <a class="cta-link" href="<?= e($contact['whatsapp']) ?>" target="_blank" rel="noopener noreferrer">Or message <?= e($contact['phone']) ?></a>
          </div>
        </div>
      </section>
