<div class="modal fade" id="deleteComicModal" tabindex="-1" role="dialog" aria-labelledby="deleteComicModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteComicModal">Conferma Cancellazione</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Sei sicuro di voler cancellare questo fumetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>
        
        <button type="button" class="btn btn-primary" id="confirmDeleteButton">Cancella</button>
    
        <form id="deleteComicForm" action="{{ route('comics.destroy', $comic['id']) }}" method="POST" style="display: none;">
          @csrf
          @method('DELETE')
        </form>
      </div>
    </div>
  </div>
</div>
