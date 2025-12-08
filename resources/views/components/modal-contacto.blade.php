<style>
.modal-body {
  position: relative;
}
.aviso {
position: absolute;
color: #fff;

top: -40px;
transform: translateX(-50%);
width: 250px;

}
</style>

<div class="modal fade" id="contactoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body p-0">
        <div class="text-center">
          <small class="aviso">Toca fuera del formulario para cerrar</small>
        </div>
        <script src="https://js.hsforms.net/forms/embed/50790713.js" defer></script>
        <div class="hs-form-frame" data-region="na1" data-form-id="3f02d551-3cda-4e91-817e-ce456b105829" data-portal-id="50790713"></div>

        {{$formVentas}}
      </div>
    </div>
  </div>
</div>