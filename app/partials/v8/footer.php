<?php
$contact = site()['contact']['minimal'];
?>
    <footer class="footer" role="contentinfo">
      <div class="wrap foot-grid">
        <div><p class="foot-label">Studio</p><p><?= e($contact['address']) ?></p></div>
        <div><p class="foot-label">Write</p><p><a href="mailto:<?= e($contact['email']) ?>"><?= e($contact['email']) ?></a><br><a href="<?= e($contact['whatsapp']) ?>" target="_blank" rel="noopener noreferrer"><?= e($contact['phone']) ?></a></p></div>
        <div><p class="foot-label">Build</p><p>Web · Mobile · IoT<br>AI · CRM · DevOps</p></div>
        <div><p class="foot-label">Service pages</p>
<?php foreach (array_slice(site()['services'], 0, 3) as $service): ?>
          <p><a href="<?= e(url('/services-swiss/' . $service['slug'])) ?>"><?= e($service['title']) ?></a></p>
<?php endforeach; ?>
        </div>
      </div>
      <div class="wrap">
        <p class="credits">Photographs: “City activity Jakarta” by Bagus Ghufron (CC0); “Dutch Colonial Buildings on Jalan Kali Besar Barat” by Chainwit. (CC BY 4.0); “Jakarta's skyline from pedestrian crossing” by Shubhi Rofiddinsa (CC BY-SA 4.0); “Jakarta skyline 2” by Stenly Lam (CC BY 2.0); “Jakarta Skyline Part 2” by yohanes budiyanto (CC BY 2.0); “Münster, Hafen, Am Mittelhafen 56” by Dietmar Rabich (CC BY-SA 4.0), via Wikimedia Commons.</p>
        <p class="copyright">© <?= date('Y') ?> DIRAIT. All rights reserved.</p>
      </div>
      <p class="foot-name" aria-hidden="true">DIRAIT</p>
    </footer>
