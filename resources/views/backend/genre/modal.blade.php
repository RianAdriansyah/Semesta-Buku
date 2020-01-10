<!-- Modal Edit-->
<div class="modal fade" id="editGenre{{ $list->id }}" tabindex="-1" role="dialog" aria-labelledby="editGenreLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editGenreLabel">Edit Genre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{ route('genre.update', $list->id) }}" method="post">
          <input type="hidden" name="_method" value="PATCH">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="nama_genre">Nama Genre</label>
          <input type="text" class="form-control" name="nama_genre" value="{{ $list->nama_genre }}">
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>