<div class="modal fade" id="deleteModal{{ $deletedComic->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $deletedComic->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $deletedComic->id }}">Confirm Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure you want to permanently delete "{{ $deletedComic->title }}"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                    <form action="{{ route('comics.forceDelete', $deletedComic->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Proceed</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>