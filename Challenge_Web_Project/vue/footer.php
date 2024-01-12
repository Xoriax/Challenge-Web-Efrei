<footer>
  <p>RestoHub</p>
  <p>Tous droits réservés.</p>
  <div class="footer-links">
    <a href="?page=form">Reserver</a>
    <a href="?page=contact" :class="{ 'active': window.location.href.includes('contact') }"
      style="text-decoration: none;">Contact</a>
    <a href="?page=restaurant_view"
      :class="{ 'active': window.location.href.includes('restaurant_view') }">Restaurant</a>
  </div>
</footer>

</body>

</html>