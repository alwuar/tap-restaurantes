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

<div class="modal fade" id="promoModal" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body p-0">
        <div class="text-center">
          <small class="aviso">Toca fuera de la imagen para cerrar</small>
        </div>
        {{$promoModal ?? 'no disponible'}}
      </div>
    </div>
  </div>
</div>