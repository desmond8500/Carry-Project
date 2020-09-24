<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateLieuAPIRequest;
use App\Http\Requests\API\UpdateLieuAPIRequest;
use App\Models\Lieu;
use App\Repositories\LieuRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class LieuController
 * @package App\Http\Controllers\API
 */

class LieuAPIController extends AppBaseController
{
    /** @var  LieuRepository */
    private $lieuRepository;

    public function __construct(LieuRepository $lieuRepo)
    {
        $this->lieuRepository = $lieuRepo;
    }

    /**
     * Display a listing of the Lieu.
     * GET|HEAD /lieus
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $lieus = $this->lieuRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($lieus->toArray(), 'Lieus retrieved successfully');
    }

    /**
     * Store a newly created Lieu in storage.
     * POST /lieus
     *
     * @param CreateLieuAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateLieuAPIRequest $request)
    {
        $input = $request->all();

        $lieu = $this->lieuRepository->create($input);

        return $this->sendResponse($lieu->toArray(), 'Lieu saved successfully');
    }

    /**
     * Display the specified Lieu.
     * GET|HEAD /lieus/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Lieu $lieu */
        $lieu = $this->lieuRepository->find($id);

        if (empty($lieu)) {
            return $this->sendError('Lieu not found');
        }

        return $this->sendResponse($lieu->toArray(), 'Lieu retrieved successfully');
    }

    /**
     * Update the specified Lieu in storage.
     * PUT/PATCH /lieus/{id}
     *
     * @param int $id
     * @param UpdateLieuAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLieuAPIRequest $request)
    {
        $input = $request->all();

        /** @var Lieu $lieu */
        $lieu = $this->lieuRepository->find($id);

        if (empty($lieu)) {
            return $this->sendError('Lieu not found');
        }

        $lieu = $this->lieuRepository->update($input, $id);

        return $this->sendResponse($lieu->toArray(), 'Lieu updated successfully');
    }

    /**
     * Remove the specified Lieu from storage.
     * DELETE /lieus/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Lieu $lieu */
        $lieu = $this->lieuRepository->find($id);

        if (empty($lieu)) {
            return $this->sendError('Lieu not found');
        }

        $lieu->delete();

        return $this->sendSuccess('Lieu deleted successfully');
    }
}
