<?php

namespace App\Http\Controllers\Api;

use App\Repositories\User\UserRepository;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * @var $userRepository
     */
    protected $userRepository;

    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Login user
     *
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            return response()->json(['error' => ['message'=>'Unauthorized']],self::HTTP_UNAUTHORIZED );

        $token = $this->userRepository->login(Auth::user());
        return response()->json(['success' => $token], self::HTTP_OK);
    }

    /**
     * Logout user
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        $this->userRepository->logout(Auth::user());
        return response()->json([
            'success' => [
                'message' => 'Successfully logged out'
            ]
        ],self::HTTP_OK);
    }
}