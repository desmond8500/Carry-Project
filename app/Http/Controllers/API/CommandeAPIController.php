<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateCommandeAPIRequest;
use App\Http\Requests\API\UpdateCommandeAPIRequest;
use App\Models\Commande;
use App\Repositories\CommandeRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class CommandeController
 * @package App\Http\Controllers\API
 */

class CommandeAPIController extends AppBaseController
{
    /** @var  CommandeRepository */
    private $commandeRepository;

    public function __construct(CommandeRepository $commandeRepo)
    {
        $this->commandeRepository = $commandeRepo;
    }

    /**
     * Display a listing of the Commande.
     * GET|HEAD /commandes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $commandes = $this->commandeRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($commandes->toArray(), 'Commandes retrieved successfully');
    }

    /**
     * Store a newly created Commande in storage.
     * POST /commandes
     *
     * @param CreateCommandeAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateCommandeAPIRequest $request)
    {
        $input = $request->all();

        $commande = $this->commandeRepository->create($input);

        return $this->sendResponse($commande->toArray(), 'Commande saved successfully');
    }

    /**
     * Display the specified Commande.
     * GET|HEAD /commandes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Commande $commande */
        $commande = $this->commandeRepository->find($id);

        if (empty($commande)) {
            return $this->sendError('Commande not found');
        }

        return $this->sendResponse($commande->toArray(), 'Commande retrieved successfully');
    }

    /**
     * Update the specified Commande in storage.
     * PUT/PATCH /commandes/{id}
     *
     * @param int $id
     * @param UpdateCommandeAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommandeAPIRequest $request)
    {
        $input = $request->all();

        /** @var Commande $commande */
        $commande = $this->commandeRepository->find($id);

        if (empty($commande)) {
            return $this->sendError('Commande not found');
        }

        $commande = $this->commandeRepository->update($input, $id);

        return $this->sendResponse($commande->toArray(), 'Commande updated successfully');
    }

    /**
     * Remove the specified Commande from storage.
     * DELETE /commandes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Commande $commande */
        $commande = $this->commandeRepository->find($id);

        if (empty($commande)) {
            return $this->sendError('Commande not found');
        }

        $commande->delete();

        return $this->sendSuccess('Commande deleted successfully');
    }
}
