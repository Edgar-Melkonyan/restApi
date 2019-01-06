<?php

namespace App\Repositories\Note;

use App\Models\Note;
use Illuminate\Pagination\LengthAwarePaginator;

interface NoteRepository
{
    public function getAllNotes(int $userId): LengthAwarePaginator;
    public function getNote(int $id, int $userId): Note;
    public function createNote(array $inputs, int $userId): Note;
    public function updateNote(int $id, int $userId, array $inputs): Note;
    public function deleteNote(int $id, int $userId): void;
}