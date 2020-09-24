<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateTrajetAPIRequest;
use App\Http\Requests\API\UpdateTrajetAPIRequest;
use App\Models\Trajet;
use App\Repositories\TrajetRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class TrajetController
 * @package App\Http\Controllers\API
 */

class TrajetAPIController extends AppBaseController
{
    /** @var  TrajetRepository */
    private $trajetRepository;

    public function __construct(TrajetRepository $trajetRepo)
    {
        $this->trajetRepository = $trajetRepo;
    }

    /**
     * Display a listing of the Trajet.
     * GET|HEAD /trajets
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $trajets = $this->trajetRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($trajets->toArray(), 'Trajets retrieved successfully');
    }

    /**
     * Store a newly created Trajet in storage.
     * POST /trajets
     *
     * @param CreateTrajetAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateTrajetAPIRequest $request)
    {
        $input = $request->all();

        $trajet = $this->trajetRepository->create($input);

        return $this->sendResponse($trajet->toArray(), 'Trajet saved successfully');
    }

    /**
     * Display the specified Trajet.
     * GET|HEAD /trajets/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Trajet $trajet */
        $trajet = $this->trajetRepository->find($id);

        if (empty($trajet)) {
            return $this->sendError('Trajet not found');
        }

        return $this->sendResponse($trajet->toArray(), 'Trajet retrieved successfully');
    }

    /**
     * Update the specified Trajet in storage.
     * PUT/PATCH /trajets/{id}
     *
     * @param int $id
     * @param UpdateTrajetAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTrajetAPIRequest $request)
    {
        $input = $request->all();

        /** @var Trajet $trajet */
        $trajet = $this->trajetRepository->find($id);

        if (empty($trajet)) {
            return $this->sendError('Trajet not found');
        }

        $trajet = $this->trajetRepository->update($input, $id);

        return $this->sendResponse($trajet->toArray(), 'Trajet updated successfully');
    }

    /**
     * Remove the specified Trajet from storage.
     * DELETE /trajets/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Trajet $trajet */
        $trajet = $this->trajetRepository->find($id);

        if (empty($trajet)) {
            return $this->sendError('Trajet not found');
        }

        $trajet->delete();

        return $this->sendSuccess('Trajet deleted successfully');
    }
}
