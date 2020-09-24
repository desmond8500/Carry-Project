<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLieuRequest;
use App\Http\Requests\UpdateLieuRequest;
use App\Repositories\LieuRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class LieuController extends AppBaseController
{
    /** @var  LieuRepository */
    private $lieuRepository;

    public function __construct(LieuRepository $lieuRepo)
    {
        $this->lieuRepository = $lieuRepo;
    }

    /**
     * Display a listing of the Lieu.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $lieus = $this->lieuRepository->paginate(10);

        return view('lieus.index')
            ->with('lieus', $lieus);
    }

    /**
     * Show the form for creating a new Lieu.
     *
     * @return Response
     */
    public function create()
    {
        return view('lieus.create');
    }

    /**
     * Store a newly created Lieu in storage.
     *
     * @param CreateLieuRequest $request
     *
     * @return Response
     */
    public function store(CreateLieuRequest $request)
    {
        $input = $request->all();

        $lieu = $this->lieuRepository->create($input);

        Flash::success('Lieu saved successfully.');

        return redirect(route('lieus.index'));
    }

    /**
     * Display the specified Lieu.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $lieu = $this->lieuRepository->find($id);

        if (empty($lieu)) {
            Flash::error('Lieu not found');

            return redirect(route('lieus.index'));
        }

        return view('lieus.show')->with('lieu', $lieu);
    }

    /**
     * Show the form for editing the specified Lieu.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $lieu = $this->lieuRepository->find($id);

        if (empty($lieu)) {
            Flash::error('Lieu not found');

            return redirect(route('lieus.index'));
        }

        return view('lieus.edit')->with('lieu', $lieu);
    }

    /**
     * Update the specified Lieu in storage.
     *
     * @param int $id
     * @param UpdateLieuRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLieuRequest $request)
    {
        $lieu = $this->lieuRepository->find($id);

        if (empty($lieu)) {
            Flash::error('Lieu not found');

            return redirect(route('lieus.index'));
        }

        $lieu = $this->lieuRepository->update($request->all(), $id);

        Flash::success('Lieu updated successfully.');

        return redirect(route('lieus.index'));
    }

    /**
     * Remove the specified Lieu from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $lieu = $this->lieuRepository->find($id);

        if (empty($lieu)) {
            Flash::error('Lieu not found');

            return redirect(route('lieus.index'));
        }

        $this->lieuRepository->delete($id);

        Flash::success('Lieu deleted successfully.');

        return redirect(route('lieus.index'));
    }
}
