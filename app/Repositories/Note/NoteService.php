<?php

namespace App\Repositories\Note;

use App\Models\Note;
use Illuminate\Pagination\LengthAwarePaginator;

class NoteService implements NoteRepository
{

    /**
     * @var $note
     */
    protected $note;

    /**
     * NoteService constructor.
     *
     * @param  Note $note
     */
    public function __construct(Note $note)
    {
        $this->note = $note;
    }

    /**
     * Get paginated notes.
     *
     * @return LengthAwarePaginator
     */
    public function getAllNotes(int $userId): LengthAwarePaginator
    {
        return $this->note->owner($userId)->with('user')->paginate(10);
    }

    /**
     * Get note by id.
     *
     * @param int $id
     * @param int $userId
     * @return Note
     */
    public function getNote(int $id, int $userId): Note
    {
        return $this->note->owner($userId)->with('user')->findOrFail($id);
    }

    /**
     * Create a new note.
     *
     * @param array $inputs
     * @param int $userId
     * @return Note
     */
    public function createNote(array $inputs, int $userId): Note
    {
        $inputs['user_id'] = $userId;
        return  $this->note->create($inputs);
    }

    /**
     * Update note by id.
     *
     * @param int $id
     * @param int $userId
     * @param array $inputs
     * @return Note
     */
    public function updateNote(int $id, int $userId, array $inputs): Note
    {
        $note = $this->note->owner($userId)->findOrFail($id);
        $note->update($inputs);
        return $note;
    }

    /**
     * Delete note by id.
     *
     * @param int $id
     * @param int $userId
     * @return void
     */
    public function deleteNote(int $id, int $userId): void
    {
         $this->note->owner($userId)->findOrFail($id)->delete();
    }
}