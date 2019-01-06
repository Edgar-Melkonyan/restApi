<?php

namespace App\Http\Controllers\Api;

use App\Repositories\Note\NoteRepository;
use App\Http\Requests\NoteRequest;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    /**
     * @var $noteRepository
     */
    protected $noteRepository;

    /**
     * NoteController constructor.
     *
     * @param NoteRepository $noteRepository
     */
    public function __construct(NoteRepository $noteRepository)
    {
       $this->noteRepository = $noteRepository;
    }

    /**
     * Display a listing of the notes.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = $this->noteRepository->getAllNotes(Auth::user()->id);
        return response()->json(['success' => $notes], self::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $note = $this->noteRepository->getNote($id, Auth::user()->id);
        return response()->json(['success' =>  $note ], self::HTTP_OK);
    }

    /**
     * Store a newly created note.
     *
     * @param array $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequest $request)
    {
        $note = $this->noteRepository->createNote($request->only('title','note'),Auth::user()->id);
        return response()->json(['success' =>  $note ] ,self::HTTP_CREATED );
    }

    /**
     * Update the specified note .
     *
     * @param  int  $id
     * @param array $request
     * @return \Illuminate\Http\Response
     */
    public function update(int $id , NoteRequest $request)
    {
        $note = $this->noteRepository->updateNote($id,  Auth::user()->id, $request->only('title','note'));
        return response()->json(['success' =>  $note], self::HTTP_OK);
    }

    /**
     * Remove the specified note.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $this->noteRepository->deleteNote($id, Auth::user()->id);
        return response()->json(null , self::HTTP_NO_CONTENT);
    }
}
