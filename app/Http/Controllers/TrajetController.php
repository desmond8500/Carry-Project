<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTrajetRequest;
use App\Http\Requests\UpdateTrajetRequest;
use App\Repositories\TrajetRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class TrajetController extends AppBaseController
{
    /** @var  TrajetRepository */
    private $trajetRepository;

    public function __construct(TrajetRepository $trajetRepo)
    {
        $this->trajetRepository = $trajetRepo;
    }

    /**
     * Display a listing of the Trajet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $trajets = $this->trajetRepository->paginate(10);

        return view('trajets.index')
            ->with('trajets', $trajets);
    }

    /**
     * Show the form for creating a new Trajet.
     *
     * @return Response
     */
    public function create()
    {
        return view('trajets.create');
    }

    /**
     * Store a newly created Trajet in storage.
     *
     * @param CreateTrajetRequest $request
     *
     * @return Response
     */
    public function store(CreateTrajetRequest $request)
    {
        $input = $request->all();

        $trajet = $this->trajetRepository->create($input);

        Flash::success('Trajet saved successfully.');

        return redirect()->back();
    }

    /**
     * Display the specified Trajet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $trajet = $this->trajetRepository->find($id);

        if (empty($trajet)) {
            Flash::error('Trajet not found');

            return redirect(route('trajets.index'));
        }

        return view('trajets.show')->with('trajet', $trajet);
    }

    /**
     * Show the form for editing the specified Trajet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $trajet = $this->trajetRepository->find($id);

        if (empty($trajet)) {
            Flash::error('Trajet not found');

            return redirect(route('trajets.index'));
        }

        return view('trajets.edit')->with('trajet', $trajet);
    }

    /**
     * Update the specified Trajet in storage.
     *
     * @param int $id
     * @param UpdateTrajetRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrajetRequest $request)
    {
        $trajet = $this->trajetRepository->find($id);

        if (empty($trajet)) {
            Flash::error('Trajet not found');

            return redirect(route('trajets.index'));
        }

        $trajet = $this->trajetRepository->update($request->all(), $id);

        Flash::success('Trajet updated successfully.');

        return redirect(route('trajets.index'));
    }

    /**
     * Remove the specified Trajet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $trajet = $this->trajetRepository->find($id);

        if (empty($trajet)) {
            Flash::error('Trajet not found');

            return redirect(route('trajets.index'));
        }

        $this->trajetRepository->delete($id);

        Flash::success('Trajet deleted successfully.');

        return redirect(route('trajets.index'));
    }
}
