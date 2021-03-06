<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleUserRequest;
use App\Http\Requests\UpdateRoleUserRequest;
use App\Repositories\RoleUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

use App\User;
use App\Models\Roles;

class RoleUserController extends AppBaseController
{
    /** @var  RoleUserRepository */
    private $roleUserRepository;

    public function __construct(RoleUserRepository $roleUserRepo)
    {
        $this->roleUserRepository = $roleUserRepo;
    }

    /**
     * Display a listing of the RoleUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $roleUsers = $this->roleUserRepository->all();

        return view('role_users.index')
            ->with('roleUsers', $roleUsers);
    }

    /**
     * Show the form for creating a new RoleUser.
     *
     * @return Response
     */
    public function create()
    {
        $role = Roles::pluck('name', 'id');
        $user = User::pluck('name', 'id');

        return view('role_users.create', compact('role', 'user'));
    }

    /**
     * Store a newly created RoleUser in storage.
     *
     * @param CreateRoleUserRequest $request
     *
     * @return Response
     */
    public function store(CreateRoleUserRequest $request)
    {
        $input = $request->all();

        $roleUser = $this->roleUserRepository->create($input);

        Flash::success('Role User saved successfully.');

        return redirect(route('roleUsers.index'));
    }

    /**
     * Display the specified RoleUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roleUser = $this->roleUserRepository->find($id);

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('roleUsers.index'));
        }

        return view('role_users.show')->with('roleUser', $roleUser);
    }

    /**
     * Show the form for editing the specified RoleUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roleUser = $this->roleUserRepository->find($id);

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('roleUsers.index'));
        }

        return view('role_users.edit')->with('roleUser', $roleUser);
    }

    /**
     * Update the specified RoleUser in storage.
     *
     * @param int $id
     * @param UpdateRoleUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoleUserRequest $request)
    {
        $roleUser = $this->roleUserRepository->find($id);

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('roleUsers.index'));
        }

        $roleUser = $this->roleUserRepository->update($request->all(), $id);

        Flash::success('Role User updated successfully.');

        return redirect(route('roleUsers.index'));
    }

    /**
     * Remove the specified RoleUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roleUser = $this->roleUserRepository->find($id);

        if (empty($roleUser)) {
            Flash::error('Role User not found');

            return redirect(route('roleUsers.index'));
        }

        $this->roleUserRepository->delete($id);

        Flash::success('Role User deleted successfully.');

        return redirect(route('roleUsers.index'));
    }
}
