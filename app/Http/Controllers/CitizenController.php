<?php

namespace App\Http\Controllers;

use App\Repositories\CitizenRepository;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CitizenController extends Controller
{
    /**
     * @var CitizenRepository
     */
    private $citizenRepository;

    /**
     * @param CitizenRepository $citizenRepository
     */
    public function __construct(CitizenRepository $citizenRepository)
    {
        $this->citizenRepository = $citizenRepository;
    }

    /**
     * @return View
     */
    public function list() : View
    {
        $citizens = $this->citizenRepository->paginate(10);

        return view('citizen/index', compact('citizens'));
    }

    /**
     * @param Request $request
     * @return RedirectResponse|View
     */
    public function create(Request $request)
    {
        if ($request->isMethod('POST')) {
            $citizen = $this->citizenRepository->create($request->toArray());

            return redirect()->route('citizen::details', ['id' => $citizen->getId()]);
        }

        return view('citizen/create');
    }

    /**
     * @param int $id
     * @return View
     */
    public function details(int $id) : View
    {
        $citizen = $this->citizenRepository->findById($id);

        return view('citizen/details', compact('citizen'));
    }
}
