<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
<<<<<<< HEAD
      © <script>document.write(new Date().getFullYear())</script>
      , made with ❤️ by <a href="{{ (!empty(config('variables.creatorUrl')) ? config('variables.creatorUrl') : '') }}" target="_blank" class="footer-link fw-medium">{{ (!empty(config('variables.creatorName')) ? config('variables.creatorName') : '') }}</a>
    </div>
    <div  class="d-none d-lg-inline-block">
      <a href="{{ config('variables.licenseUrl') ? config('variables.licenseUrl') : '#' }}" class="footer-link me-4" target="_blank">License</a>
      <a href="{{ config('variables.moreThemes') ? config('variables.moreThemes') : '#' }}" target="_blank" class="footer-link me-4">More Themes</a>
      <a href="{{ config('variables.documentation') ? config('variables.documentation').'/laravel-introduction.html' : '#' }}" target="_blank" class="footer-link me-4">Documentation</a>
      <a href="{{ config('variables.support') ? config('variables.support') : '#' }}" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
=======
      © <script>
        document.write(new Date().getFullYear())

      </script>
      
    </div>
    <div>
      <a href="#" target="_blank" class="footer-link me-4">Link1</a>
      <a href="#" target="_blank" class="footer-link me-4">Link2</a>
      <a href="#" target="_blank" class="footer-link me-4">Link3</a>
      <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">Link4</a>
>>>>>>> 91224eec7d61b0977d31fd1b1d5f4070b50c39bc
    </div>
  </div>
</footer>
<!--/ Footer-->
